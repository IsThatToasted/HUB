<?php 
	require "../../functions.php";
	
	if(!isset($_SESSION['user'])){
		header("location: ../../login.php");
		exit();
	}

	if(isset($_GET['logout'])){
		logoutUser();
	}
	
	if(isset($_GET['confirm-account-deletion'])){
		deleteAccount();
	}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
 
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link active" aria-current="page" href="../index.php">
            <div>
              <i class="fas fa-home fa-lg mb-1"></i>
            </div>
            Home
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="../tools.php">
            <div>
              <i class="fas fa-screwdriver-wrench fa-lg mb-1"></i>
           
            </div>
            Tools
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="fas fa-bell fa-lg mb-1"></i>
              <span class="badge rounded-pill badge-notification bg-info">0</span>
            </div>
            Notifications
          </a>
        </li>
        </li>
      </ul>
      <!-- Left links -->

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="../settings.php">
            <div>
              <i class="fas fa-gear fa-lg mb-1"></i>
            </div>
            Settings
          </a>
        </li>
		        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="../about.php">
            <div>
              <i class="fas fa-circle-info fa-lg mb-1"></i>
            </div>
            About
          </a>
        </li>
		        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link active" href="?logout">
            <div>
              <i class="fas fa-right-from-bracket fa-lg mb-1"></i>
            </div>
            Logout
          </a>
        </li>
  
      </ul>
      <!-- Right links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="../assets/fontawesome/js/all.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="../assets/plugins/elegant_font/css/style.css">
    <link rel="stylesheet" href="../assets/plugins/simplelightbox/simple-lightbox.min.css">
    <link rel="stylesheet" href="../assets/css/mystyles.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/styles.css">
	
</head> 

<body>
<br>
	<div class="container">
		<h1>Paint Coverage Calculator</h1>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="area">Area to be painted (in square feet)</label>
				<input type="number" class="form-control" id="area" name="area" required>
			</div>
			<div class="form-group">
				<label for="coats">Number of coats</label>
				<input type="number" class="form-control" id="coats" name="coats" required>
			</div>
			<div class="form-group">
				<label for="efficiency">Paint Efficiency (in square feet)</label>
				<input type="number" class="form-control" id="efficiency" name="efficiency" value="400" required>
			</div>
			<div class="form-group">
				<label for="waste">Allowance for waste (in gallons)</label>
				<select class="form-control" id="waste" name="waste">
					<?php for ($i=0; $i<=20; $i++) { ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Calculate</button>
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$area = $_POST['area'];
			$coats = $_POST['coats'];
			$efficiency = $_POST['efficiency'];
			$waste = $_POST['waste'];

			$total_area = $area * $coats;
			$gallons_needed = ceil(($total_area + $waste) / $efficiency);

			echo "<hr>";
			echo "<h2>Results</h2>";
			echo "<p>Total Area: " . $total_area . " square feet</p>";
			echo "<p>Gallons Needed: " . $gallons_needed . " gallons</p>";
		}
		?>

	</div>

	<!-- Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
	<br><br><br><br><br><br><br><br><br><br><br>
	
	
	
	<br><br><br><br><br><br><br>
<footer id="footer" class="footer text-center">
        <div class="container">
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Brian Chambers for the PaintCartel</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
</html>
