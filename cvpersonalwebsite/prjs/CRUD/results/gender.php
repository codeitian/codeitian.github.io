<?php
    require_once('../inc/mainClass.php');
    $result = $system->selectGenders();
    header('Content-Type: application/json');
    echo json_encode($result);
?>