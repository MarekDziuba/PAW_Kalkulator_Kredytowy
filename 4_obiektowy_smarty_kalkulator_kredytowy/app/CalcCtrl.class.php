<?php
// KONTROLER strony kalkulatora
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/app/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';

class CalcCtrl {

	private $msgs;   
	private $form;   
	private $result;

	public function __construct(){
		
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcForm();
	}

public function getParams(){
	$this->form->kredyt = isset($_REQUEST['kredyt']) ? $_REQUEST['kredyt'] : null;
	$this->form->lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$this->form->oproc = isset($_REQUEST['oproc']) ? $_REQUEST['oproc'] : null;
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
		$this->msgs->addError('Nie podano liczby 1');
	}
	if ( $this->form->lat == "") {
		$this->msgs->addError('Nie podano liczby 2');
	}
	if ( $this->form->oproc == "") {
		$this->msgs->addError('Nie podano liczby 3');
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (! $this->msgs->isError()) {
	
	// sprawdzenie, czy $kredyt, $lat i $oproc są liczbami całkowitymi
	if (! is_numeric( $this->form->kredyt )) {
		$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}
	if (! is_numeric( $this->form->lat )) {
		$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
	}	
	if (! is_numeric( $this->form->oproc )) {
		$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
	}

	// sprawdza przedziały $kredyt, $lat i $oproc zależne od roli
	if ( $this->form->kredyt < 10000 || $this->form->kredyt > 300000) {
		$this->msgs->addError('Zły przedział dla kredytu');
	}
	if ( $this->form->lat < 5 || $this->form->lat > 20) {
		$this->msgs->addError('Zły przedział dla lat');
	}	
	if ( $this->form->oproc < 5 || $this->form->oproc > 20) {
		$this->msgs->addError('Zły przedział dla oprocentowania');
	}
}

return ! $this->msgs->isError();
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
global $conf;

$smarty = new Smarty();
$smarty->assign('conf',$conf);

$smarty->assign('page_title','Kalkulator kredytu hipotecznego');
$smarty->assign('page_footer','przykładowa tresć stopki wpisana do szablonu z kontrolera');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('page_footer','przykładowa tresć stopki wpisana do szablonu z kontrolera');
$smarty->assign('page_author','Marek Dziuba');
$smarty->assign('common_word_1','hipoteczny');
$smarty->assign('common_word_2','kredytu hipotecznego');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia

$smarty->assign('msgs',$this->msgs);
$smarty->assign('form',$this->form);
$smarty->assign('res',$this->result);


// 5. Wywołanie szablonu
$smarty->display($conf->root_path.'/app/calc.html');
}

}