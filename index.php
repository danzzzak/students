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
        <?php
        require_once 'mysql.php';

        $sql = 'SELECT * FROM `student` ORDER BY `id` DESC';
        $query = $pdo->query($sql);
        while ($row = $query->fetch(PDO::FETCH_OBJ) ) {
            $nametable = $row->name;
        }
        ?>
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

        <div class="table__result">
            <div class="row mt-5">
                <div class="name col-md-3" ><?php require 'table/table-name.php' ?>     </div>
                <div class="last-name col-md-3"> <?php require 'table/table-lastname.php' ?></div>
                <div class="ngroup col-md-3"> <?php require 'table/table-ngroup.php' ?>   </div>
                <div class="points col-md-3"> <?php require 'table/table-points.php' ?>   </div>
            </div>
        </div>
    
        <div class="table__pages">
    
        </div>
    </div>
</body>
</html>