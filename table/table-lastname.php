<?php

require_once 'mysql.php';


$sql = 'SELECT * FROM `student` ORDER BY `id` DESC';
$query = $pdo->query($sql);
while ($row = $query->fetch(PDO::FETCH_ASSOC) ) {
    $result = $row['lastname'];
    echo "<div>$result</div> ";
}