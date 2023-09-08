<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="ISO-8859-1">
<title>Register | Hangry</title>
<link rel = "stylesheet" href="css/style-forms.css">	
</head>
<body>
<nav class="nav-header">
	<a href="home.php"> <img src = "images/Hangry Logo.png" alt="Delta" class="business-logo-3"> </a>
	<p class="nav-header-txt">| Register</p>
	<div class="div-nav-right">
		<a href="faq.php" target="_blank" rel="noopener noreferrer"><img src="icons/question-circle-fill.svg" class="icons-2"></a>
	</div>
	<a href="faq.php" target="_blank" rel="noopener noreferrer" class="nav-header-txt-2">Need Help?</a>
</nav>

<div class = "main-content-2">
	<div class="content-box-3">
		<div class="content-box-main-header">
			<span style="float:left">Register</span>
			<span class="hyperlink"><a href="login.php">CANCEL</a></span>
		</div>
		
		<form action="users/createuser.php" method="post" enctype="multipart/form-data">
			
			<div class="mini-content-box-1">

				<label for="profilepic"><b>Upload Profile Picture *</b></label><br>
				<input type="file" id="profilepic" name="profilepic" required><br><br>
			
				<label for="firstname"><b>First Name *</b></label><br>
				<input type="text" id="firstname" name="firstname" required><br>
				
				<label for="lastname"><b>Last Name *</b></label><br>
				<input type="text" id="lastname" name="lastname" required><br>
				
				<label for="username"><b>Username *</b></label><br>
				<input type="text" id="username" name="username" required><br>
				
				<label for="contactnumber"><b>Contact Number *</b></label><br>
				<input type="text" id="contactnumber" name="contactnumber" required><br>
			
			</div>
			
			<div class="mini-content-box-2">

				<label for="homeaddress"><b>Full Home Address *</b></label><br>
				<input type="text" id="homeaddress" name="homeaddress" required><br>
				
				<label for="country"><b>Country *</b></label><br>
				<input type="text" id="country" name="country" value="Philippines" readonly="true"><br>

				<label for="securityquestion"><b>Security Question *</b></label><br>
				<div class="select-container">
					<select id="securityquestion" name="securityquestion" required>
						<option value="">Choose a Security Question</option>
						<option value="What is the name of your car?">What is the name of your car?</option>
						<option value="What is the name of your elementary school?">What is the name of your elementary school?</option>
						<option value="What is your favorite food?">What is your favorite food?</option>
						<option value="What is the name of your favorite artist?">What is the name of your favorite artist?</option>
						<option value="What is the title of your favorite music?">What is the title of your favorite music?</option>
					</select>
					<div class="select-box"><img src="icons/down-arrow-icon-gray.svg"></div>
				</div>
				
				<label for="securityquestion-answer"><b>Security Question Answer *</b></label><br>
				<input type="text" id="securityquestion-answer" name="securityquestion-answer" required><br>
				
				<label for="gender"><b>Gender *</b></label><br>
				<div class="select-container">
					<select id="gender" name="gender" required>
						<option value="">Choose a Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<div class="select-box"><img src="icons/down-arrow-icon-gray.svg"></div>
				</div>

			</div>
			
			<div class="mini-content-box-3">

				<label for="emailaddress"><b>Email Address *</b></label><br>
				<input type="email" id="emailaddress" name="emailaddress" required>
				
				<label for="password"><b>Password *</b></label><br>
				<input type="password" id="password" name="password" required>
				<label><input type="checkbox" style="vertical-align:top;" onclick="showPassword()"><span class="label-checkbox-1">Show Password</span></label>
				<br><br>
				<label><input type="checkbox" required><span class="label-checkbox-2">I agree to the<a href="termsofservice.php" target="_blank" rel="noopener noreferrer">Terms of Service</a></span></label>
				<br>
				<!-- <div class="error-container"><p class="errorMessage">User already exists.</p></div> -->
				<button class="btn-form-3">CREATE ACCOUNT</button>
			</div>
		</form>
	</div>
	<br>
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

<script>
document.getElementById("contactnumber").addEventListener("input", function (contactno) {
    var inputValue = contactno.target.value;
    var validatedValue = inputValue.replace(/\s/g, "");
    contactno.target.value = validatedValue;
});
</script>
</body>
</html>