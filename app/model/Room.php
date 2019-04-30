<?php

class Room{
  public $roomId;
  public $mapId;
  public $nameNormal;
  public $x;
  public $y;

  function getRooms($bid){
    $rooms = array();
    // $result = pg_query($dbconn, "SELECT * FROM all_rooms WHERE building_id = $bid");
    // if(!$result){
    //   echo "An error occured.\n";
    //   exit;
    // }
    // $count = 0;
    // while($row = pg_fetch_row($result)){
    //   // $room = new Room();
    //   // $room->roomId = $row['room_id'];
    //   // // $room->mapId = $row['map_id'];
    //   // $room->nameNormal = $row['name_normal'];
    //   // // $room->x = $row['x'];
    //   // // $room->y = $row['y'];
    //   // $rooms[$room->roomId] = $room;
    //   $name = $row['name_normal'];
    //   $roomid =  $row['room_id'];
    //   $roomobj = array(
    //     'rid' => $roomid;
    //     'name' => $name
    //   );
      //}
      for ($x = 0; $x <= 10; $x++) {
        $name = $bid;
        $roomid = $x;
        $roomobj = array(
            'rid' => $roomid,
            'name' => $name
          );
          $rooms[] = $roomobj;
      }
    return json_encode($rooms);
  }
  function selectRoomsFromBuilding(){

  }
}
?>
