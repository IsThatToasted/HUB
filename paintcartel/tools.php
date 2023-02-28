<?php 
	require "../functions.php";
	require "../header.php";
	
	if(!isset($_SESSION['user'])){
		header("location: ../login.php");
		exit();
	}

	if(isset($_GET['logout'])){
		logoutUser();
	}
	
	if(isset($_GET['confirm-account-deletion'])){
		deleteAccount();
	}


?>
<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete"><head>
    <title>PaintCartel - Tools</title>


<body class="body-blue">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.php">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Paint</span><span class="text-bold">Cartel</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Tools</li>
                </ol>
                <div class="top-search-box">
	                 <form class="form-inline search-form justify-content-center" action="" method="get">
	            
			            <input type="text" placeholder="Search..." name="search" class="form-control search-input">
			            
			            <button type="submit" class="btn search-btn" value="Search"><svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <i class="fas fa-search"></i> Font Awesome fontawesome.com --></button>
			            
			        </form>
                </div>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_lifesaver"></span> Tools</h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: Feb 14, 2023</div>
                </div><!--//doc-header-->
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
						
						
						
		<b id="jobCalc"><p style= 'text-align: Left; font-size: 30px;', >Job Completion Calculator</p></b>
<p style= 'text-align: Left; font-size: 15px;'>This is a simple calculator to help you represent the completion of your job based on the given inputs. Simply input the hours that your scope lists in the Bid Hours, then Hours Left in the second field, and the number of hours in tickets you have in the final field. Then calculate.</p>
<br>				
						
 
<div class="table-responsive" id="general">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Bid Hours</th>
        <th>Worked Hours</th>
        <th>Ticket Hours</th>
        <th>Total Hours Billable</th>
        <th>Percentage Complete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="bid-hours">0</td>
        <td id="worked-hours">0</td>
        <td id="ticket-hours">0</td>
        <td id="total-hours-billable">0</td>
        <td id="percentage">0%</td>
      </tr>
    </tbody>
  </table>
  <div style="display: flex; justify-content: center;">
    <div style="margin-right: 10px;">
      <label>Bid Hours:</label>
      <input type="number" id="bid-hours-input" value="100" min="0">
    </div>
    <div style="margin-right: 10px;">
      <label>Hours Left:</label>
      <input type="number" id="hours-left" value="30" min="0">
    </div>
    <div style="margin-right: 10px;">
      <label>Ticket Hours:</label>
      <input type="number" id="ticket-hours-input" value="0" min="0">
    </div>
    <div>
      <button id="calculate-button">Calculate</button>
    </div>
  </div>
</div>

<hr>

<b id="paintCalc"><p style= 'text-align: Left; font-size: 30px;', >Paint Coverage Calculator</p></b>
<p style= 'text-align: Left; font-size: 15px;'>This is a simple calculator to help you represent the amount of paint needed to cover a given area. Simply input the square footage of the area to be painted and the coverage of the paint in the first two fields. Then calculate.</p>



<div class="table-responsive" id="general">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Square Ft</th>
        <th>Coverage (Sq Ft)</th>
        <th>Gallons Needed</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="square-ft">0</td>
        <td id="coverage">0</td>
        <td id="gallons-needed">0</td>
      </tr>
    </tbody>
  </table>
  <div style="display: flex; justify-content: center;">
    <div style="margin-right: 10px;">
      <label>Square Ft:</label>
      <input type="number" id="square-ft-input" value="100" min="0">
    </div>
    <div style="margin-right: 10px;">
      <label>Coverage:</label>
      <input type="number" id="coverage-input" value="30" min="0">
    </div>
    <div>
      <button id="calculate-button2">Calculate</button>
    </div>
  </div>
</div>

<hr>



<b id="ladderCalc"><p style= 'text-align: Left; font-size: 30px;', >Ladder Distance Calculator</p></b>
<p style= 'text-align: Left; font-size: 15px;'>This is a simple calculator to help you determine the required ladder distance for a given height. Simply input the height required to reach what is needed to be painted in ft, as well as a checkbox or input for if an overhang is needed, add 3 ft for an overhang if the input for overhang is true. Then calculate.</p>
<br>


<div class="table-responsive" id="general">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Height Required (ft)</th>
        <th>Distance from Wall (ft)</th>
        <th>Overhang?</th>
        <th>Required Ladder</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="height-required">0</td>
        <td id="distance-from-wall">0</td>
        <td id="overhang">No</td>
        <td id="required-ladder">0</td>
      </tr>
    </tbody>
  </table>
  <div style="display: flex; justify-content: center;">
    <div style="margin-right: 10px;">
      <label>Height Required (ft):</label>
      <input type="number" id="height-required-input" value="0" min="0">
    </div>
    <div style="margin-right: 10px;">
      <label>Overhang?</label>
      <input type="checkbox" id="overhang-input" value="true">
    </div>
    <div>
      <button id="calculate-button-ladder">Calculate</button>
    </div>
  </div>
