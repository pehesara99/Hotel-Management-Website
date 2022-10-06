<?php

include_once "config.php";
$sql = "SELECT * FROM `room` ";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $type= $row["type"];
        $price= $row["price"];
        $availableRooms= $row["availableRooms"];
        $img= $row["image"];
       
        echo "
      <tr>
        <td>$id</td>
        <td><img class='w3-round' style='height:100px;' src='php/uploads/$img'></td>
        <td>$type</td>
        <td>$price</td>
        <td>$availableRooms</td>
       
        <td><a href='../view item/?id=$id'> View</a></td>
        
      </tr>
     
        ";
    }
} else {
    echo "
    <tr collspan=4><td> No Rooms Available Yet</td>
   
    </tr>
      ";
}
$conn->close();




?>