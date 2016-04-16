<?php
  include_once '../api/DbBookings.php';
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  $search_output = "";
  
  $db = new DbRegistered();
  
  $result = $db->viewRegistered();
  if($result != false){
    $result = json_encode($result);
  }else{
    echo "Server error, please contact server administrator";
  }
  
?>
<!--<h1> SELECT SOMETHING </h1>
<form action='<?php /*echo $_SERVER['PHP_SELF'];*/ ?>' method='post' name='form_filter' >

    <select name="value">
        <option value="all">All</option>
        <option value="Fitzgerald">Fitzgerald</option>
        <option value="Herring">Herring</option>
    </select>
	
    <br />
	
    <input type='submit' value = 'Filter'>

</form>-->






<!-- My Bookings -->
    <section class="login-register"> 
    <!-- Heading --> 
    <form name="search_form" method="POST" action="display_viewBookings.php">
  
        Search: <input type="text" name="search_box" value="" />
        <input type="submit" name="search" value="Search the table">
      
    </form>
    <h2>Registered Users</h2>
    <a href="bookings/bookingmanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> Book a Room</a></p>
<!-- End Heading --> 
   <table id="mytable" class="footable mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp full-width">
     <thead>
        <tr>
          <th data-sort-initial="descending" colspan='3' class='mdl-data-table__cell--non-numeric'>Firstname</th>
          <th data-sort-ignore="true" colspan='3' class='mdl-data-table__cell--non-numeric'>Lastname</th>
          <th  colspan='6' class='mdl-data-table__cell--non-numeric'>Username</th>
          <th data-sort-initial="ascending" data-type="numeric" colspan='6' class='mdl-data-table__cell--numeric'>Email</th>
        </tr> 
      </thead>
      <tbody>
      <?php
      
        $res = json_decode($result, true);
        foreach($res as $item) { //foreach element in $arr
            echo "
            <tr>
              <td colspan='3' class='mdl-data-table__cell--non-numeric'>".$item['firstname']."</td>
              <td colspan='3' class='mdl-data-table__cell--non-numeric'>".$item['lastname']."</td>
              <td colspan='6' class='mdl-data-table__cell--non-numeric'>".$item['username']."</td>
              <td colspan='6' class='mdl-data-table__cell--numeric'>".$item['email']."</td>
            </tr>
            ";//etc
        } ?>
        </tbody>
     </table>
     <!-- End Available Rooms Table -->
        </section>
        
<!-- End My Bookings -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/footable.js" type="text/javascript"></script>
<script src="../js/footable.sort.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function () {
		$('.footable').footable({
            breakpoints: {
            mamaBear: 1200,
            babyBear: 600
            }
        });
	});
</script>