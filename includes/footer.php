<?php 

include 'includes/init.php';


// Query For Footer

$qry_footer = "SELECT * FROM footer where id>0";
$res_footer = mysqli_query($con,$qry_footer);
 

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Header</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
 
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