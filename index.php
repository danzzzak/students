<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $website_title = 'index';
    require 'blocks/head.php'
    ?>
    
</head>
<body>

<?php require 'blocks/header.php'?>
    <div class="table">
        <div class="table__header">
            <div class="row">
                <div class="list col-md-6">Stisok</div>
                <div class="search col-md-6">search</div>
            </div>
        </div>
    
        <div class="table__body">
            <div class="row mt-5">
                <div class="name col-md-3">name</div>
                <div class="last-name col-md-3">last-name</div>
                <div class="ngroup col-md-3">ngroup</div>
                <div class="points col-md-3">points</div>
            </div>
        </div>
    
        <div class="table__pages">
    
        </div>
    </div>


    <?php
    echo 'hello'
    ?>
</body>
</html>