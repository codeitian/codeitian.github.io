<?php
    require_once('../inc/mainClass.php');
    $result = $system->selectLastNames();
    header('Content-Type: application/json');
    echo json_encode($result);
?>