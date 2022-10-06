<?php
$id=$_REQUEST["id"];
include_once "config.php";
$sql = "SELECT * FROM `room` WHERE `id`=$id";
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
                                <div class='col-lg-6 p-0 order-lg-$y order-md-$y col-md-6 w3-light-blue'>
                    <div class='room__pic__slider owl-carousel'>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                        <div class='room__pic__item set-bg' data-setbg='admin/php/uploads/$image'></div>
                    </div>
                </div>
                <div class='col-lg-6 p-0 order-lg-$x order-md-$x col-md-6 w3-light-blue'>
                    <div class='room__text'>
                    <div class='w3-container w3-teal'>
                    <h2>Booking Form</h2>
                  </div>
                        <form action='admin/php/newBooking.php' class='w3-container w3-myfont' method='post'>
                                
                              
                                        <p class='w3-wide w3-xlarge'>Date</p>
                                        <input type='date'  name='date' class='w3-input w3-border w3-col m4 l8' >
                                        
                                    <input type='hidden'  name='room'  value='<?php echo $id;?>'class='datepicker-1' value='dd / mm / yyyy'>

                                    <br>
                                        <p class='w3-wide  w3-xlarge'><br>Adults</p>
                                        <div class='pro-qty'><input  class='w3-input w3-border w3-col m4 l8' name='adult' type='text' value='0'></div>
                                    
                                        <p class='w3-wide  w3-xlarge'><br><br>Children</p>
                                        <div class='pro-qty'><input class='w3-input w3-border w3-col m4 l8' name='child' type='text' value='0'></div>
                                    
                                
                                <br><br><br>
                                <button  class='w3-button w3-teal' type='button'>Book <i class='lnr lnr-arrow-right'></i></button>
                            </form>
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
                    <<form action='admin/php/newBooking.php' method='post'>
                    <div class='datepicker'>
                        <div class='date-select'>
                            <p>Date</p>
                            <input type='text'  name='date' class='datepicker-1' value='dd / mm / yyyy'>
                            <img src='img/calendar.png' alt=''>
                        </div>
                        <input type='hidden'  name='room'  value='<?php echo $id;?>'class='datepicker-1' value='dd / mm / yyyy'>

                    </div>
                    <div class='room-quantity'>
                        <div class='single-quantity'>
                            <p>Adults</p>
                            <div class='pro-qty'><input name='adult' type='text' value='0'></div>
                        </div>
                        <div class='single-quantity'>
                            <p>Children</p>
                            <div class='pro-qty'><input name='child' type='text' value='0'></div>
                        </div>
                        
                    </div>
                    
                    <button type='button'>Book <i class='lnr lnr-arrow-right'></i></button>
                </form>
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