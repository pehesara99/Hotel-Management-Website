<?php

include_once "config.php";
$sql = "SELECT * FROM `room` WHERE `availableRooms`>=1";
// echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $type= $row["type"];
        $price= $row["price"];
        $availableRooms= $row["availableRooms"];

       
        echo "
      <tr>
      <option value=\"$id\">$type(LKR $price) $availableRooms Room/s Available </option>
        
      </tr>
     
        ";
    }
} else {
   
}
$conn->close();




?>