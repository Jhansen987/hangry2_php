<?php
require '../sqlconnection.php';

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


//---------FILE UPLOAD-------
$target_dir = "users/";
$target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["profilepic"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars(basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}







//==========================
$firstname = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
$username = trim($_POST["username"]);
$contactnumber = trim($_POST["contactnumber"]);
$homeaddress = trim($_POST["homeaddress"]);
$country = trim($_POST["country"]);
$securityquestion = trim($_POST["securityquestion"]);
$securityanswer = trim($_POST["securityquestion-answer"]);
$gender = trim($_POST["gender"]);
$email = trim($_POST["emailaddress"]);
$password = $_POST["password"];


echo "$firstname<br>";
echo "$lastname<br>";
echo "$username<br>";
echo "$contactnumber<br>";
echo "$homeaddress<br>";
echo "$country<br>";
echo "$securityquestion<br>";
echo "$securityanswer<br>";
echo "$gender<br>";
echo "$email<br>";
echo "$password<br>";

/* try{
$sql = "INSERT INTO users (firstname, lastname, 
username, email, password, contactNumber, address, 
country, securityQuestion, securityQuestionAnswer, gender)
VALUES ('$firstname', '$lastname', '$username','$email',
'$password', '$contactnumber', '$homeaddress', '$country',
'$securityquestion', '$securityanswer','$gender')";

if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
  header("Location: ../login.php");
} else {
  echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
}

}catch(mysqli_sql_exception $e){
  if($e->getCode() === 1062){
      echo "<br>Error:Username already exists!";
  }
   echo $e;
} */


mysqli_close($conn);
?>