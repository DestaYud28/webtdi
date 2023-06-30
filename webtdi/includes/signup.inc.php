<?php

if (isset($_POST["Submit"])) {
    
  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $re_pass = $_POST["re_pass"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($name, $email, $pass, $re_pass) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidUid($name) !== false) {
    header("location: ../signup.php?error=invaliduid");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
    exit();
  }
  if (pwdMatch($pass, @$re_pass) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
  }
  if (emailExists($conn, $email) !== false) {
    header("location: ../signup.php?error=emailalreadyexists");
    exit();
  }

  createUser($conn, $name, $email, $pass);

}
else {
    header("location: ../signup.php");
    exit();
}