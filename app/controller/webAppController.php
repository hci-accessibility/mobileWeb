<?php
include_once '../global.php';
//include SYSTEM_PATH.'/model/model.php'; //uncomment later if we use models

$route = $_GET['route'];

$ac = new webAppController();
if($route == 'home') {
  $ac->home();
}
elseif($route == 'home2') {
  $ac->home2();
}
elseif($route == 'about') {
  $ac->about();
}
elseif($route == 'browse') {
  $ac->browse();
}
elseif($route == 'signup') {
  $ac->signup();
}
elseif($route == '') {
  $ac->home2();
}
elseif($route == 'report') {
  $ac->report();
}
else {
  echo 'Page Not Found';
}

class webAppController {

  public function home() {
    $pageTitle = 'Home';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/home2.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function home2() {
    $pageTitle = 'Home';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/home2.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }


  public function about() {
    $pageTitle = 'About Us';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/about.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function browse() {
    $pageTitle = 'About Us';
    $styleSheet = 'styles.css';
    //include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/browselocations.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function signup() {
    $pageTitle = 'Sign Up';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/signup.php';
    //include_once SYSTEM_PATH.'/view/footer.php';
  }

  public function report() {
    $pageTitle = 'Report a Physical Barrier';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/reportbarrier.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }
}
