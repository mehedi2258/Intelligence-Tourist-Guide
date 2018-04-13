

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Intelligence Tourist Guide</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Intelligence Tourst Guide</h1>
	</div>
</div>
<!--- /banner-1 ---->
<div class="rcm">
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >

	<label>Enter amount :</label>
	<select name="taka">
		<option selected>How much money do you have?</option>
		<option value="500">500</option>
		<option value="1000">1000</option>
		<option value="1500">1500</option>
		<option value="2000">2000</option>
		<option value="2000">3000</option>
		<option value="2000">4000</option>
		<option value="2000">5000</option>
	</select>
	<br><br>
	<label>Enter the Day :</label>
	<select name="day">
		<option selected>How much time do you have?</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br><br>
	<div class="rcm2">
		<input type="submit" name="search" id="search" value="search"/>
	</div>
	
	<!--<button type="submit"  value="save">search</button>-->
	</form>
	<br><br>
	<label>Recommanded Places</label>
	<div class="rcm3">
		
		<textarea rows="2" cols="167" disabled >
		<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	     // The request is using the POST method

		$taka = $_POST['taka'];
		$day = $_POST['day'];
			# code...
			if($taka == "500" && $day == "1"){
	   		 $msg = "You can visit Puran dhaka Within 500 tk & 1 day.";
	   		 echo $msg;
		}
		elseif ($taka == "1000" && $day == "1") {
			$msg = "You can visit Narayangong";
			echo $msg;
		}
		elseif ($taka == "2000" && $day == "2") {
			$msg = "You can visit sitakundu";
			echo $msg;
		}
		elseif ($taka == "3000" && $day == "3") {
			$msg = "Your can't visit Bandarban ";
			echo $msg;
		}
		else{
			echo "Tk is insufficient or Day is limited!";
		}

	}
	  
		?>
	</textarea>	
	</div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
