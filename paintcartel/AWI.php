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

	if(isset($_POST['name']) && isset($_POST['suggestion'])) {
		$name = $_POST['name'];
		$suggestion = $_POST['suggestion'];

		$file = 'Notes/AWI/notes.json';
		if(file_exists($file)) {
			$data = json_decode(file_get_contents($file), true);
		} else {
			$data = array();
		}
		$data[] = array(
			'name' => $name,
			'title' => date('m-d-Y'),
			'suggestion' => $suggestion
		);
		file_put_contents($file, json_encode($data));
	}
?>

<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete"><head>
    <title>425652-20 - AWI Lower</title>
    

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
                    <li class="breadcrumb-item active">Project Overview - AWI Lower</li>
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
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_lifesaver"></span> Project Overview - AWI Lower</h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: Feb 14, 2023</div>
                </div><!--//doc-header-->
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
 


<div class="table-responsive" id="general">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Bid Hours</th>
        <th>Worked Hours</th>
        <th>Ticket Hours</th>
        <th>Total Hours Billable</th>
        <th>Percentage Complete</th>
		<th>Estimated Completion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td id="bid-hours" contenteditable="true">1347</td>
        <td id="worked-hours" contenteditable="true">1458</td>
        <td id="ticket-hours" contenteditable="true">320</td>
        <td id="total-hours-billable"></td>
        <td id="percentage"></td>
		<td id="estimatedCompletion"></td>
      </tr>
    </tbody>
  </table>
  
  <div id="hours-left" style="display: none;">332.47</div>
<p style="text-align: center;">
  <button type="submit" class="btn btn-primary" id="save-btn">Update Hours</button>
</p>
</div>


<script>
// Get the cell elements
const bidHoursCell = document.getElementById("bid-hours");
const workedHoursCell = document.getElementById("worked-hours");
const ticketHoursCell = document.getElementById("ticket-hours");
const totalHoursBillableCell = document.getElementById("total-hours-billable");
const percentageCell = document.getElementById("percentage");

// Get the values of the cells and convert them to numbers
let bidHours = Number(localStorage.getItem("AWILower_bidHours")) || Number(bidHoursCell.innerHTML);
let workedHours = Number(localStorage.getItem("AWILower_workedHours")) || Number(workedHoursCell.innerHTML);
let ticketHours = Number(localStorage.getItem("AWILower_ticketHours")) || Number(ticketHoursCell.innerHTML);
let hoursLeft = Number(localStorage.getItem("AWILower_hoursLeft")) || Number(document.getElementById("hours-left").innerHTML);

// Set the cell values to the stored values or the default values
bidHoursCell.innerHTML = bidHours;
workedHoursCell.innerHTML = workedHours;
ticketHoursCell.innerHTML = ticketHours;
totalHoursBillableCell.innerHTML = workedHours + ticketHours;
percentageCell.innerHTML = ((workedHours + ticketHours) / bidHours * 100).toFixed(2) + "%";

// Calculate the hours left and update the hours-left div
hoursLeft = bidHours - workedHours;
document.getElementById("hours-left").innerHTML = hoursLeft;

// Save the initial values to local storage
localStorage.setItem("AWILower_bidHours", bidHours);
localStorage.setItem("AWILower_workedHours", workedHours);
localStorage.setItem("AWILower_ticketHours", ticketHours);
localStorage.setItem("AWILower_hoursLeft", hoursLeft);

// Get the save button element
const saveBtn = document.getElementById("save-btn");

// Add a click event listener to the save button
saveBtn.addEventListener("click", function() {
  // Get the edited values of the cells and convert them to numbers
  bidHours = Number(bidHoursCell.innerHTML);
  workedHours = Number(workedHoursCell.innerHTML);
  ticketHours = Number(ticketHoursCell.innerHTML);

  // Calculate the total hours billable and update the cell
  const totalHoursBillable = workedHours + ticketHours;
  totalHoursBillableCell.innerHTML = totalHoursBillable;

  // Calculate the percentage and update the cell
  const percentage = (totalHoursBillable / bidHours) * 100;
  percentageCell.innerHTML = percentage.toFixed(2) + "%";

  // Calculate the hours left and update the hours-left div
  hoursLeft = bidHours - workedHours;
  document.getElementById("hours-left").innerHTML = hoursLeft;

  // Save the new values to local storage
  localStorage.setItem("AWILower_bidHours", bidHours);
  localStorage.setItem("AWILower_workedHours", workedHours);
  localStorage.setItem("AWILower_ticketHours", ticketHours);
  localStorage.setItem("AWILower_hoursLeft", hoursLeft);
});
</script>


<script>
  // Get the cell elements
  const bidHoursCell = document.getElementById("bid-hours");
  const workedHoursCell = document.getElementById("worked-hours");
  const ticketHoursCell = document.getElementById("ticket-hours");
  const totalHoursBillableCell = document.getElementById("total-hours-billable");
  const percentageCell = document.getElementById("percentage");

  // Get the values of the cells and convert them to numbers
  const bidHours = Number(bidHoursCell.innerHTML);
  const ticketHours = Number(ticketHoursCell.innerHTML);

  // Get the value of the hours left and convert it to a number
  const hoursLeft = Number(document.getElementById("hours-left").innerHTML);

  // Calculate the worked hours by subtracting the hours left from the bid hours
  const workedHours = bidHours - hoursLeft;
  workedHoursCell.innerHTML = workedHours;

  // Calculate the total hours billable and update the cell
  const totalHoursBillable = workedHours + ticketHours;
  totalHoursBillableCell.innerHTML = totalHoursBillable;

  // Calculate the percentage and update the cell
  const percentage = (totalHoursBillable / bidHours) * 100;
  percentageCell.innerHTML = percentage.toFixed(2) + "%";
