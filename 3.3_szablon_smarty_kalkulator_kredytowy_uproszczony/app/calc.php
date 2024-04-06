<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
	$form['kredyt'] = isset($_REQUEST['kredyt']) ? $_REQUEST['kredyt'] : null;
	$form['lat'] = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$form['oproc'] = isset($_REQUEST['oproc']) ? $_REQUEST['oproc'] : null;
}

function validate(&$form,&$messages){

	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['kredyt']) && isset($form['lat']) && isset($form['oproc']))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kredyt'] == "") {
		$messages [] = 'Nie podano liczby 1';
	}
	if ( $form['lat'] == "") {
		$messages [] = 'Nie podano liczby 2';
	}
	if ( $form['oproc'] == "") {
		$messages [] = 'Nie podano liczby 3';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $kredyt, $lat i $oproc są liczbami całkowitymi
	if (! is_numeric( $form['kredyt'] )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $form['lat'] )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $form['oproc'] )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}

	// sprawdza przedziały $kredyt, $lat i $oproc zależne od roli
	if ( $form['kredyt'] < 10000 || $form['kredyt'] > 300000) {
		$messages [] = 'Zły przedział dla kredytu';
	}
	if ( $form['lat'] < 5 || $form['lat'] > 20) {
		$messages [] = 'Zły przedział dla lat';
	}	
	if ( $form['oproc'] < 5 || $form['oproc'] > 20) {
			$messages [] = 'Zły przedział dla oprocentowania';
	}


	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$form,&$messages,&$result){
	
	//konwersja parametrów na int
	$kredyt = intval($form['kredyt']);
	$lat = intval($form['lat']);
	$oproc = intval($form['oproc']);
	
			//wykonanie operacji
			$months = $lat * 12;
			$ods = $kredyt * $lat * ($oproc/100);
			$all = $kredyt + $ods;
			$result = number_format(($all/$months),2, ',', ' ');

}

$form = null;
$result = null;
$messages = array();
getParams($form);

if ( validate($form,$messages) ) { // gdy brak błędów
	process($form,$messages,$result);
}


$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytu hipotecznego');
$smarty->assign('page_footer','przykładowa tresć stopki wpisana do szablonu z kontrolera');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('page_footer','przykładowa tresć stopki wpisana do szablonu z kontrolera');
$smarty->assign('page_author','Marek Dziuba');
$smarty->assign('common_word_1','hipoteczny');
$smarty->assign('common_word_2','kredytu hipotecznego');



//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);


// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');
