<?php
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytu hipotecznego');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');
$smarty->assign('page_footer','przykładowa tresć stopki wpisana do szablonu z kontrolera');
$smarty->assign('page_author','Marek Dziuba');
$smarty->assign('common_word_1','hipoteczny');
$smarty->assign('common_word_2','kredytu hipotecznego');


//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
/*
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);
*/

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/templates/temp_main.html');

?>			