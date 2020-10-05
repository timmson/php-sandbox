<?php

require_once (__DIR__ ."/vendor/autoload.php");

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ ."/templates/");
$smarty->setCompileDir(__DIR__ ."/templates_c/");
$smarty->setConfigDir(__DIR__ ."/configs/");
$smarty->setCacheDir(__DIR__ ."/cache/");

$smarty->assign("message","Hello, World");

//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display("index.tpl");
