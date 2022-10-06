<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/popup_css.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../img/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>User</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="rooms.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Rooms</a>
    <a href="bookings.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Bookings</a>
    <a href="user.png" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Users</a>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Rooms</b></h5>
  </header>
  
  <div class="w3-container w3-teal">
  <h2>New Room</h2>
</div>

<form class="w3-container" action="php/newRoom.php" method="POST" enctype="multipart/form-data">
  <label class="w3-text-teal"><b>Type</b></label>
  <input class="w3-input w3-border w3-light-grey" name="type"type="text">

  <label class="w3-text-teal"><b>Price</b></label>
  <input class="w3-input w3-border w3-light-grey"name="price" type="text">

  <label class="w3-text-teal"><b>Description</b></label>
  <input class="w3-input w3-border w3-light-grey"name="description" type="text">

  <label class="w3-text-teal"><b>Available Rooms</b></label>
  <input class="w3-input w3-border w3-light-grey"name="availableRooms" type="text">

  <label class="w3-text-teal"><b>Specifications</b></label>
  <input class="w3-check" type="checkbox" value=1 name="smartTv"><label>Smart Tv</label>
  <input class="w3-check" type="checkbox"  name="wifi"><label>WIFI</label>
  <input class="w3-check" type="checkbox"  name="ac"><label>AC</label>
  <input class="w3-check" type="checkbox"  name="parking"><label>Parking</label>
  <input class="w3-check" type="checkbox" name="pool"><label>Pool</label>
  <label class="w3-text-teal"><b> Image</b></label>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <button class="w3-btn w3-blue-grey">Add</button>
</form>


  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
