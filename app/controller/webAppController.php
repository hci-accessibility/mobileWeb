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
elseif($route == 'cookieprocess') {
  $ac->cookieProcess();
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
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function home2() {
    $pageTitle = 'Home';
    $styleSheet = 'styles.css';
    //include_once SYSTEM_PATH.'/view/header.php';
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
    ob_start();
    $pageTitle = 'About Us';
    $styleSheet = 'styles.css';
    //include_once SYSTEM_PATH.'/view/header.php';
    if (!isset($_COOKIE['user'])) {
      header('Location:'.BASE_URL.'/signup/');
    }
    include_once SYSTEM_PATH.'/view/browselocations.php';

    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function signup() {
    $pageTitle = 'Sign Up';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/signup.php';
    //include_once SYSTEM_PATH.'/view/footer.php';
    if (isset($_COOKIE['user'])) {
      $cookie_name = 'user';
      //echo '<script>console.log($_COOKIE[$cookie_name])</script>';

    }
  }

  public function signupProcess() {

    // if( isset($_POST['c']) && is_array($_POST['c']) ) {
    //   foreach($_POST['c'] as $disability) {
    //       $disabilityList[] = $disability;
    //       //echo "$disability";
    //   }
    // }

    //Get the POST data from the form, php variable will read the value of the field otherwise set to "off"
    $width = $_POST['width'];
    $length = $_POST['length'];
    $maxslope = $_POST['maxslope'];
    if (isset($_POST['stairs'])) {
      $stairs = "true";
    }
    else {
      $stairs = "false";
    }
    //echo $stairs;
    $narrowsteep = "false";
    if (isset($_POST['narrowsteep'])) {
      $narrowsteep = "true";
    }
    $pushdoors = "false";
    if (isset($_POST['pushdoors'])) {
      $pushdoors = "true";
    }
    $heavydoor = "false";
    if (isset($_POST['heavydoor'])) {
      $heavydoor = "true";
    }
    $loose = "false";
    if (isset($_POST['loose'])) {
      $loose = "true";
    }
    $uneven = "false";
    if (isset($_POST['uneven'])) {
      $uneven = "true";
    }
    //echo $handrails;
    $disabilityList = array (
      'width'=> $width,
      'length'=> $length,
      'maxslope'=> $maxslope,
      'stairs' => $stairs,
      'narrow steep stairs' => $narrowsteep,
      'push doors' => $pushdoors,
      'heavy doors' => $heavydoor,
      'loose terrain' => $loose,
      'uneven terrain' => $uneven
    );
    // $disabilityList[] = $width;
    // $disabilityList[] = $length;
    // $disabilityList[] = $maxslope;
    // $disabilityList[] = $stairs;
    // $disabilityList[] = $narrowsteep;
    // $disabilityList[] = $pushdoors;
    // $disabilityList[] = $heavydoor;
    // $disabilityList[] = $loose;
    // $disabilityList[] = $uneven;

    //Creates JSON object from the list
    header('Content-Type: application/json');
    echo $json = json_encode($disabilityList);

    //Hashes the entire JSON into one string
    $cookieString = md5(print_r($json, true));
    //echo $cookieString;

    //Hashed string becomes cookie value
    $cookie_value = $cookieString;
    //echo $cookie_value;

    //Setting cookie, returns 1 if set successfully
    $cookie = setcookie('user',$cookie_value, time() + 30*86400, '/');
    //echo $cookie;

    //Redirects user to the Browse page
    header('Location:'.BASE_URL.'/browse/');
  }

  //When "Import Cookie" is clicked
  public function cookieProcess() {
    //Get the pasted cookie in the field
    $importedCookie = $_POST['cookie'];
    //Redirects user to the Browse page
    header('Location:'.BASE_URL.'/browse/');
  }

  public function report() {
    $pageTitle = 'Report a Physical Barrier';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/reportbarrier.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function navigation() {
    $pageTitle = 'Navigation';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/navigation.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }

  public function submitBarrier() {
    $pageTitle = 'Barrier Submitted';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';

    echo "barrier successfully submitted!";
    //include_once SYSTEM_PATH.'/view/navigation.php';
    //include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }
}
