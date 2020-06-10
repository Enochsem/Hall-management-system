<?php 
include('check.php');
include 'include/header.php';

include 'include/navbar.php';
 ?>


<link rel="stylesheet" type="text/css" href="css/dycalendar.min.css">



<div class="col-lg-8 col-md-6 col-sm-12 offset-lg-2">
	
		<br>
		<div class="some-class">
			<div id="calendar" class="dycalendar-container round-edge shadow-red skin-blue">			
			</div>
		</div>
		<br>

</div>

<script src="js/dycalendar.min.js"></script>
<script>
	dycalendar.draw({
		target : "#calendar",
		type: "month",
		highlighttoday: true 

	});
</script>
<br>

<?php
include 'include/script.php';
include 'include/footer.php';
?>

