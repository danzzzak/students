<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $website_title = 'index';
    require 'blocks/head.php'
    ?>
    
</head>
<body>

<?php require 'blocks/header.php';
require 'sortvalues.php'?>

    
<?php

$mysqli = NEW MySQLi('localhost', 'root', 'root', 'students');

if(isset($_GET['order'])) {
    $order = $_GET['order'];
} else {
    $order = 'name'; // default
}

if(isset($_GET['sort'])) {
    $sort = $_GET['sort'];
} else {
    $sort = 'ASC'; // default
}

$resultSet = $mysqli->query("SELECT * FROM `student` ORDER BY $order $sort");
echo "
        <table cellpadding='2' cellspacing='0' border='1' id='table' class='table_sort'>
        <thead>
            <tr>
                <div class='table__body'>
                <div class='row mt-5'>
                    <div class='qwee'><th><a href='?order=name&&sort=$sort'> name </a></th> </div>
                    <th><a href='?order=lastname&&sort=$sort'>last-name </a></th>
                    <th><a href='?order=ngroup&&sort=$sort'>ngroup </a></th>
                    <th><a href='?order=points&&sort=$sort'>points </a></th>
                </div>
                </div>   
        </thead>
";
while ($rows = $resultSet->fetch_assoc()) {
    $name = $rows['name'];
    $lastname = $rows['lastname'];
    $ngroup = $rows['ngroup'];
    $points = $rows['points'];

    echo "
    <tbody> 
    <tr>
        <div class='row'>
            <td><div class='col-md-3'>$name </div> </td>
            <td><div class='col-md-3'>$lastname</div></td>
            <td><div class='col-md-3'>$ngroup</div></td>
            <td><div class='col-md-3'>$points</div></td> 
        </div>
        </tr>   
    </tbody>

    </tr>
    ";

}

echo "

</table>
";
?>

    <script src="scripts.js"></script>
</body>

</html>