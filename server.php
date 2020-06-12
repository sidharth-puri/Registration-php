<?php

$name="";
$email="";
$password="";
$address="";
$pincode="";
$phone="";

$errors = array();

//connect

$db = mysqli_connect('localhost','root','','project');

//ajax call to look for existing email 

if(isset($_POST['email']))
{
 $email = mysqli_real_escape_string($db, $_POST['email']);
 $query = "SELECT * FROM user WHERE Email = '$email'";
 $result = mysqli_query($db, $query);
 echo mysqli_num_rows($result);
}

//register
if (isset($_POST['reg_user'])) {

$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$pincode = mysqli_real_escape_string($db, $_POST['pincode']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);


// form validtion

if(empty($name)) array_push($errors,"Name is required");
if(empty($email)) array_push($errors,"Email is required");
if(empty($password)) array_push($errors,"Password is required");
if(empty($address)) array_push($errors,"Address is required");
if(empty($pincode)) array_push($errors,"Pincode is required");
if(empty($phone)) array_push($errors,"Phone is required");
if(strlen($password)<8) array_push($errors,"Password must be of min 8 characters");
if(!is_numeric($phone)) array_push($errors,"Phone must be numeric");
if(!is_numeric($pincode)) array_push($errors,"Pincode must be numeric");
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) array_push($errors,"Invalid email format");
if (!preg_match("/^[a-zA-Z ]*$/",$name)) array_push($errors,"Invalid Name format"); 

// existing email in database during validation

$email_check_query = "SELECT * FROM user WHERE Email='$email' LIMIT 1";
$result = mysqli_query($db, $email_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    if ($user['Email'] === $email) {
        array_push($errors, "Email already exists");
    }
}


//input in the table

if(count($errors)==0) {
$query = "INSERT INTO user (Name,Email,Password,Address,Pincode,Phone) VALUES('$name','$email','$password','$address','$pincode','$phone')";
mysqli_query($db,$query);
$name="";
$email="";
$password="";
$address="";
$pincode="";
$phone="";
}

}

?>