<?php>
    header('Content-Type: application/json; charset=utf-8');
    $data = json_decode(file_get_contents("php://input"));
    die(json_decode(array('code' =>'0')));
?>