<?php

require_once 'Input/InputOperations.php';
require_once 'Output/OutputOperations.php';

$Input = new InputOperations();
$connect = $Input->connectDatabase();
$url = mysqli_connect("localhost", "root", "Leo2803leo", "authors");

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['date_of_birth']) && isset($_POST['approved'])) {
    $sql = mysqli_query($url, "INSERT INTO author (id,name,date_of_birth,approved) 
VALUES ('{$_POST['id']}','{$_POST['name']}', '{$_POST['date_of_birth']}', '{$_POST['approved']}')");
    if ($result = $Input->getInfoFromTable($connect)) {
        $output = new OutputOperations();
        $output->outputValues($result);
    }
}

echo "<a href='create.php'>Добавить</a>";