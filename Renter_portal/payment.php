<?php
	session_start();
	include('../config.php');
	$sql="select t_diff from trans_cycle order by id_trans desc limit 1;";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($result);
	$amount=$row['t_diff'];
  if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		header('location: welcome_renter.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="../css/reg.css"/>
	<link rel="icon" href="/DBMS/favicon.jpg">
	<style type="text/css"></style>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Dancing+Script" rel="stylesheet">
</head>
<body>
	<div id="container">
		<div id="nav">
			<div id="name_logo">
				<p>Cycle-Lister VIT&trade;</p>
			</div>
		</div>
		<div id="wrapper">
			<header>
				<h1>Pay the fee</h1>
			</header>
			<div>
				<p class="error">Amount: <?php echo $amount; ?></p>
			</div>
			<div class="form">
				<form id="form_id" method="POST">
            <br/><br/><br/><br/><br/><br/>
            <button id="REG_button">Pay</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
