<?php 
 
$toDoList = file_get_contents("../toDoList.json");

$toDoList = json_decode($toDoList, true);

$newTask = [
    "text" => $_POST["newTask"],
    "done" => "false"
];

$toDoList[] = $newTask;

$toDoListJson = json_encode($toDoList, JSON_PRETTY_PRINT);

file_put_contents("../toDoList.json", $toDoListJson);
echo json_encode($newTask);