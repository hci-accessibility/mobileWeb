<?php
include_once '../model/Building.php';
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
else if($route == 'navigatexy'){
  $ac->navigatexy();
}
else if($route == 'navigate'){
  $ac->navigate();
}
elseif($route == 'navigation') {
  $ac->navigation();
}
elseif($route == 'getroute'){
  $ac->getRoute();
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
    $build = new Building;
    $buildings = $build->getBuildings();
    include_once SYSTEM_PATH.'/view/browselocations.php';
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
    //echo $_COOKIE['user'];
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
    //echo $disabilityList;
    $json = json_encode($disabilityList);
    //echo $json;
    //Hashes the entire JSON into one string
    //$cookieString = md5(print_r($json, true));
    //echo $cookieString;
    //Hashed string becomes cookie value
    //$cookie_value = $json;
    //echo $cookie_value;
    //Setting cookie, returns 1 if set successfully

    // empty value and expiration one hour before
    //$cookie = setcookie('user', '', time() - 3600);

    //$cookie = setcookie('user', $json, time() + 30*86400, '../');
    $cookie = setcookie('user', $json, time() + 60, '/');
    //echo $_COOKIE['user'];

    //Redirects user to the Browse page
    header('Location:'.BASE_URL.'/browse');
  }

  //When "Import Cookie" is clicked
  public function cookieProcess() {
    //Get the pasted cookie in the field
    $importedCookie = $_POST['cookie'];
    //Redirects user to the Browse page
    header('Location:'.BASE_URL.'/browse');
  }
  public function report() {
    $pageTitle = 'Report a Physical Barrier';
    $styleSheet = 'styles.css';
    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/reportbarrier.php';
    include_once SYSTEM_PATH.'/view/footer.php'; //uncomment when footer is created
  }
  public function navigatexy(){
      echo $_COOKIE['user'];
      $bid1 = $_POST['buildingFromForm'];
      $rid1 = $_POST['roomFromForm'];
      $bid2 = $_POST['buildingToForm'];
      $rid2 = $_POST['roomToForm'];

      $dbconn = pg_connect("dbname=barrierdb host=localhost port=5432 user=barrierdb password='p1oTtgres b2aSrier b3aDkend'");
      $result = pg_query($dbconn, "SELECT * FROM rooms WHERE room_id = $rid1");
      $row = pg_fetch_row($result);
      $mapid1 = $row[1];
      $x1 = (int)$row[4];
      $y1 = (int)$row[5];
       $result = pg_query($dbconn, "SELECT * FROM rooms WHERE room_id = $rid2");
      $row = pg_fetch_row($result);
      $mapid2 = $row[1];
      $x2 = (int)$row[4];
      $y2 = (int)$row[5];

      $cookey = $_COOKIE['user'];
      //echo $cookey;
      $userdata = json_decode($cookey, JSON_UNESCAPED_SLASHES);
      //$userdata = json_encode($userdata, JSON_UNESCAPED_SLASHES);
      $start = array('x'=>$x1, 'y'=>$y1, 'map_id'=>$mapid1);
      $goal = array('x'=>$x2, 'y'=>$y2, 'map_id'=>$mapid2);
      $data = array('profile'=>$userdata, 'start'=>$start, 'goal'=>$goal);
      $postData = json_encode($data);
      //echo $postData;
      $url ="http://localhost:18590/nav_xy_xy";
      $ch = curl_init($url);
      curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($data)
      ));

// Send the request
      $response = curl_exec($ch);
      curl_close($ch);
      $cookie = setcookie('route', $response, time() + 30*86400, '../');
      //echo $response;
      $pageTitle = 'Navigation';
      $styleSheet = 'styles.css';
      include_once SYSTEM_PATH.'/view/header.php';
      include_once SYSTEM_PATH.'/view/navigation.php';
      include_once SYSTEM_PATH.'/view/footer.php';
      echo '<script type="text/javascript">draw()</script>';
  }
  public function getRoute(){
    echo $_COOKIE['route'];
  }
  public function navigation() {

    // Response:
    // {
    // path:[
    // {x: ,
    //  y: ,
    // map_id: },
    // {x: ,
    //  y: ,
    // map_id: },
    // {x: ,
    //  y: ,
    // map_id: },
    // ...]
    // }

    //sample json result
    $arr = array(
        array(
            "x" => 10,
            "y" => 12,
            "map_id" => 1
        ),
        array(
          "x" => 10,
          "y" => 12,
          "map_id" =>1
        )
    );

    $result = json_encode($arr);

      var_dump(json_decode($result));
      // foreach ($arr->path as $mypath)
      // {
      //   echo $mypath->x . "\n";
      // }

      //json_decode($json);


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
