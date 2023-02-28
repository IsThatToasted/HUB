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
<title>PaintCartel  - Home</title>
<!DOCTYPE html>
<html lang="en">

<body class="landing-page"> 

    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
		
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Paint</span><span class="text-bold">Cartel</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Documentation for the PaintCartel.</p>
                </div><!--//tagline-->
                
	             <div class="main-search-box pt-3 pb-4 d-inline-block">
	                 <form class="form-inline search-form justify-content-center" action="" method="get">
	            
			            <input type="text" placeholder="Enter search terms..." name="search" class="form-control search-input" id="searchInput" onkeyup="searchFunction()">
						
			            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
			            <script>
  function searchFunction() {
    const searchInput = document.getElementById("searchInput").value;
    const cards = document.querySelectorAll(".item");

    cards.forEach(card => {
      if (card.innerHTML.toLowerCase().indexOf(searchInput.toLowerCase()) > -1) {
        card.style.display = "";
      } else {
        card.style.display = "none";
      }
    });
  }
</script>
			        </form>
	             </div>
                 
              
                 
                
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
			
                <h2 class="title"></h2>
                <div class="intro">
				
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
             
                    <div class="item item-purple col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_datareport_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">AWI-Lower</h3>
                            <p class="intro">Current progress and visual represtation of job completion.</p>
                            <a class="link" href="AWI.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					
					<div class="item item-blue col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_datareport_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">JEM/CHOP</h3>
                            <p class="intro">Current progress and visual represtation of job completion.</p>
                            <a class="link" href="jemchop.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					
					<div class="item item-green col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_datareport_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">AMES/Tenfold</h3>
                            <p class="intro">Current progress and visual represtation of job completion.</p>
                            <a class="link" href="404.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					</div>
					 <div id="cards-wrapper2" class="cards-wrapper row">
					
					
					<hr class="style17"></hr>
<br>
					
					
					
				
					
					<div class="item item-blue col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_documents_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Safety Suggestions</h3>
                            <p class="intro">Suggestions and recommendations from employees regarding safety and equipment.</p>
                            <a class="link" href="safetysuggestion.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					
					<div class="item item-purple col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Positive Safety Examples</h3>
                            <p class="intro">Examples of safety in action on the job site.</p>
                            <a class="link" href="safety.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					
<hr class="style17"></hr>
<br>

					<div class="item item-green col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
							
                                  <span aria-hidden="true" class="icon icon_clock_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Schedule</h3>
                            <p class="intro">Demo Scheduling Appliction written in React.js</p>
                            <a class="link" href="http://localhost:3000"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					
		                 <div class="item item-green col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_tools"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Tools</h3>
                            <p class="intro">Tools for Job Completion, Paint Coverage, and More!</p>
                            <a class="link" href="Tools/index.php"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
					
					
					
					
                </div><!--//cards-->
            </div><!--//container-->
        </section><!--//cards-section-->
		
	
		
    </div><!--//page-wrapper-->
    
    <footer class="footer text-center">
        <div class="container">
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Brian Chambers for the PaintCartel</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
	
	
     
    <!-- Main Javascript -->       
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>     
    <script src="assets/plugins/stickyfill/dist/stickyfill.min.js"></script>                                                                
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
			<label for="jobName">Job Name</label>
			<input type="text" class="form-control" id="titleInput" placeholder="Enter Job Name">
		  </div>
		  <div class="form-group">
			<label for="bidHours">Bid Hours</label>
			<input type="text" class="form-control" id="bidHours" placeholder="Enter Bid Hours">
		  </div>
		  <div class="form-group">
			<label for="hoursWorked">Hours Worked</label>
			<input type="text" class="form-control" id="hoursWorked" placeholder="Enter Hours Worked">
		  </div>
		  <div class="form-group">
			<label for="ticketHours">Ticket Hours</label>
			<input type="text" class="form-control" id="ticketHours" placeholder="Enter Ticket Hours">
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addProject()">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  function addProject() {
    // Get the input values from the modal
    const title = document.getElementById("titleInput").value;
    const bidHours = document.getElementById("bidHours").value;
    const hoursWorked = document.getElementById("hoursWorked").value;
    const ticketHours = document.getElementById("ticketHours").value;

    // Create a new card with the input values
    const card = document.createElement("div");
    card.classList.add("item", "item-green", "col-lg-4", "col-6");
    card.innerHTML = `
      <div class="item-inner">
        <div class="icon-holder">
          <span aria-hidden="true" class="icon icon_question"></span>
        </div>
        <h3 class="title">${title}</h3>
        <p class="intro">Bid Hours: ${bidHours}<br>Hours Worked: ${hoursWorked}<br>Ticket Hours: ${ticketHours}</p>
        <a class="link" href="newProjects/${card.title} .html"><span></span></a>
      </div>
    `;

    // Append the new card to the container
  const container = document.getElementById("cards-wrapper");
  container.appendChild(card);

    // Close the modal
    $('#exampleModal').modal('hide');

    // Reset the form fields
    document.getElementById("titleInput").value = "";
    document.getElementById("bidHours").value = "";
    document.getElementById("hoursWorked").value = "";
    document.getElementById("ticketHours").value = "";

    // Save the card to localStorage
    const cards = JSON.parse(localStorage.getItem("cards")) || [];
    cards.push({ title, bidHours, hoursWorked, ticketHours });
    localStorage.setItem("cards", JSON.stringify(cards));
	
	// Send the data to the PHP file using AJAX
const xhr = new XMLHttpRequest();
const url = 'newProject.php';
const data = JSON.stringify({ title, bidHours, hoursWorked, ticketHours });
xhr.open('POST', url, true);
xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
xhr.onload = function() {
  if (xhr.status === 200) {
    // Handle the response from the server
    console.log(xhr.responseText);
  }
};
xhr.send(data);
  }

  // Load the cards from localStorage
  const cards = JSON.parse(localStorage.getItem("cards")) || [];
  cards.forEach(card => {
    const cardElement = document.createElement("div");
    cardElement.classList.add("item", "item-green", "col-lg-4", "col-6");
    cardElement.innerHTML = `
      <div class="item-inner">
        <div class="icon-holder">
          <span aria-hidden="true" class="icon icon_question"></span>
        </div>
        <h3 class="title">${card.title}</h3>
        <p class="intro">Bid Hours: ${card.bidHours}<br>Hours Worked: ${card.hoursWorked}<br>Ticket Hours: ${card.ticketHours}</p>
        <a class="link" href="newProjects/${card.title}.html"><span></span></a>
      </div>
    `;

    const container = document.getElementById("cards-wrapper");
    container.appendChild(cardElement);
  });
</script>


	
</body>
</html> 
