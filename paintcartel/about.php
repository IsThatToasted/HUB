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
  <head>
    <title>About the PaintCartel</title>
   
  <body class="body-purple">
    <div class="page-wrapper">
      <!-- ******Header****** -->
      <header id="header" class="header">
        <div class="container">
          <div class="branding">
            <h1 class="logo">
              <a href="index.php">
                <span aria-hidden="true" class="icon_documents_alt icon"></span>
                <span class="text-highlight">Paint</span>
                <span class="text-bold">Cartel</span>
              </a>
            </h1>
          </div>
          <!--//branding-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
          </ol>
        </div>
        <!--//container-->
      </header>
      <!--//header-->
      <div class="doc-wrapper">
        <div class="container">
          <div id="doc-header" class="doc-header text-center">
            <h1 class="doc-title">
              <span aria-hidden="true" class="icon icon_lifesaver"></span>About the PaintCartel
            </h1>
            <div class="meta">
              <i class="far fa-clock"></i> Last updated: Feb 26, 2023
            </div>
          </div>
          <!--//doc-header-->
          <hr>
          <div class="section-block" name="about"></div>
          <!--//section-block-->
          </section>
          <!--//doc-section-->
		  <b>
            <p style='text-align: Center; font-size: 30px;' ,>About the PaintCartel Docs</p>
          </b>
          <p style='text-align: Left; font-size: 15px;'>
Welcome to the PaintCartel Docs, where you can find comprehensive documentation and breakdowns for jobsites. This website should give you a general overview of the jobsite you're looking for. There are also multiple tools that i've created to assist others in breaking down a job.
 </p>
<p style='text-align: Left; font-size: 15px;'>I understand that getting the job done right requires more than just skill and hard work. It requires knowledge and having the right tools. My mission is to provide you with the knowledge and resources needed to get the job done right the first time. I strive to bring you the best in jobsite documentation and breakdowns so you can complete your job without the hassle and stress of not having the right information.
</p>
<p style='text-align: Left; font-size: 15px;'>Included in this documentation is an extensive database of resources and materials to help you plan out and complete a safe, successful job. From paint coverage to safe ladder distances, I have you covered. As an experienced painter and leader of industry professionals, I ensure that you have all the information you need to complete any job with confidence and ease.
</p>

		  
<hr>
<b>
            <p style='text-align: Center; font-size: 30px;' ,>About the Scheduling App</p>
          </b>
          <p style='text-align: Left; font-size: 15px;'>The React Scheduling App is a web application built with Reactjs and other technologies. It is designed to help users manage their tasks, appointments, and other activities more efficiently. It has features such as task creation, task editing, task notifications, and task reminders. The app is designed to be user friendly and intuitive, with a modern design.
          </p>
          <br>

<b>Front-end Technologies</b>
<ul>
  <li>React - JavaScript library for building user interfaces</li>
  <li>MUI - Framework for creating user interfaces using React components</li>
  <li>Styled Components - Library for styling React components with JavaScript</li>
  <li>TailwindCSS - CSS framework for creating responsive designs</li>
</ul>

<b>Back-end Technologies</b>
<ul>
  <li>Node.js - JavaScript runtime used for building back-end applications</li>
  <li>Express - Web application framework for Node.js</li>
  <li>PostgreSQL - Open-source relational database system</li>
</ul>

<b>Testing Technologies</b>
<ul>
  <li>Jest - JavaScript testing framework</li>
  <li>@testing-library/jest-dom - Library for testing React components</li>
  <li>@testing-library/react - Library for testing React components</li>
  <li>@testing-library/user-event - Library for testing user interactions</li>
  <li>Web Vitals - Library for measuring user experience metrics</li>
</ul>
<hr>
          <b>
            <p style='text-align: Center; font-size: 30px;' ,>Contact Information</p>
          </b>
          <p style='text-align: left; font-size: 15px;'>If you have any questions about the React Scheduling App, or anything else found within the PaintCartel docs, please click the EMAIL button below! Feel free to contact me from your email client of choice, thank you!</p>
  <a style='text-align: center; background-color: #222; border-radius: 0.25em; cursor: pointer; user-select: none; color: white; transition: all 170ms ease; padding: 6px 8px 6px 8px; font-size: 2em;' id="tooltip" onclick="getEmail()">Please enable JavaScript</a>


		<script>
document.getElementById("tooltip").innerHTML = 'My Email';
function getEmail() {
    let email = "moc.sedudowt@srebmahcmb";


    let tempInput = document.createElement("INPUT");
    document.body.appendChild(tempInput);
    tempInput.setAttribute("value", email.split("").reverse().join(""));
    tempInput.select();
    tempInput.setSelectionRange(0, 99999);
    document.execCommand("copy");
    document.body.removeChild(tempInput);

    // it will change the content inside the element to "Copied!"

    var tooltip = document.getElementById("tooltip");
    document.getElementById("tooltip").innerHTML = "Email Copied, Thank You!";

    // it will only show the "Copied!" message for 2 seconds
    setTimeout(() => {
        document.getElementById("tooltip").innerHTML = "My Email";
    }, 2000);
}
			</script>
		</div>
        <!--//promo-block-inner-->
      </div>
      <!--//container-->
    </div>
    <!--//promo-block-->
    </div>
    <!--//page-wrapper-->
    <footer id="footer" class="footer text-center">
      <div class="container">
        <small class="copyright">Designed with <span class="sr-only">love</span>
          <i class="fas fa-heart"></i> by Brian Chambers for the PaintCartel </small>
      </div>
      <!--//container-->
    </footer>
    <!--//footer-->
    <!-- Main Javascript -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/prism/prism.js"></script>
    <script src="assets/plugins/stickyfill/dist/stickyfill.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>