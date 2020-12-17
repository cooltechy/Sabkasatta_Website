<?php 

include 'includes/init.php';

// Query For Navbar 

$qry = mysqli_query($con,"SELECT * FROM navbar where id>0;");
$row = mysqli_num_rows($qry);

// Query For Home

// Query For Footer

$qry_footer = "SELECT * FROM footer where id>0";
$res_footer = mysqli_query($con,$qry_footer);
 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Navbar</title>
	<link rel="icon" href="assets/img/icon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Navbar  -->

			<!-- Navbar  -->

		<nav class="navbar navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
			<?php  

			for ($i=1; $i<=$row; $i++) { 
				$nav = mysqli_fetch_array($qry);
				if($i==1){
			
			 ?>
  <a class="navbar-brand text-warning font-weight-bold" href="#"><?php echo $nav['cname']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto font-weight-bold ">
      <li class="nav-item active">
        <a class="nav-link text-uppercase" href="index.php"><?php echo $nav['page_name']; ?></a>
      </li>
  <?php } elseif($i==2){ ?>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="index.php?#about"><?php echo $nav['page_name']; ?></a>
      </li>
  <?php }elseif($i==3){ ?>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href=privacy.php"><?php echo $nav['page_name']; ?></a>
      </li>
  <?php }else{ ?>
      <li class="nav-item">
        <a class="nav-link text-white text-uppercase" href="disclaimer.php"><?php echo $nav['page_name']; ?></a>
      </li>
  <?php }} ?>
      <li class="nav-item">
        <a class="nav-link text-white" href="chart.php">CHART</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>