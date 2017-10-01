<?php


define('ACTION', 0);
define('VALOR1', 1);
include_once 'config/ConfigApp.php';
include_once 'index.php';

function parseUrl($url){
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

$urlData = parseUrl('action');
$actionName = $urlData[ConfigApp::$ACTION];

if (array_key_exists($actionName,ConfigApp::$ACTIONS)){
    $params = $urlData[ConfigApp::$PARAMS];
    $methodName = ConfigApp::$ACTIONS[$actionName];

    if(isset($params) && $params != null){
      $methodName($params);
    } else {
      $methodName();
    }
} else {
    home();
}

?>
