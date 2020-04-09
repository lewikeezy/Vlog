<?php

 //print_r($_POST);
/*
$first_name = $_POST['first_name'];
$last_name =$_POST['last_name'];
$email =$_POST['email'];
$dept =$_POST['dept'];
$level =$_POST['level'];
$phone_number =$_POST['phone_number'];
$gender =$_POST['gender'];  
$password =$_POST['password'];  


$errorArray =[];

if ($first_name == "") {
      $errorArray = "first name cannot be blank"; 
}

print_r($errorArray);

if ($last_name == "") {
    $errorArray = "last name cannot be blank"; 
}

print_r($errorArray);


if ($email == "") {
    $errorArray = "email cannot be blank"; 
}

print_r($errorArray);


if ($dept == "") {
    $errorArray = "dept cannot be blank"; 
}

print_r($errorArray);


if ($level == "") {
    $errorArray = "please select your level"; 
}

print_r($errorArray);


if ($phone_number == "") {
    $errorArray = "phone number cannot be blank"; 
}

print_r($errorArray);

if ($gender == "") {
    $errorArray = "please select one option"; 
}

print_r($errorArray);


if ($password == "") {
    $errorArray = "password"; 
}

print_r($errorArray);
*/

$errorCount = 0;


$first_name = $_POST['first_name'] != ""? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != ""? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != ""? $_POST['email'] : $errorCount++;
$dept = $_POST['dept']  != ""? $_POST['dept'] : $errorCount++;
$phone_number = $_POST['phone_number'] != ""?  $_POST['phone_number'] : $errorCount++;



$level = $_POST['level'];
$gender = $_POST['gender'];
$passwword = $_POST['password'];

if($errorCount >0){ 
    //redirect back and show error
      
} else {
    //continue to db
}

   //save data into db folder

   //return back to the page, displaying status

?>
