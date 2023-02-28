<?php 
	require "functions.php";
	if(isset($_POST['submit'])){
		$response = loginUser($_POST['username'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>PaintCartel Login</title>
		    <script defer src="paintcartel/assets/fontawesome/js/all.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="paintcartel/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="paintcartel/assets/plugins/elegant_font/css/style.css">    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="paintcartel/assets/css/styles.css">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
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
		<h2>Sign in</h2>
		<h4>Please fill out your information to sign in.</h4>
		
		<div class="grid">
			<div>
				<label>Username</label>
				<input type="text" name="username" value="<?php echo @$_POST['username']; ?>">
			</div>

			<div>
				<label>Password</label>
				<input type="text" name="password" value="<?php echo @$_POST['password']; ?>">
			</div>
		</div>
		
		<button type="submit" name="submit">Submit</button>	

		<p>
			Don't have an account? 
			<a href="index.php">Create an Account</a>
		</p>

		<p>
			<a href="forgot-password.php">Forgot your password?</a>
		</p>

		<p class="error"><?php echo @$response; ?></p>
	</form>
</body>
</html>
