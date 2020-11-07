<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $website_title = 'CHANGE PROFILE';
    require 'blocks/head.php'
    ?>
    
</head>
<body>

<?php require 'blocks/header.php'?>

<main class="container">
    <h3>CHANGE INFU</h3>
    <form action="" method="post">
        <label for="name">name - <?=$_COOKIE['username'] ?></label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="lastname">lastname - <?= $_COOKIE['userlastname'] ?></label>
        <input type="text" name="lastname" id="lastname" class="form-control">

        <label for="ngroup">ngroup - <?= $_COOKIE['userngoup'] ?></label>
        <input type="text" name="ngroup" id="ngroup" class="form-control">

        <label for="email">email - <?= $_COOKIE['useremail'] ?></label>
        <input type="text" name="email" id="email" class="form-control">

        <label for="points">points - <?= $_COOKIE['userpoints'] ?></label>
        <input type="text" name="points" id="points" class="form-control">

        <label for="year">year - <?= $_COOKIE['useryear'] ?></label>
        <input type="text" name="year" id="year" class="form-control">
        
        <label for="city">city - <?= $_COOKIE['usercity'] ?></label>
        <input type="text" name="city" id="city" class="form-control">

        <button type="button" id="accept" class="btn btn-success mt-5">
            IZMENIT INFY
        </button>
    </form>
</main>
