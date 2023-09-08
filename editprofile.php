<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta charset="ISO-8859-1">
<title>Edit Profile | Delta</title>
<link rel = "stylesheet" href="css/style-forms.css">
</head>
<body>
<div class = "main-content-3">
	<div class="content-box-6">
		<div class="content-box-main-header-2">
			<span style="float:left;padding-top:0.2rem;">Edit Profile</span>
			<span class="hyperlink">
				<a href="myprofile.php">CANCEL</a>
			</span>
		</div>
		<div class="mini-content-box-4">
			<form action="#" method="post">
				<label for="firstname"><b>First Name *</b></label><br>
				<input type="text" id="firstname" name="firstname" required><br>
			
				<label for="lastname"><b>Last Name *</b></label><br>
				<input type="text" id="lastname" name="lastname" required><br>
			
				<label for="gender"><b>Gender *</b></label><br>
					<div class="select-container">
						<select id="gender" name="gender" required>
							<option value="">Choose a Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<div class="select-box"><img src="icons/down-arrow-icon-gray.svg"></div>
					</div>
			
				<label for="contactnumber"><b>Contact Number *</b></label><br>
				<input type="text" id="contactnumber" name="contactnumber" required><br>
			
				<!-- <div class="error-container"><p class="errorMessage">Invalid Input.</p></div> -->
				<button class="btn-form-3" onclick="location.href='myprofile.php';">SUBMIT</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>