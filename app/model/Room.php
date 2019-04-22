<?php

class Room{
  public $roomId;
  public $mapId;
  public $nameNormal;
  public $x;
  public $y;

  function getBuildings(){
    $rooms = array();
    $result = pg_query($dbconn, "SELECT * FROM rooms");
    if(!$result){
      echo "An error occured.\n";
      exit;
    }
    while($row = pg_fetch_row($result)){
      $room = new Room();
      $room->roomId = $row['room_id'];
      $room->mapId = $row['map_id'];
      $room->nameNormal = $row['name_normal'];
      $room->x = $row['x'];
      $room->y = $row['y'];
      $rooms[$room->roomId] = $room;
    }
    return $rooms;
  }
  function selectRoomsFromBuilding(){
    
  }
}
?>
