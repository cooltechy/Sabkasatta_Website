<?php 

include 'includes/init.php';

// Query For Navbar 

$qry = mysqli_query($con,"SELECT * FROM navbar where id>0;");
$row = mysqli_num_rows($qry);

// Query For Home

$qry_home = mysqli_query($con,"SELECT * FROM home where id>0");
$row_home = mysqli_num_rows($qry_home);

// Query For Employee
$qry_emp = "SELECT * FROM employee where id>0";
$res_emp = mysqli_query($con,$qry_emp);

// Query For About

$qry_about = "SELECT * FROM about where id>0";
$res_about = mysqli_query($con,$qry_about);

// Query For Footer

$qry_footer = "SELECT * FROM footer where id>0";
$res_footer = mysqli_query($con,$qry_footer);
 
// Qry For Record Chart Gali, Desawar, Faridabad, Ghaziabad, Taj

$qry_desawar = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=1";
$res_desawar = mysqli_query($con,$qry_desawar);

$qry_date = "SELECT value.date,shifts.shift_name FROM value,shifts WHERE shift_id = name_id AND name_id=1";
$res_date = mysqli_query($con,$qry_date);

$qry_faridabad = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=2";
$res_faridabad = mysqli_query($con,$qry_faridabad);

$qry_ghaziabad = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=3";
$res_ghaziabad = mysqli_query($con,$qry_ghaziabad);

$qry_gali = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=4";
$res_gali = mysqli_query($con,$qry_gali);



// Qry For Display Results

$display_qry = "SELECT shifts.shift_name,value.value FROM shifts,value WHERE name_id=shift_id AND id=(SELECT max(id) FROM value)";
$display_result= mysqli_query($con,$display_qry);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172951843-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172951843-1');
</script>

    <!-- Google Adsense Script -->
    <script data-ad-client="ca-pub-4422332775707182" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<title> Sabkasatta | Satta King | Satta result | Satta chart | Satta matka | Satta-no-com</title>
	<link rel="icon" href="assets/img/icon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="tittle" content="Sabkasatta | Satta king | Satta Matka | Satta Result| Satta Chart | Gali | Desawar | Faridabad | Ghaziabad">
	<meta name="description" content="Sabkasatta is the best company for playing satta game and win more money.जो भाई लॉक डाउन की वजह से घर में खाली बैठे हैं और परेशान हैं उनको अब परेशान होने की कोई जरूरत नहीं है हमारे पास आपको मिलेगी गली एंड दिसावर की लीक गेम जो डायरेक्ट सट्टा कंपनी से फाइनल होती है सिंगल जोड़ी के अंदर आपका काम पक्का 101% गारंटी के साथ">
	<meta name="keyword" content="Sabkasatta | Satta king | Satta Matka | Satta Result| Satta Chart | Gali | Desawar | Faridabad | Ghaziabad | Gali Sabka-satta">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Css File Link -->
	<link rel="stylesheet" type="text/css" href="includes/css/stylish.css">

</head>
<body>
   
	<!-- Navbar -->
		<nav class="navbar navbar sticky-top navbar-expand-lg navbar-dark bg-dark">

		<?php  

			for ($i=1; $i<=$row; $i++) { 
				$nav = mysqli_fetch_array($qry);
				if($i==1){
			
			 ?>

  <a class="navbar-brand text-warning font-weight-bold" href="#"><?php echo $nav['cname']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto font-weight-bold text-uppercase">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php"><?php echo $nav['page_name']; ?></a>
      </li>
      <?php } elseif($i==2){ ?>
      <li class="nav-item">
        <a class="nav-link text-white" href="#about"><?php echo $nav['page_name']; ?></a>
      </li>      
  	  <?php } elseif($i==3){ ?>
      <li class="nav-item">
        <a class="nav-link text-white" href="privacy.php"><?php echo $nav['page_name']; ?></a>
      </li>
       <?php }else{ ?>
      <li class="nav-item">
        <a class="nav-link text-white" href="disclaimer.php"><?php echo $nav['page_name']; ?></a>
      </li>
       <?php } } ?>
       <li class="nav-item">
           <a class="nav-link text-white" href="chart.php">CHART</a>
       </li>
    </ul>
  </div>
</nav>

