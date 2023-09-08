<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="ISO-8859-1">
<title>Login | Hangry</title>
<link rel = "stylesheet" href="css/style-forms.css">	
</head>
<body>
<nav class="nav-header">
	<a href="home.php"> <img src = "images/Hangry Logo.png" alt="Delta" class="business-logo-3"> </a>
	<p class="nav-header-txt">| Login</p>
	<div class="div-nav-right">
		<a href="faq.php" target="_blank" rel="noopener noreferrer"><img src="icons/question-circle-fill.svg" class="icons-2"></a>
	</div>
	<a href="faq.php" target="_blank" rel="noopener noreferrer" class="nav-header-txt-2">Need Help?</a>
</nav>

<div class = "main-content-2">

    <div class="content-box-7">
        <div class="content-box-main-header">
			<span STYLE="float:left;">Login</span>
			<span class="hyperlink"><a href="home.php">CANCEL</a></span>
		</div>
        <div class="mini-content-box-5">
		<form action="#" method="post">
            <label for="emailaddress"><b>Email Address *</b></label><br>
			<input type="email" id="emailaddress" name="emailaddress" required>
				
			<label for="password"><b>Password *</b></label><br>
			<input type="password" id="password" name="password" required>
			<label><input type="checkbox" style="vertical-align:top;" onclick="showPassword()"><span class="label-checkbox-1">Show Password</span></label>
			<a class="forgotPass" href="forgotpassword-email.php">Forgot Password?</a>
            <br>
			<!-- <div class="error-container"><p class="errorMessage">Incorrect Email or Password.</p></div> -->
			<button class="btn-form-3">LOGIN</button>
		</form>
            <p>Don't have an account yet?<a href="register.php">Sign Up</a></p>
        </div>
	</div>
</div>
<?php require 'footers/footer.php'; ?>
<script> //The purpose of this script is to show or not show the password in text format instead of asterisks.
function showPassword(){
	  var x = document.getElementById('password');
	  if (x.type === 'password') {x.type = 'text';}
	  else {x.type = 'password';}
}

if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
</script>
</body>
</html>