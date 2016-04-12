<!-- database connection is being established -->
<?php
include_once 'classes/dbconnect.php';
session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="icon" href="https://itp-module-x14346081.c9users.io/images/header/logo2.png" type="image/png" sizes="16x16 32x32">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-blue.min.css" />
  <link type="text/css" rel="stylesheet" href="../css/calendar.css" />
  <link type="text/css" rel="stylesheet" href="../css/style.css" />
  <link type="text/css" rel="stylesheet" href="../css/landingPage.css" />
  <!-- custom icons via FontAwesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <title>Dragon Room Bookings</title>
</head>

<body>

  <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <!-- Left aligned menu below button -->
<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  <li class="mdl-menu__item">Some Action</li>
  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
  <li disabled class="mdl-menu__item">Disabled Action</li>
  <li class="mdl-menu__item">Yet Another Action</li>
</ul>

    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="https://itp-module-x14346081.c9users.io/index.php">
        <span class="mdl-layout-title">
          <img src="https://itp-module-x14346081.c9users.io/images/header/logo2.png" alt="logo" style="width:15%;height:15%;"/>
          Dragon Room Booking
        </span>
      </a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <!--<a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/index.php">Available Rooms</a>-->
        <a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/map.php">Floor Plan</a>
        <a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/bookings/bookingmanager.php">My Bookings</a>
        <?php 
        if(isset($_SESSION['user'])!=""){
          ?>
         <a class="mdl-navigation__link" <p><strong><font color="white">Logged in as: <?php echo $_SESSION['user']; ?></font></strong></p></a>
         <a href="https://itp-module-x14346081.c9users.io/logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Logout</a>
      <?php } ?>
      <?php 
        if(isset($_SESSION['user'])==""){
          ?>
          <a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/login.php">Login</a>
      <?php } ?>  
      <!--<?php 
        if(isset($_SESSION['user'])!=""){
          ?>
        <a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/room.php">Book a Room*</a> This should be part of My Bookings
        <a class="mdl-navigation__link" href="https://itp-module-x14346081.c9users.io/booking.php">Add a Room*</a> to be removed once my bookings is complete
      <?php } ?>-->  
      
     </nav>
    </div>
  </header>
  <!-- content open -->
  <main class="mdl-layout__content">
    <div class="page-content">
      <!-- if logged in, username will appear -->
  <!--<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
      <h2 class="centered">
      <?php 
        if(isset($_SESSION['user'])!=""){
          ?>
          <p><strong>Logged in as: <?php echo $_SESSION['user']; ?></strong></p>
         <a href="logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Logout</a>
      <?php } ?>-->
      </h2></div>
  </div>