<!-- Tag Line Welcome To Our Comapany -->
<div class="container-fluid">
	<div class="row bg-warning" >

		<?php 

			for ($j=1; $j<=$row_home; $j++) { 
				$home = mysqli_fetch_array($qry_home);
				if($j==1){
		 ?>
		<div class="col-md-12 col-12 d-block m-auto">
			<marquee>
				<h1 class="text-dark font-weight-bold "> <?php echo $home['tittle']; ?></h1>
			</marquee>		
		</div>
	</div>
</div>
<!-- Sabkasatta is the best company for playing satta game and win more money. -->
<div class="bg-dark text-white">
	<center>
		<h4 class="text-center">
			<?php echo $home['text']; ?>
		</h4>
		<a href="index.php"><h3 class="text-primary"><?php echo $home['url']; ?></h3></a>
	</center>
</div>




    

		<!-- Satta Result  -->
<div class="result bg-dark">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 col-10 d-block m-auto text-center">
			<h5 class="font-weight-bold text-white mt-4">Sabkasatta Live Result Today!</h5>
			<br>
 			 <?php while ($display_res = mysqli_fetch_array($display_result)) { ?>		
 		<div class="result text-primary">
			<h1 style="color:cyan;"><?php echo $display_res['shift_name']?></h1>
			
		<center><h2 style="color:red; font-weight:bold;"><?php echo $display_res['value'];?></h2></center>	
		</div>
			<br>
			<?php } ?>

		</div>
	
		<div class="col-md-4"></div>
	</div>
</div>
<br>

<!-- Apne Phone Par Sabse Phle Result Paane Ke Liye Site Ko Bookmark Karein.  -->


<?php }elseif ($j==2) { ?>
<div class="text-center">
	<div class="bg-warning pt-3 pb-3 container-fluid">
		<h4><?php echo $home['text']; ?></h4>
	</div>
<?php }elseif($j==3){ ?>

<br><br>
	<!-- Important Information -->

	<div class="imp pt-3 pb-3">
		<h3><?php echo $home['tittle']; ?></h3>
		<h5><?php echo $home['text']; ?></h5>
	</div>
</div>
<br>
<h2 class="text-center text-primary">
		Shifts Timing
	</h2>
	<br>
<div class="row text-white text-uppercase">
	<div class="col-md-2"></div>
	<div class="col-md-2 col-12 bg-info text-center mr-3 mt-3">
		<h4>Desawar</h4>
		<h5>06:00 AM</h5>
	</div>
	<div class="col-md-2 col-12 bg-warning text-center mr-3 mt-3">
		<h4>Faridabad</h4>
		<h5>06:00 PM</h5>
	</div>
	<div class="col-md-2 col-12 bg-primary text-center mr-3 mt-3">
		<h4>Ghaziabad</h4>
		<h5>08:00 PM</h5>
	</div>
	<div class="col-md-2 col-12 bg-success text-center mr-3 mt-3">
		<h4>Gali</h4>
		<h5>11:00 PM</h5>
	</div>
	
	
	<div class="col-md-2"></div>
</div>

<br><br>

<!--Qry For Record Chart Gali, Desawar, Faridabad, Ghaziabad, Taj September-->
    <?php 

$qry_desawar = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=1";
$res_desawar = mysqli_query($con,$qry_desawar);

$qry_date = "SELECT value.date,shifts.shift_name FROM value,shifts WHERE shift_id = name_id AND name_id=1";
$res_date = mysqli_query($con,$qry_date);

$qry_faridabad = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=2";
$res_faridabad = mysqli_query($con,$qry_faridabad);

$qry_ghaziabad = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=3";
$res_ghaziabad = mysqli_query($con,$qry_ghaziabad);

$qry_gali = "SELECT shifts.shift_name,value.value FROM value,shifts WHERE shift_id = name_id AND name_id=4";
$res_gali = mysqli_query($con,$qry_gali);

 ?>
<div class="chart text-center text-primary">
	<h3>SATTA GAME KA RECORD CHART</h3>
</div>
<br>
<table class="table table-bordered table-striped table-hover">
	<thead>
		 <tr class="text-center text-white bg-dark" style="font-size:13px;">
		 	<th>Date</th>
		 	<th>DESAWAR</th>
		 	<th>FARIDABAD</th>
		 	<th>GHAZIABAD</th>
		 	<th>GALI</th>
		 	
		 </tr>
	 </thead>
	 
	 
	 <?php while ($desawar = mysqli_fetch_array($res_desawar)){ ?>
	 <?php $date = mysqli_fetch_array($res_date) ?>
	 <?php $faridabad = mysqli_fetch_array($res_faridabad) ?>
	 <?php $ghaziabad = mysqli_fetch_array($res_ghaziabad)?>
	 <?php $gali = mysqli_fetch_array($res_gali)?> 	
	 <tr class="text-center">
	 	<td><?php echo $date['date']; ?></td>
	 	<td><?php echo $desawar['value'];?></td>
	 	<td><?php echo $faridabad['value'];?></td>
	 	<td><?php echo $ghaziabad['value'];?></td>
	 	<td><?php echo $gali['value'];?></td>
	 	
	 </tr>

	<?php } ?>
</table>
<br>
<br>
<!-- Query for Record Chart Gali ,Desawar,Faridabad,Ghaziabad -->

    <?php 

$qry_desawar = "SELECT shifts.shift_name,september.value FROM september,shifts WHERE shift_id = name_id AND name_id=1";
$res_desawar = mysqli_query($con,$qry_desawar);

$qry_date = "SELECT september.date,shifts.shift_name FROM september,shifts WHERE shift_id = name_id AND name_id=1";
$res_date = mysqli_query($con,$qry_date);

$qry_faridabad = "SELECT shifts.shift_name,september.value FROM september,shifts WHERE shift_id = name_id AND name_id=2";
$res_faridabad = mysqli_query($con,$qry_faridabad);

$qry_ghaziabad = "SELECT shifts.shift_name,september.value FROM september,shifts WHERE shift_id = name_id AND name_id=3";
$res_ghaziabad = mysqli_query($con,$qry_ghaziabad);

$qry_gali = "SELECT shifts.shift_name,september.value FROM september,shifts WHERE shift_id = name_id AND name_id=4";
$res_gali = mysqli_query($con,$qry_gali);

 ?>
<div class="chart text-center text-primary">
	<h3> 2020 SEPTEMBER MONTH KA RECORD CHART</h3>
</div>
<br>
<table class="table table-bordered table-striped table-hover">
	<thead>
		 <tr class="text-center text-white bg-dark" style="font-size:13px;">
		 	<th>Date</th>
		 	<th>DESAWAR</th>
		 	<th>FARIDABAD</th>
		 	<th>GHAZIABAD</th>
		 	<th>GALI</th>
		 	
		 </tr>
	 </thead>
	 
	 
	 <?php while ($desawar = mysqli_fetch_array($res_desawar)){ ?>
	 <?php $date = mysqli_fetch_array($res_date) ?>
	 <?php $faridabad = mysqli_fetch_array($res_faridabad) ?>
	 <?php $ghaziabad = mysqli_fetch_array($res_ghaziabad)?>
	 <?php $gali = mysqli_fetch_array($res_gali)?> 	
	 <tr class="text-center">
	 	<td><?php echo $date['date']; ?></td>
	 	<td><?php echo $desawar['value'];?></td>
	 	<td><?php echo $faridabad['value'];?></td>
	 	<td><?php echo $ghaziabad['value'];?></td>
	 	<td><?php echo $gali['value'];?></td>
	 	
	 </tr>

	<?php } ?>
</table>


<!--Qry For Record Chart Gali, Desawar, Faridabad, Ghaziabad, Taj August-->
    <?php 

$qry_desawar = "SELECT shifts.shift_name,august.value FROM august,shifts WHERE shift_id = name_id AND name_id=1";
$res_desawar = mysqli_query($con,$qry_desawar);

$qry_date = "SELECT august.date,shifts.shift_name FROM august,shifts WHERE shift_id = name_id AND name_id=1";
$res_date = mysqli_query($con,$qry_date);

$qry_faridabad = "SELECT shifts.shift_name,august.value FROM august,shifts WHERE shift_id = name_id AND name_id=2";
$res_faridabad = mysqli_query($con,$qry_faridabad);

$qry_ghaziabad = "SELECT shifts.shift_name,august.value FROM august,shifts WHERE shift_id = name_id AND name_id=3";
$res_ghaziabad = mysqli_query($con,$qry_ghaziabad);

$qry_gali = "SELECT shifts.shift_name,august.value FROM august,shifts WHERE shift_id = name_id AND name_id=4";
$res_gali = mysqli_query($con,$qry_gali);

 ?>
<div class="chart text-center text-primary">
	<h3> 2020 AUGUST MONTH KA RECORD CHART</h3>
</div>
<br>
<table class="table table-bordered table-striped table-hover">
	<thead>
		 <tr class="text-center text-white bg-dark" style="font-size:13px;">
		 	<th>Date</th>
		 	<th>DESAWAR</th>
		 	<th>FARIDABAD</th>
		 	<th>GHAZIABAD</th>
		 	<th>GALI</th>
		 	
		 </tr>
	 </thead>
	 
	 
	 <?php while ($desawar = mysqli_fetch_array($res_desawar)){ ?>
	 <?php $date = mysqli_fetch_array($res_date) ?>
	 <?php $faridabad = mysqli_fetch_array($res_faridabad) ?>
	 <?php $ghaziabad = mysqli_fetch_array($res_ghaziabad)?>
	 <?php $gali = mysqli_fetch_array($res_gali)?> 	
	 <tr class="text-center">
	 	<td><?php echo $date['date']; ?></td>
	 	<td><?php echo $desawar['value'];?></td>
	 	<td><?php echo $faridabad['value'];?></td>
	 	<td><?php echo $ghaziabad['value'];?></td>
	 	<td><?php echo $gali['value'];?></td>
	 	
	 </tr>

	<?php } ?>
</table>
    
<?php 

// Qry For Record Chart Gali, Desawar, Faridabad, Ghaziabad, Taj July

$qry_desawar = "SELECT shifts.shift_name,july_2020.value FROM july_2020,shifts WHERE shift_id = name_id AND name_id=1";
$res_desawar = mysqli_query($con,$qry_desawar);

$qry_date = "SELECT july_2020.date,shifts.shift_name FROM july_2020,shifts WHERE shift_id = name_id AND name_id=1";
$res_date = mysqli_query($con,$qry_date);

$qry_faridabad = "SELECT shifts.shift_name,july_2020.value FROM july_2020,shifts WHERE shift_id = name_id AND name_id=2";
$res_faridabad = mysqli_query($con,$qry_faridabad);

$qry_ghaziabad = "SELECT shifts.shift_name,july_2020.value FROM july_2020,shifts WHERE shift_id = name_id AND name_id=3";
$res_ghaziabad = mysqli_query($con,$qry_ghaziabad);

$qry_gali = "SELECT shifts.shift_name,july_2020.value FROM july_2020,shifts WHERE shift_id = name_id AND name_id=4";
$res_gali = mysqli_query($con,$qry_gali);

 ?>
<div class="chart text-center text-primary">
	<h3> 2020 JULY MONTH KA RECORD CHART</h3>
</div>
<br>
<table class="table table-bordered table-striped table-hover">
	<thead>
		 <tr class="text-center text-white bg-dark" style="font-size:13px;">
		 	<th>Date</th>
		 	<th>DESAWAR</th>
		 	<th>FARIDABAD</th>
		 	<th>GHAZIABAD</th>
		 	<th>GALI</th>
		 	
		 </tr>
	 </thead>
	 
	 
	 <?php while ($desawar = mysqli_fetch_array($res_desawar)){ ?>
	 <?php $date = mysqli_fetch_array($res_date) ?>
	 <?php $faridabad = mysqli_fetch_array($res_faridabad) ?>
	 <?php $ghaziabad = mysqli_fetch_array($res_ghaziabad)?>
	 <?php $gali = mysqli_fetch_array($res_gali)?> 	
	 <tr class="text-center">
	 	<td><?php echo $date['date']; ?></td>
	 	<td><?php echo $desawar['value'];?></td>
	 	<td><?php echo $faridabad['value'];?></td>
	 	<td><?php echo $ghaziabad['value'];?></td>
	 	<td><?php echo $gali['value'];?></td>
	 	
	 </tr>

	<?php } ?>
</table>
	




<!-- Important Information -->

<div class="imp pt-3 pb-3 text-center">
		<h3><?php echo $home['tittle']; ?></h3>
		<h5><?php echo $home['text']; ?></h5>
</div>
<br>
<?php }elseif($j==4){ ?>
<div class="warn">
<div class="chetawani text-center">
	<br>
	<h3 class="text-danger"><?php echo $home['tittle']; ?></h3>
	<h3>----------------------------</h3>
	<br>
	<p class="container"><?php echo $home['text']; ?></p>
	<br>
	<a href=""><p><?php echo $home['url']; ?></p></a>
</div>
<?php }else{ ?>

	<hr class="container" style="width: 50%;">
	<br>
<div class="notice text-center">
	<h3><?php echo $home['tittle']; ?></h3>
	<h3>----------------------------</h3>
	<p><?php echo $home['text']; ?></p>
<?php } } ?>
	


