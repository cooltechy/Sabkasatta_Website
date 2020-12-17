<?php 
session_start(); 

        
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php 

        require_once'../includes/init.php';

        $success = false;
		$dailog_type ="";
		$msg="";
        if(isset($_REQUEST['btn_submit'])){

                $user = $_REQUEST['user'];
                $psw = $_REQUEST['psw'];

                $qry = mysqli_query($con,"SELECT * from admin where username='$user' AND psw='$psw'");
                $row_count = mysqli_num_rows($qry);
                if($row_count==true){
                    header('Location:http://sidebar.php/');
                     $_SESSION["username"]=$user;
					$success=true;
					$msg = "Login Succesfully";
					$dailog_type = "alert alert-success";
                }else{
                	$succes=true;
					$msg= "Your Username and Password Wrong! Please Try Again";
					$dailog_type = "alert alert-danger";

                }

        } ?>
       




 
        

</head>
<body>
    
    <br>
    <br>
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-10"></div>
			<div class="col-md-4 col-10 text-center">
				<h2>Create Account</h2>
			<p>Get Started with your free account</p>
			<button class="btn btn-danger btn-block"><i class="fa fa-google"></i> Login via Google</button>
			
			<button class="btn btn-info btn-block"><i class="fa fa-facebook"></i> Login via Facebook</button>
			<br>
			OR
			<br>
			<br>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off" class="form-group">
				<input type="text" name="user" placeholder="Enter your name" class="form-control mb-3" required/>
				<input type="password" name="psw" placeholder="Enter your password" class="form-control mb-3" required/>
				<button class="btn btn-primary btn-block mb-2" name="btn_submit">Login Now</button> 
				<div class="alert alert-success" text-center"><?php echo $msg; ?></div>
			</form>
			</div>
			<div class="col-md-4 col-10"></div>
		</div>
	</div>
		

</body>
</html>