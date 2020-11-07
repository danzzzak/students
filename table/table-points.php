<?php

require_once 'mysql.php';

$sql = 'SELECT * FROM `student` ORDER BY `id` DESC';
$query = $pdo->query($sql);
while ($row = $query->fetch(PDO::FETCH_OBJ) ) {
    echo " <div>$row->points </div> ";
}