<?php 
while ($emp = mysqli_fetch_array($res_emp)) {

?>

	<div class="employee">
		<p><?php echo $emp['post'];?></p>
		<h5><?php echo $emp['emp_name'];?></h5>
		<h5><?php echo $emp['phone'];?></h5>
	</div>
<?php } ?>
</div>
</div>
<br>


 

<!-- About -->
<?php 

while ($about = mysqli_fetch_array($res_about)) {


 ?>

<div class="container-fluid">
	<div id="about">
		<h3 class="text-center"><?php echo $about['tittle']; ?> <a href="" class="text-primary"><?php echo $about['url']; ?></a></h3>
		<br>
		<p class="text-justify"><?php echo $about['e_text']; ?></p>
		<hr class="bg-danger">
		<br>
	</div>
<?php } ?>
</div>	


  <!-- Footer -->

<?php 

  while ($footer = mysqli_fetch_array($res_footer)) {

 ?>

<footer class="footer py-5 bg-primary mt-auto">
  <div class="policy text-center">
    <a href="privacy.php"><button class="btn btn-success rounded-0"><?php echo $footer['btn_1']; ?></button></a>
    <a href="disclaimer.php"><button class="btn btn-success rounded-0"><?php echo $footer['btn_2']; ?></button></a>
  </div>
</footer>
<?php } ?>


</body>
</html>