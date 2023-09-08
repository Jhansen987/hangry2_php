<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="ISO-8859-1">
<title>Forgot Password - Email | Hangry</title>
<link rel = "stylesheet" href="css/style-forms.css">	
</head>
<body>
<div class = "main-content-2">
	<div class="content-box-4">
		<div class="content-box-main-header-2">
			<span style="float:left;padding-top:0.2rem;">Forgot Password</span><span class="hyperlink"><a href="login.php">CANCEL</a></span>
		</div>
		<div class="mini-content-box-4">
			<label for="emailaddress"><b>Enter your Email Address</b></label><br>
			<input type="text" id="emailaddress" name="emailaddress" required><br>
			<!-- <div class="error-container"><p class="errorMessage">Email Address does not exist.</p></div> -->
			<button class="btn-form-3" onclick="location.href='forgotpassword-securityquestion.php';">SUBMIT</button>
		</div>
	</div>
</div>
</body>
</html>