<?php

if(empty($_POST["taskId"])){
    //400 bad request
    http_response_code (400);

    exit('manca id');
};

$toDoList = file_get_contents("../toDoList.json");
$toDoList = json_decode($toDoList, true);

$indice;

foreach ($toDoList as $task) {
    if ($task['id'] === $_POST['taskId']) {
        $indice = $i;
    }
}

//cancello l'elemeto
array_splice($toDoList, $indice, 1);

$jsonString = json_encode($toDoList, JSON_PRETTY_PRINT);

file_put_contents("../toDoList.json", $jsonString);
