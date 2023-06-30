<h2>Toko Daging Indonesia</h2>
<title>Sign in/Sign up</title>
<link rel="stylesheet" href="style.css">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="includes/signin.inc.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="https://accounts.google.com/v3/signin/identifier?dsh=S1091013261%3A1686890557516068&authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&hl=en_GB&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession"><img src="Icon Google.png" alt="image" style="width: 45px; height: 45px;"></a>
				<a href="https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1"><img src="Icon Facebook.png" alt="image" style="width: 75px; height: 45px;"></a>
            </div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
                <img src="toko-daging-indonesia-logo-F3056E640E-seeklogo.com.png" alt="">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start shopping with us</p>
				<a href="http://localhost/webtdi/signup/signup.php"><button class="ghost" id="signUp">Sign Up</button></a>
			</div>
		</div>
	</div>
</div>

<footer>
	
</footer>