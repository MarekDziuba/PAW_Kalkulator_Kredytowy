<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kredyt,&$lat,&$oproc){
	$kredyt = isset($_REQUEST['kredyt']) ? $_REQUEST['kredyt'] : null;
	$lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$oproc = isset($_REQUEST['oproc']) ? $_REQUEST['oproc'] : null;
}

function validate(&$kredyt,&$lat,&$oproc,&$messages){
	global $role;
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($oproc) && isset($lat) && isset($oproc))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kredyt == "") {
		$messages [] = 'Nie podano liczby 1';
	}
	if ( $lat == "") {
		$messages [] = 'Nie podano liczby 2';
	}
	if ( $oproc == "") {
		$messages [] = 'Nie podano liczby 3';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $kredyt, $lat i $oproc są liczbami całkowitymi
	if (! is_numeric( $kredyt )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $lat )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $oproc )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}

	// sprawdza przedziały $kredyt, $lat i $oproc zależne od roli
	if ( $kredyt < 10000 || $kredyt > 300000) {
		$messages [] = 'Zły przedział dla kredytu';
	}
	if ( $lat < 5 || $lat > 20) {
		$messages [] = 'Zły przedział dla lat';
	}
	// przedział dla admina
	if($role == 'admin') {	
	if ( $oproc < 1 || $oproc > 99) {
		$messages [] = 'Zły przedział dla oprocentowania';
	}}// przedział dla user lub innych użytkowników
	else {	
		if ( $oproc < 5 || $oproc > 20) {
			$messages [] = 'Zły przedział dla oprocentowania';
	}}


	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kredyt,&$lat,&$oproc,&$messages,&$result){
	
	//konwersja parametrów na int
	$kredyt = intval($kredyt);
	$lat = intval($lat);
	$oproc = intval($oproc);
	
			//wykonanie operacji
			$months = $lat * 12;
			$ods = $kredyt * $lat * ($oproc/100);
			$all = $kredyt + $ods;
			$result = number_format(($all/$months),2, ',', ' ');
}

$kredyt = null;
$lat = null;
$oproc = null;
$result = null;
$messages = array();
getParams($kredyt,$lat,$oproc);

if ( validate($kredyt,$lat,$oproc,$messages) ) { // gdy brak błędów
	process($kredyt,$lat,$oproc,$messages,$result);
}



include 'calc_view.php';