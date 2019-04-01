<?php
include_once 'global.php';
//include_once SYSTEM_PATH.'/model/sitemodel.php';



$route = $_GET['route'];
if($route=='home'){
  home();
}
function home(){
  include_once 'home2.html';
}
