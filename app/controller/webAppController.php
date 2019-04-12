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
elseif($route == 'signupprocess') {
  $ac->signupProcess();
}
elseif($route == '') {
  $ac->home2();
}
elseif($route == 'report') {
  $ac->report();
}
elseif($route == 'navigation') {
  $ac->navigation();
}
elseif($route == 'submitbarrier') {
  $ac->submitBarrier();
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
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function home2() {
    $pageTitle = 'Home';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/home2.php';
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }


  public function about() {
    $pageTitle = 'About Us';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/about.php';
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function browse() {
    ob_start();
    $pageTitle = 'About Us';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    if (!isset($_COOKIE['user'])) {
      header('Location:'.BASE_URL.'signup/');
    }
    include_once SYSTEM_PATH.'/view/browselocations.php';

    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function signup() {
    $pageTitle = 'Sign Up';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/signup.php';
    include_once SYSTEM_PATH.'/view/footer.php';
  }

  public function signupProcess() {
    $disabilityList = array ();
    if( isset($_POST['c']) && is_array($_POST['c']) ) {
      foreach($_POST['c'] as $disability) {
          $disabilityList[] = $disability;
          //echo "$disability";
      }
    }
    $width = $_POST['width'];
    $depth = $_POST['depth'];
    $noise = $_POST['noiseSensitivity'];
    if (isset($_POST['stairs'])) {
      $stairs = $_POST['stairs'];
    }
    else {
      $stairs = "off";
    }
    //echo $stairs;
    $handrails = "off";
    if (isset($_POST['handrails'])) {
      $handrails = $_POST['handrails'];
    }
    //echo $handrails;
    $disabilityList[] = $width;
    $disabilityList[] = $depth;
    $disabilityList[] = $noise;
    $disabilityList[] = $stairs;
    $disabilityList[] = $handrails;

    //Hashes the entire list into one string
    $cookieString = md5(print_r($disabilityList, true));
    //echo $cookieString;

    //Hashed string becomes cookie value
    $cookie_value = $cookieString;
    //echo $cookie_value;

    //Setting cookie, returns 1 if set successfully
    $cookie = setcookie('user',$cookie_value, time() + 30*24*3600, '/');
    //echo $cookie;
    header('Location:'.BASE_URL.'/browse/');
  }

  public function report() {
    $pageTitle = 'Report a Physical Barrier';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/reportbarrier.php';
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function navigation() {
    $pageTitle = 'Navigation';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/navigation.php';
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function submitBarrier() {
    $pageTitle = 'Barrier Submitted';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';

    echo "barrier successfully submitted!";
    include_once SYSTEM_PATH.'/view/navigation.php';
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }
}
