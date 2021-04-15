<?php
require_once dirname(__FILE__) . '/../config.php';

require_once _ROOT_PATH.'/libs/smarty/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Projekt 04 - Smarty');
$smarty->assign('page_description','Przykład szablonowania oparty o bibliotekę Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->display(_ROOT_PATH.'/app/other.tpl');