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
<!DOCTYPE html>
<html lang="en">
    <title>425652-20 - AWI Lower</title>
    

<body class="body-purple">
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
                    <li class="breadcrumb-item active">Safety Examples</li>
                </ol>
                <div class="top-search-box">
				<div id="displayDiv"></div>
<form class="form-inline search-form justify-content-center" action="" method="get">
  <input type="text" id="search-input" placeholder="Search..." class="form-control search-input">
  <button type="submit" class="btn search-btn" value="Search" onclick="searchElements()"><i class="fas fa-search"></i></button>
</form>

	<script>
 // Get the input element and the target container
const searchInput = document.getElementById("search-input");
const container = document.getElementById("container");

// Attach an event listener to the input element to listen for changes
searchInput.addEventListener("input", function() {
  // Get the search term
  const searchTerm = searchInput.value.toLowerCase();

  // Loop through all the elements in the container
  for (let i = 0; i < container.children.length; i++) {
    const element = container.children[i];

    // Check if the element text contains the search term
    if (element.textContent.toLowerCase().indexOf(searchTerm) !== -1) {
      // If it does, scroll to the element
      element.scrollIntoView();
      break;
    }
  }
});
</script>
					
                </div>
            </div><!--//container-->
        </header><!--//header-->
		
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_lifesaver"></span>Safety In Action!</h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: Feb 6, 2023</div>
                </div><!--//doc-header-->	
				
				
				
				
				

				
				<hr>				



<section id="gallery">
  <div class="container">
    <div class="row">
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="assets\safetyexamples\safe.jpg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Sunset</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
       <a href="" class="btn btn-outline-success btn-sm">Read More</a>
        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4">
  <div class="card">
      <img src="assets\safetyexamples\safe2.jpg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Sunset</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
       <a href="" class="btn btn-outline-success btn-sm">Read More</a>
        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
      </div>
      </div>
    </div>
	
	
	
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img src="assets\safetyexamples\safe3.jpg" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Sunset</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
       <a href="" class="btn btn-outline-success btn-sm">Read More</a>
        <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
      </div>
     </div>
    </div>
	
	
	
  </div>
</div>
</section>
								
										
										<!--/
                                        <div class="clearfix"></div>
                                         <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6 class="thumbtitle">Takeoff 1</h6>
                                            <p>Takeoff Information</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/takeoff1.png"><img class="img-fluid" src="assets/images/takeoff1thumb.png" alt="screenshot" /></a>
                                                
                                            </div> 
                                        </div>
										/section-block-->
                                        
                                    </div><!--//row-->
                                </div><!--//section-block-->
                                
                            </section><!--//doc-section-->






		</pre>		
                </div><!--//promo-block-inner--> 

            </div><!--//container-->
			
        </div><!--//promo-block-->
        
    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Brian Chambers for the PaintCartel</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/prism/prism.js"></script>      
    <script src="assets/plugins/stickyfill/dist/stickyfill.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>                                                          
    <script src="assets/js/main.js"></script>
</body>
</html> 

