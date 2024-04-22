<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once 'init.php';

//1. pobierz nazwę akcji

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();		// utwórz obiekt i uzyj
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();		// utwórz obiekt i uzyj
		$ctrl->process ();
	break;
	case 'login':
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogin();
	break;
	case 'logout' :
		include 'check.php';
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogout();
	break;
}
