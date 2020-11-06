<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$ngroup = $_POST['ngroup'];
$email = $_POST['email'];
$points = $_POST['points'];
$year = $_POST['year'];
$city = $_POST['city'];



require_once 'mysql.php';

$sql = 'INSERT INTO student(name, lastname, ngroup, email, points, year, city) VALUES(?, ?, ?, ?, ?, ?, ?) ';
$query = $pdo->prepare($sql);
$query->execute( [$name, $lastname, $ngroup, $email, $points, $year, $city] );


echo 'Ready';