</script>

<div>
	<canvas id="myChart"></canvas>
</div>
<style>
  #myChart {
    height: 400px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart');
let percent1 = 80;
let percent2 = 90;
let percent3 = 100;
let percent4 = 100;
let percent5 = 85;
let percent6 = 75;

let total = percent1 + percent2 + percent3 + percent4 + percent5 + percent6;

let average = total / 6;

document.getElementById("estimatedCompletion").innerHTML = average + "%";
new Chart(ctx, {
type: 'bar',
data: {
labels: ['Walls(Pure-White)', 'Walls(Accent-1)', 'Walls(Accent-2)', 'Cieling', 'Trim', 'Doors'],
datasets: [{
label: 'Percentage Complete',
data: [percent1, percent2, percent3, percent4, percent5, percent6],
borderWidth: 1
}]
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
title: {
display: true,
text: ''
}
}
}
});
</script>	
				
				<hr>
				
				<div class="container">
		<h1>Job Specific Notes/Changes.</h1>
		<hr>
		<p>Please submit your note below.</p>
		<form method="POST">
			<div class="form-group">
				<label for="name">Your Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="suggestion">Note Summary:</label>
				<textarea class="form-control" id="suggestion" rows="10" name="suggestion"></textarea>
			</div>
			<br>
			<p style="text-align: center;">
  <button type="submit" class="btn btn-primary">Submit Note</button>
</p>
		</form>
	</div>
				
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Name</th>
		  <th scope="col">Date</th>
	      <th scope="col">Note</th>
		  
		  
	    </tr>
	  </thead>
	  <tbody>

		
	  </tbody>
	      <?php 
      // Read the contents of the JSON file
      $jsonData = file_get_contents('Notes/AWI/notes.json');

      // Parse the JSON data as an array
      $suggestions = json_decode($jsonData, true);

      // Loop through the suggestions and output each row in the table
      foreach ($suggestions as $index => $suggestion) {
        echo '<tr>';
        echo '<td>' . $suggestion['name'] . '</td>';
		echo '<td>' . date('m-d-Y') . '</td>';
        echo '<td>' . $suggestion['suggestion'] . '</td>';
        echo '</tr>';
      }
    ?>
	</table>
                            <div class="section-block" id="documents" name= "photos">
	                                                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fas fa-bullhorn"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Important Documents</h4>
                                            <p>Click the image to enlarge.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-->
                                    <div class="row simplelightbox-gallery-1">
                                        <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6 class="thumbtitle">Important Note from Architect</h6>
                                            <p>Registration Desk Change Order</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/changeorders/AWI/1.png" ><img class="img-fluid" src="assets/images/changeorders/AWI/2t.png" alt="screenshot" /></a>
                                            </div> 
                                        </div>
                                         <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6 class="thumbtitle">Important Safety Information</h6>
                                            <p>Pleae Read Before Entering</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/changeorders/AWI/2.png" ><img class="img-fluid" src="assets/images/changeorders/AWI/2t.png" alt="screenshot" /></a>
                                                
                                            </div> 
                                        </div>
                                        <div class="clearfix"></div>
                                         <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6 class="thumbtitle">Takeoff 1</h6>
                                            <p>Takeoff Information</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/changeorders/AWI/3.png" ><img class="img-fluid" src="assets/images/changeorders/AWI/3t.png" alt="screenshot" /></a>
                                                
                                            </div> 
                                        </div>
                                         <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6 class="thumbtitle">Takeoff 2</h6>
                                            <p>Takeoff Information</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/changeorders/AWI/4.png" ><img class="img-fluid" src="assets/images/changeorders/AWI/4t.png" alt="screenshot" /></a>
                                                
                                            </div> 
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->

<b id="ImportantInfo"><p style= 'text-align: Left; font-size: 30px;', >Scheduling Restrictions:</p></b>
<p style= 'text-align: Left; font-size: 15px;'>The flooring is scheduled to beigin in the stairwell starting <b>2/16/2023</b>. Furthermore the furniture is to start being moved in <b>2/16/2023</b>. The Flooring for the entire building is to continue on <b>2/27/2023</b>.</p>
<br>


<b id="ImportantInfo"><p style= 'text-align: Left; font-size: 30px;', >Available Contacts:</p></b>
		<div class="table-responsive" id="contact">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
													<th>Position/Role</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email/Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
													<td>Site Super</td>
                                                    <td>George</td>
													<td>Forney</td>
													<td>717-554-6660</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Day2Day Lead</td>
													<td>Brian M</td>
													<td>Chambers</td>
													<td>717-449-6809</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Site Lead</td>
													<td>John</td>
													<td>Nogel</td>
													<td>717-415-0758</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                </div>
                  </div>
                    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                        <div id="doc-nav" class="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu flex-column sticky">
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#general">General Info</a>
	                            </li>
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#documents">Documents</a>
	                            </li>
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#photos">Photos</a>
	                            </li>
	                            <li class="nav-item">
                                     <a class="nav-link scrollto" href="#contact">Contacts</a>
	                            </li>
                            </ul>
                        </div>
                    </div>
                </div>            
            </div>
        </div>       
    </div>
    
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