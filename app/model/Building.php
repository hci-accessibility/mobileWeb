<?php


class Building{
  public $buildingId;
  public $name;

  function getBuildings(){
    $buildings = array();
    $dbconn = pg_connect("dbname=barrierdb host=localhost port=5432 user=barrierdb password='p1oTtgres b2aSrier b3aDkend'");
    $result = pg_query($dbconn, "SELECT * FROM buildings");
    if(!$result){
      echo "An error occured.\n";
      exit;
    }
    while($row = pg_fetch_row($result)){
      $building = new Building;
      $building->buildingId = $row[0];
      
      $building->name = $row[1];
      $buildings[$building->buildingId] = $building;
      #echo $building->name;
    }
    return $buildings;
  }
}
?>
