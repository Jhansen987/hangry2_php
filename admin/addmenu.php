<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta charset="ISO-8859-1">
	<title>Add New Menu | Hangry</title>
	<link rel="stylesheet" href="../css/style-forms.css">
</head>
<body>
<div class = "main-content-3">
	<div class="content-box-5">
		<div class="content-box-main-header">
			<span class="txt-form-label">ADD NEW MENU</span>
			<span class="hyperlink"><a href="managemenus.php">CANCEL</a></span>
		</div>
		
		<div class="mini-content-box-5">
			<form action="#" method="post" enctype="multipart/form-data">
				<label for="menuImage"><b>Menu Image *</b></label><br>
				<input type="file" id="menuImage" name="menuImage" required><br><br>
			
				<label for="menuName"><b>Menu Name *</b></label><br>
				<input type="text" id="menuName" name="menuName" required><br>
			
				<label for="menuPrice"><b>Price *</b></label><br>
				<input type="number" min="0" id="menuPrice" name="menuPrice" required><br>
			
				<label for="menuStock"><b>Number of Stocks Available *</b></label><br>
				<input type="number" min="0" step="1" oninput="validity.valid||(value='');" id="menuStock" name="menuStock" required><br>
				
				<label for="menuDescription"><b>Menu Description *</b></label><br>
				<textarea id="menuDescription" name="menuDescription" rows="5" cols="58" required></textarea>
				
				<!-- <div class="error-container"><p class="errorMessage">The menu already exists.</p></div> -->
				<button class="btn-form-3">CREATE</button>
			</form>
		</div>
	</div>
	<br>
</div>
</body>
</html>