<?php

include_once "config.php";
$sql = "SELECT * FROM `room` WHERE `availableRooms`>=1";
// echo $sql;
$styleStatus=0;
$x=1;
$style="room__text";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        $id= $row["id"];
        $type= $row["type"];
        $price= $row["price"];
        $description= $row["description"];
        $availableRooms= $row["availableRooms"];
        $image= $row["image"];

        $smartTv= $row["smartTv"];
        $wifi= $row["wifi"];
        $ac= $row["ac"];
        $parking= $row["parking"];
        $pool= $row["pool"];


        if($smartTv=='on') $smartTvStatus="AVAILABLE
                                          ";
                                          else $smartTvStatus="NOT AVAILABLE ";

        if($wifi=='on') $wifiStatus=" AVAILABLE
                                          ";
                                          else $wifiStatus="NOT AVAILABLE ";

        if($ac=='on') $acStatus="AVAILABLE
                                          ";
                                          else $acStatus="NOT AVAILABLE ";

        if($parking=='on') $parkingStatus="AVAILABLE
                                          ";
                                          else $parkingStatus="NOT AVAILABLE ";

        if($pool=='on') $poolStatus="
                                          AVAILABLE
                                          ";
        else $poolStatus="NOT AVAILABLE ";

        
        if($styleStatus==0) {$styleStatus=1;
            $y=$x+1;
                                $style="
                                <div class='col-lg-6 p-0 order-lg-$y order-md-$y col-md-6'>
                    <div class='room__pic__slider owl-carousel'>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                    </div>
                </div>
                <div class='col-lg-6 p-0 order-lg-$x order-md-$x col-md-6'>
                    <div class='room__text'>
                        <h3>$type </h3>
                        <h2><sup>LKR</sup>$price<span>/day</span></h2>
                        <ul>
                            <li><h4>$availableRooms Rooms Available:</h4></li>
                            <li><span><h5>Description:</h5></span> $description</li>
                            <li><span><h5>Smart TV:</h5></span> $smartTvStatus</li>
                            <li><span><h5>WIFI:</h5></span> $wifiStatus</li>
                            <li><span><h5>AC:</h5></span> $acStatus</li>
                            <li><span><h5>Parking:</h5></span> $parkingStatus</li>
                            <li><span><h5>Pool:</h5></span> $poolStatus</li>
                            
                            
                        </ul>
                        <a href='booking.php?id=$id'>Book--></a>
                    </div>
                </div>
                                          ";
                                        $x=$x+2;}
        else if($styleStatus==1) {$styleStatus=0;
            $y=$x+1;
            $style="
            <div class='col-lg-6 p-0 order-lg-$x order-md-$x col-md-6'>
                    <div class='room__pic__slider owl-carousel'>
                    <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                    <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                    <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                    <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                    </div>
                </div>
                <div class='col-lg-6 p-0 order-lg-$y order-md-$y col-md-6'>
                    <div class='room__text right__text'>
                    <h3>$type </h3>
                    <h2><sup>LKR</sup>$price<span>/day</span></h2>
                    <ul>
                        <li><h4>$availableRooms Rooms Available:</h4></li>
                        <li><span><h5>Description:</h5></span> $description</li>
                        <li><span><h5>Smart TV:</h5></span> $smartTvStatus</li>
                        <li><span><h5>WIFI:</h5></span> $wifiStatus</li>
                        <li><span><h5>AC:</h5></span> $acStatus</li>
                        <li><span><h5>Parking:</h5></span> $parkingStatus</li>
                        <li><span><h5>Pool:</h5></span> $poolStatus</li>
                        
                        
                    </ul>
                    <a href='booking.php?id=$id'>Book--></a>
                    </div>
                </div>
                      ";
                      $x=$x+2;}

       
        echo $style;
    }
} else {
   
}
$conn->close();




?>