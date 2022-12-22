<?php 

$toDoList = file_get_contents("../toDoList.json");
header("Content-Type: application/json");

echo $toDoList;