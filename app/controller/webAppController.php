<?php
include_once '../global.php';
//include SYSTEM_PATH.'/model/model.php'; //uncomment later if we use models

$route = $_GET['route'];

$ac = new webAppController();
if($route == 'home') {
  $ac->home();
}
elseif($route == 'about') {
  $ac->about();
}
elseif($route == 'signup') {
  $ac->signup();
}

elseif($route == 'signin') {
  $ac->signin();
}

else {
  echo 'Page Not Found';
}

class webAppController {

  public function home() {
    $pageTitle = 'Home';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/home.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function about() {
    $pageTitle = 'About Us';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/about.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function signup() {
    $pageTitle = 'Sign Up';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/signup.php';
    //include_once SYSTEM_PATH.'/view/footer.php';
  }

  public function signin() {
    $pageTitle = 'Sign In';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/signin.php';
    //include_once SYSTEM_PATH.'/view/footer.php';
  }
}
