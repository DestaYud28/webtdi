<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Signup</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
</body>
</html>
<div class="login-box">
  <h2>Sign up</h2>
  <form action="includes/signup.inc.php" method="POST">
    <div class="user-box">
      <input type="text" name="name" id="name" required=""/>
      <label>Full Name</label>
    </div>
    <div class="user-box">
        <input type="text" name="email" id="email" required=""/>
        <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="pass" id="pass" required=""/>
      <label>Password</label>
    </div>
    <div class="user-box">
        <input type="password" name="re_pass" id="re_pass" required=""/>
        <label>Confirm Password</label>
      </div>
    <a href="">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>