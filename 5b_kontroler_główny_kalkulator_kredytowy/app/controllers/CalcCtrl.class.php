<?php
// KONTROLER strony kalkulatora

namespace app\controllers;

use app\forms\CalcForm;

class CalcCtrl {
 
	private $form;   
	private $result;

	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcForm();
	}

public function getParams(){
	$this->form->kredyt = getFromRequest('kredyt');
	$this->form->lat = getFromRequest('lat');
	$this->form->oproc = getFromRequest('oproc');
}

public function validate(){

	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($this->form->kredyt) && isset($this->form->lat) && isset($this->form->oproc))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->kredyt == "") {
		getMessages()->addError('Nie podano liczby 1');
	}
	if ( $this->form->lat == "") {
		getMessages()->addError('Nie podano liczby 2');
	}
	if ( $this->form->oproc == "") {
		getMessages()->addError('Nie podano liczby 3');
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (! getMessages()->isError()) {
	
	// sprawdzenie, czy $kredyt, $lat i $oproc są liczbami całkowitymi
	if (! is_numeric( $this->form->kredyt )) {
		getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}
	if (! is_numeric( $this->form->lat )) {
		getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
	}	
	if (! is_numeric( $this->form->oproc )) {
		getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
	}

	// sprawdza przedziały $kredyt, $lat i $oproc zależne od roli
	if ( $this->form->kredyt < 10000 || $this->form->kredyt > 300000) {
		getMessages()->addError('Zły przedział dla kredytu');
	}
	if ( $this->form->lat < 5 || $this->form->lat > 20) {
		getMessages()->addError('Zły przedział dla lat');
	}	
	if ( $this->form->oproc < 5 || $this->form->oproc > 20) {
		getMessages()->addError('Zły przedział dla oprocentowania');
	}
}

return ! getMessages()->isError();
}

public function process(){
	
	$this->getparams();

	if ($this->validate()) {
		//konwersja parametrów na int
		$this->form->kredyt = intval($this->form->kredyt);
		$this->form->lat = intval($this->form->lat);
		$this->form->oproc = intval($this->form->oproc);
		
				//wykonanie operacji
				$months = $this->form->lat * 12;
				$ods = $this->form->kredyt * $this->form->lat * ($this->form->oproc/100);
				$all = $this->form->kredyt + $ods;
				$this->result->result = number_format(($all/$months),2, ',', ' ');

	}
$this->generateView();
}

public function generateView(){

getSmarty()->assign('page_title','Kalkulator kredytu hipotecznego');
getSmarty()->assign('page_footer','przykładowa tresć stopki wpisana do szablonu z kontrolera');
getSmarty()->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
getSmarty()->assign('page_header','Szablony Smarty');
getSmarty()->assign('page_footer','przykładowa tresć stopki wpisana do szablonu z kontrolera');
getSmarty()->assign('page_author','Marek Dziuba');
getSmarty()->assign('common_word_1','hipoteczny');
getSmarty()->assign('common_word_2','kredytu hipotecznego');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia

getSmarty()->assign('form',$this->form);
getSmarty()->assign('res',$this->result);


// 5. Wywołanie szablonu
getSmarty()->display('calc.tpl');
}

}