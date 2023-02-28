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
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Settings</h1>
		<hr>
        <form>
            <div class="form-group">
			                <label for="username">Change Username:</label>
                <input type="text" class="form-control" id="username-value" placeholder="Current Username" disabled>
                <input type="text" class="form-control" id="username" placeholder="Enter a New Username">
            </div>
            <div class="form-group">
                <label for="email">Change Email:</label>
                <input type="text" class="form-control" id="email-value" placeholder="Current Email" disabled>
                <input type="email" class="form-control" id="email" placeholder="Enter a New Email">
            </div>
            <div class="form-group">
                <label for="profileImage">Profile Image</label>
                <input type="file" class="form-control-file" id="profileImage">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
	<br>
<br>
<br>
<br>
<?php 
	require "footer.php";
?>
</body>
</html>