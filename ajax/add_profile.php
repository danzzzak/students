<?php
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING ));
$lastname = trim(filter_var($_POST['lastname'], FILTER_SANITIZE_EMAIL ));
$ngroup = trim(filter_var($_POST['ngroup'], FILTER_SANITIZE_STRING ));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING ));
$points = trim(filter_var($_POST['points'], FILTER_SANITIZE_STRING ));
$year = trim(filter_var($_POST['year'], FILTER_SANITIZE_STRING ));
$city = trim(filter_var($_POST['city'], FILTER_SANITIZE_STRING ));


require_once 'mysql.php';

$sql =  'INSERT INTO student(name, lastname, ngroup, email, points, year, city) VALUES(?,?,?,?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute( [$name, $lastname, $ngroup, $email, $points, $year, $city] );
echo 'Ready';