<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == "TwoDudes" && $password == "password") {
  $_SESSION['logged_in'] = true;
  header("Location: ../paintcartel/index.html");
  exit;
} else {
  $_SESSION['error_message'] = "Incorrect username or password.";
  header("Location: ../index.html");
  exit;
}