<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.topnav {
  overflow: hidden;
  color: black;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div class="topnav" id="myTopnav">
  <a href="create-package.php">Create Package</a>
  <a href="manage-packages.php">Manage Package</a>
  <a href="manage-bookings.php">Manage Booking</a>
  <a href="manage-enquires.php">Manage Enquires</a>
  <a href="manageissues.php">Manage Issues</a>
  <a href="logout.php">Logout</a>
</div>
		</div>
	</div>
</div>



					
				


</body>
</html>



