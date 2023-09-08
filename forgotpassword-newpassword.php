<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="ISO-8859-1">
<title>Forgot Password - New Password | Delta</title>
<link rel = "stylesheet" href="css/style-forms.css">	
</head>
<body>
<div class = "main-content-2">
	<div class="content-box-4">
		<div class="content-box-main-header-2">
			<span style="float:left;padding-top:0.2rem;">Forgot Password</span><span class="hyperlink"><a href="login.php">CANCEL</a></span>
		</div>
		<div class="mini-content-box-4">
			<label for="newpassword"><b>Enter your New Password</b></label><br>
			<input type="password" id="newpassword" name="newpassword" required><br>
			<label><input type="checkbox" style="vertical-align:top;" onclick="showPassword()"><span class="label-checkbox-1">Show Password</span></label><br>
			<button class="btn-form-3" onclick="location.href='login.php';">SUBMIT</button>
		</div>
	</div>
</div>
<script> //The purpose of this script is to show or not show the password in text format instead of asterisks.
function showPassword(){
	  var x = document.getElementById('newpassword');
	  if (x.type === 'password') {x.type = 'text';}
	  else {x.type = 'password';}
}
</script>
</body>
</html>