<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$ngroup = $_POST['ngroup'];
$email = $_POST['email'];
$points = $_POST['points'];
$year = $_POST['year'];
$city = $_POST['city'];

$username = $_COOKIE['username'];
$userlastname = $_COOKIE['userlastname'];
$userngoup = $_COOKIE['userngoup'];
$useremail = $_COOKIE['useremail'];
$userpoints = $_COOKIE['userpoints'];
$useryear = $_COOKIE['useryear'];
$usercity = $_COOKIE['usercity'];


require_once 'mysql.php';

$id = "SELECT id FROM `student` WHERE `name` = '$username' `lastname` = '$userlastname', `ngroup` = '$userngoup',
`email` = '$useremail', `points` = '$userpoints', `year` = '$useryear', `city` = '$usercity' ";


$sql = "UPDATE `student` SET `name` = ?, lastname =? , ngroup =? , email =? , points =? , year =? , city =?  WHERE  id = ? " ;
$query = $pdo->prepare($sql);
$query->execute([$name, $lastname, $ngroup, $email, $points, $year, $city, $id]);

echo 'Ready';