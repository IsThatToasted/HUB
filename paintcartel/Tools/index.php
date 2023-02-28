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
    <link id="theme-style" rel="stylesheet" href="styles.css">
	
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
  <title>Custom Bootstrap 4 card</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<style>
  html {
    font-size: 14px;
  }
  
  .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }
</style>

<body>
  <div class="container">
    <div class="row pt-5 m-auto">
 
      <div class="col-md-6 col-lg-4 pb-3">
        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="imgs/paintcost.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Paint Cost Calculator</h4>
            <p class="card-text">
This is a paint coverage calculator that helps you estimate the amount of paint needed to cover a certain area with a specified number of coats. It is designed to be used on a website and consists of a form with several input fields.
</p>
<p class="card-text">
The first input field is for the area to be painted, which is measured in square feet. The second input field is for the number of coats you plan to apply. The third input field is for paint efficiency, which is also measured in square feet. The default value for paint efficiency is set to 400, but you can change it if you want.
</p>
<p class="card-text">
The last input field is for the allowance for waste, which is measured in gallons. You can select a value between 0 and 20 gallons from the drop-down menu.
</p>
<p class="card-text">
Once you have filled out all the input fields, you can click the "Calculate" button to get the results. The calculator will use the values you provided to estimate the total area to be painted and the amount of paint needed in gallons, including the allowance for waste. The results will be displayed on the webpage below the form.
</p>
<p class="card-text">
Please note that this calculator assumes a certain level of paint coverage efficiency and may not reflect the actual amount of paint needed for your specific project. It is always best to consult with a professional or refer to the manufacturer's recommendations for paint coverage.
   </p>
   </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="cost.php" class="btn btn-primary">Try It!</a>
            <a href="#" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
	  
	  
	        <div class="col-md-6 col-lg-4 pb-3">
        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="imgs/coveragecalc.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Paint Coverage Calculator</h4>
            <p class="card-text">
The calculator uses a form with several input fields to collect information about the area to be painted, the number of coats needed, the cost of paint per gallon, and the allowance for waste. Once the user enters this information and clicks on the "Calculate" button, the PHP script processes the input data and calculates the amount of paint needed and the total cost of the paint.
</p>
<p class="card-text">
Here is how the code works:
</p>
<p class="card-text">
The first part of the code creates an HTML form with several input fields for collecting data from the user. The form has four input fields: "Area to be painted," "Number of coats," "Paint Cost (in $ per gallon)," and "Allowance for waste (in gallons)." The form also has a "Calculate" button that the user clicks to submit the form.
</p>
<p class="card-text">
When the user submits the form, the PHP script checks if the request method is POST. If it is, the script retrieves the values entered by the user in the form fields and stores them in separate variables.
</p>
<p class="card-text">
Next, the script calculates the total area to be painted by multiplying the area and the number of coats. It then calculates the number of gallons of paint needed by adding the allowance for waste to the total area and dividing the result by the efficiency (cost of paint per gallon). It rounds up the result to the nearest whole number using the ceil() function.
</p>
<p class="card-text">
Finally, the script calculates the total cost of the paint by multiplying the number of gallons needed by the efficiency. It then displays the results to the user in a separate section of the page.
</p>
<p class="card-text">
Overall, this code provides a simple tool for calculating the cost of paint needed to cover a certain area. The user can adjust the input values to see how the total cost changes, making it easier to plan and budget for a painting project.</p>
</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="coverage.php" class="btn btn-primary">Try It!</a>
            <a href="#" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>

</body>
<footer id="footer" class="footer text-center" style="position:fixed;bottom:0;width:100%;background-color:#333333;">
        <div class="container">
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Brian Chambers for the PaintCartel</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
</html>
