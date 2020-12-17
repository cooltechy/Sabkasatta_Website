<?php 

session_start();
if($_SESSION['username'] == true){
}else{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Playing Game </div>
      <div class="list-group list-group-flush">
        <a href="sidebar.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="../desawar.php" class="list-group-item list-group-item-action bg-light">1. Desawar</a>
        <a href="../faridabad.php" class="list-group-item list-group-item-action bg-light">2. Faridabad</a>
        <a href="../ghaziabad.php" class="list-group-item list-group-item-action bg-light">3. Ghaziabad </a>
        <a href="../gali.php" class="list-group-item list-group-item-action bg-light">4. Gali</a>
        
        
        
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="navbar-nav">
              <a class="nav-link text-uppercase" href="logout.php"><?php echo "Welcome"." ".$_SESSION['username'];  ?></a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">About Sabkasatta <code>www.sabkasatta.com</code></h1>
        <p>Welcome to www.sabkasatta.com our website is one of the leading websites of sabkasatta market, our site is developed in 2020 for showing the result of all sabkasatta games and sabkasatta record chart we dont involve in any Satta playing activity. in our website our user can get Satta result super fast which help you to get fast Satta result in your mobile, you can find the Satta record of all best game of sabkasatta Bazar in our sabkasatta record chart page which is very user friendly and comfortable. in this page you can find the record chart of all best games of satta market like Desawar, Faridabad, Ghaziabad, Gali, Disawar,Taj satta and much more famous game of Satta bazar. we allow our user to update his own game result. If you want to add your own sabkasatta game in our site you have to contact the site admin. In our website you can also find the post regarding Satta leak number, these posts are posted by different Satta gusser having a wide experience in guessing and extracting upcoming jodies for old Satta record chart. these experts can help you to win any sabkasatta games. you can also win any game of sabkasatta by contacting them.</p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
