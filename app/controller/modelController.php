
<?php
include_once '../global.php';
#include 'mobileWeb/app/model/Room.php'; //uncomment later if we use models

$route = $_GET['route'];
#echo $route;

if($route == 'getrooms') {
  #echo "success";
  $bid = $_GET['bid'];
  $dbconn = pg_connect("dbname=barrierdb host=localhost port=5432 user=barrierdb password='p1oTtgres b2aSrier b3aDkend'");
  $result = pg_query($dbconn, "SELECT * FROM rooms");

  $rooms = array();
  while($row = pg_fetch_row($result)){
      $name = $row[2];
      $roomid = $row[0];

     $roomobj = array(
            'rid' => $roomid,
            'name' => $name
          );
          $rooms[] = $roomobj;
      }
    echo json_encode($rooms);



}
else if($route == 'navigatexy'){
    $bid1 = $_POST['buildingFromForm'];
    $rid1 = $_POST['roomFromForm'];
    $bid2 = $_POST['buildingToForm'];
    $rid2 = $_POST['roomToForm'];

    echo $bid1;
    echo $rid1;
    echo $bid2;
    echo $rid2;
    #header('Location:'.BASE_URL.'/home');
    #$url ="http://localhost:18590/";
    #$ch = curl_init($url);
    #curl_setopt($ch, CURLOPT_POST, 0);
    #curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    #$result = curl_exec($ch);
    #curl_close($ch);
    #echo $result;
    #header('Location:'.BASE_URL.'/home');
    $dbconn = pg_connect("dbname=barrierdb host=localhost port=5432 user=barrierdb password='p1oTtgres b2aSrier b3aDkend'");
    $result = pg_query($dbconn, "SELECT * FROM rooms WHERE room_id = $rid1");
    $row = pg_fetch_row($result);
    $mapid1 = $row[1];
    $x1 = $row[4];
    $y1 = $row[5];
     $result = pg_query($dbconn, "SELECT * FROM rooms WHERE room_id = $rid2");
    $row = pg_fetch_row($result);
    $mapid2 = $row[1];
    $x2 = $row[4];
    $y2 = $row[5];

    $start = array('x'=>$x1, 'y'=>$y1, 'map_id'=>$mapid1);
    $goal = array('x'=>$x2, 'y'=>$y2, 'map_id'=>$mapid2);
    $data = array('start'=>$start, 'goal'=>$goal); 
    echo json_encode($data);
}