</div>


<style>
  label {
    display: inline-block;
    width: 100px;
    text-align: right;
    margin-right: 10px;
  }
  div input {
    width: 80px;
  }
</style>

<script>
  const calculateButtonLadder = document.getElementById('calculate-button-ladder');
  calculateButtonLadder.addEventListener('click', () => {
    let heightRequired = document.getElementById('height-required-input').value;
    let requiredLadder;
    let overhang = document.getElementById('overhang-input').checked;
    if (overhang) {
      requiredLadder = parseInt(heightRequired) + 3;
    } else {
      requiredLadder = heightRequired;
    }
    let distanceFromWall = parseInt(requiredLadder) / 4;
    document.getElementById('height-required').innerHTML = heightRequired;
    document.getElementById('distance-from-wall').innerHTML = distanceFromWall;

    // Round up to nearest available ladder size
    let availableLadderSizes = [16, 20, 24, 28, 32, 36, 40, 60];
    let roundRequiredLadder = 0;
    for (let i = 0; i < availableLadderSizes.length; i++) {
      if (requiredLadder > availableLadderSizes[i]) {
        roundRequiredLadder = availableLadderSizes[i];
      } else {
        roundRequiredLadder = availableLadderSizes[i];
        break;
      }
    }
    document.getElementById('required-ladder').innerHTML = roundRequiredLadder;
  });
</script>

<script>
function calculateGallonsNeeded() {
  // Get input values
  const squareFt = document.getElementById("square-ft-input").value;
  const coverage = document.getElementById("coverage-input").value;

  // Calculate gallons needed
  const gallonsNeeded = Math.ceil(squareFt / coverage);

  // Update table
  document.getElementById("square-ft").textContent = squareFt;
  document.getElementById("coverage").textContent = coverage;
  document.getElementById("gallons-needed").textContent = gallonsNeeded;
}

// Add click event listener to calculate button
document.getElementById("calculate-button2").addEventListener("click", calculateGallonsNeeded);

</script>




<script>
  const bidHoursCell = document.getElementById("bid-hours");
  const ticketHoursCell = document.getElementById("ticket-hours");
  const workedHoursCell = document.getElementById("worked-hours");
  const totalHoursBillableCell = document.getElementById("total-hours-billable");
  const percentageCell = document.getElementById("percentage");

  const calculateButton = document.getElementById("calculate-button");
  calculateButton.addEventListener("click", function() {
    const bidHours = Number(document.getElementById("bid-hours-input").value);
    const hoursLeft = Number(document.getElementById("hours-left").value);
    const ticketHours = Number(document.getElementById("ticket-hours-input").value);

    const workedHours = bidHours - hoursLeft;
    workedHoursCell.innerHTML = workedHours;

    const totalHoursBillable = workedHours + ticketHours;
    totalHoursBillableCell.innerHTML = totalHoursBillable;

    const percentage = (totalHoursBillable / bidHours) * 100;
    percentageCell.innerHTML = percentage.toFixed(2) + "%";

    bidHoursCell.innerHTML = bidHours;
    ticketHoursCell.innerHTML = ticketHours;
  });
</script>


<style>
  calculate-button {
    display: inline-block;
    width: 100px;
    text-align: right;
    margin-right: 10px;
  }
  label {
    display: inline-block;
    width: 100px;
    text-align: right;
    margin-right: 10px;
  }
  div input {
    width: 80px;
  }
</style>




                          
                          


                            
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                        <div id="doc-nav" class="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu flex-column sticky">
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#jobCalc">Completion Calculator</a>
	                            </li>
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#coverageCalc">Coverage Calculator</a>
	                            </li>
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#ticketCalc">Ticket Calculator</a>
	                            </li>
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#hoursToShift">Shift Calculator</a>
	                            </li>
                            </ul><!--//doc-menu-->
							
                        </div>
                    </div><!--//doc-sidebar-->
					
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
		

        
    </div><!--//page-wrapper-->
    
    <footer id="footer" class="footer text-center">
        <div class="container">
		<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Brian Chambers for the PaintCartel</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>      
    <script type="text/javascript" src="assets/plugins/stickyfill/dist/stickyfill.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>                                                          
    <script type="text/javascript" src="assets/js/main.js"></script>
    

 

</body></html>