<?php
    require_once('../inc/mainClass.php');
    $result = $system->selectAges();
    header('Content-Type: application/json');
    echo json_encode($result);
?>