<?php 

session_start();
if($_SESSION['username'] == true){
}else{
  header('location:sidebar/login.php');
}
?>
<?php 

	include 'includes/init.php';
	
	$success = false;
	$dailog_type ="";
	$msg="";

	if(isset($_POST['btn_submit'])){

		$update = $_POST['insert'];
		$qry = "INSERT INTO value(name_id,value) VALUES(4,'$update')";
		$res = mysqli_query($con,$qry);

		if($res){
			$success=true;
			$msg = "Data Insert Succesfully";
			$dailog_type = "alert alert-success";
		}else{
			$succes=true;
			$msg= "Some Error Occured";
			$dailog_type = "alert alert-danger";
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gali</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 col-10 d-block m-auto">
			<br><br><br><br>
			<h2 class="text-primary text-center">Gali Update Window</h2>
			<br>
			<form class="form-group" action="gali.php" method="POST" autocomplete="off">				
				<label for="insert">Enter Your Shift Number:</label>
				<input type="number" name="insert" class="form-control" placeholder="Enter Number" required="">
				<br>
				<button class="btn btn-primary rounded-0" name="btn_submit">SUBMIT</button>
			</form>
			<a href="sidebar/sidebar.php"><button class="btn btn-success rounded-0 " name="btn_submit">HOME</button></a>
			<br>
			<br>
			<div class="aletr alert-success"><?php echo $msg; ?></div>
		</div>
		<div class="col-md-4"></div>
		
	</div>
</body>
</html>