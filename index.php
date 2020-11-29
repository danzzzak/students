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

        <table cellpadding="0" cellspacing="0" border="0" id="table" class="table_sort">

        <thead>
            <tr>
                <div class="table__body">
                    <div class="row mt-5">
                        <th><div class="name col-md-3"></div> <a href=''> name </a></div></th>
                        <th><div class="last-name col-md-3"> <a href=''>last-name </a></div></th>
                        <th><div class="ngroup col-md-3"> <a href=''>ngroup </a></div></th>
                        <th><div class="points col-md-3"> <a href=''>points </a></div></th>
                    </div>
                </div>    
            </tr>
        </thead>

    <tbody> 
        <tr>
        <div class="table__result">
            <div class="row mt-5">
                <td><div class="name col-md-3" > <?php require 'table/table-name.php' ?>     </div></td>
                <td><div class="last-name col-md-3"> <?php require 'table/table-lastname.php' ?></div></td>
                <td><div class="ngroup col-md-3"> <?php require 'table/table-ngroup.php' ?>   </div></td>
                <td><div class="points col-md-3"> <?php require 'table/table-points.php' ?>   </div></td>
            </div>
        </div>
        </tr>   
    </tbody>

        </table>

        <div class="table__pages">
    
        </div>
    </div>

    <script src="scripts.js"></script>
</body>

</html>