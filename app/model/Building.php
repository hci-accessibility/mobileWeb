<?php

class Building{
  public $buildingId;
  public $name;
  public $rooms = array();

  function getBuildings(){
    $buildings = array();
    $result = pg_query($dbconn, "SELECT * FROM buildings");
    if(!$result){
      echo "An error occured.\n";
      exit;
    }
    while($row = pg_fetch_row($result)){
      $building = new Building();
      $building->buildingId = $row['building_id'];
      //$rooms = Room::selectRoomsFromBuilding($building->buildingId);
      $building->name = $row['name'];
      $buildings[$building->buildingId] = $building;
    }
    return $buildings;
  }
}
?>
