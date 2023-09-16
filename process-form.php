<?php

$username = $_POST["username"];
$category = $_POST["category"];
$department = $_POST["department"];
$year = $_POST["year"];
$usermobile = $_POST["user-mobile"];
$useremail = $_POST["user-email"];
$bloodgroup = $_POST["blood-group"];
$options = $_POST["options"];
$conditions = $_POST["condition"];

$host = "localhost";
$dbname = "vgu_blood_donation";
$user = "vgu_blood";
$password = "aajarootlele";

$conn = mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO blood_donation_registration(username,category,department,year,usermobile,useremail,bloodgroup,options,conditions) VALUES(?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(! mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"sssssssss",$username,$category,$department,$year,$usermobile,$useremail,$bloodgroup,$options,$conditions);
mysqli_stmt_execute($stmt);
echo "Data Saved";
// var_dump($username, $category, $department, $year, $usermobile, $useremail, $bloodgroup, $options, $condition);
