<?php

include_once "config.php";
$sql = "SELECT * FROM `booking` ";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $date= $row["date"];
        $room= $row["room"];
        $adult= $row["adult"];
        $child= $row["child"];
        $status= $row["status"];
        $roomNo= $row["roomNo"];

       
        echo "
      <tr>
        <td>$id</td>
      
        <td>$date</td>
        <td>$room</td>
        <td>$adult</td>
        <td>$child</td>
        <td>$status</td>
        <td>$roomNo</td>
      

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