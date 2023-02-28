<?php 
	require "functions.php";
	if(isset($_POST['submit'])){
		$response = registerUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm-password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	    <script defer src="paintcartel/assets/fontawesome/js/all.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="paintcartel/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="paintcartel/assets/plugins/elegant_font/css/style.css">    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="paintcartel/assets/css/styles.css">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<title>PaintCartel SignUp</title>

</head>
<body>

	<form action="" method="post" autocomplete="off">
	  <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Paint</span><span class="text-bold">Cartel</span>
                    </h1>
                </div><!--//branding-->
          
            </div><!--//container-->
        </header><!--//header-->
		<br>
		<h2>Sign up</h2>
		<h4>
			Please fill out this form to create an account. <br>
		</h4>

		<div class="grid">
			<div>
				<label>Email *</label>
				<input type="text" name="email" value="<?php echo @$_POST['email']; ?>" >
			</div>

			<div>
				<label>Username *</label>
				<input type="text" name="username" value="<?php echo @$_POST['username']; ?>" >
			</div>

			<div>
				<label>Password *</label>
				<input type="text" name="password" value="<?php echo @$_POST['password']; ?>">
			</div>

			<div>
				<label>Confirm Password *</label>
				<input type="text" name="confirm-password" value="<?php echo @$_POST['confirm-password']; ?>">
			</div>
		</div>	

		<button type="submit" name="submit">Submit</button>	

		<p>
			Already have an account? 
			<a href="login.php">Login here</a>
		</p>

		<?php 
			if(@$response == "success"){
				?>
					<p class="success">Your registration was successful</p>
				<?php
			}else{
				?>
					<p class="error"><?php echo @$response; ?></p>
				<?php
			}
		?>
	</form>
</body>
</html>
