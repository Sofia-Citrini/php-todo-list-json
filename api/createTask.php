<?php 
//controllo se text é inviato correttamente
if(empty($_POST["text"])){
    //400 bad request
    http_response_code (400);

    exit('dato non inserito');
};

//leggo i dati da toDoList.json
$toDoList = file_get_contents("../toDoList.json");

//converto in un array associativo
$toDoList = json_decode($toDoList, true);

//aggiungo il nuovo task alla mia lista
$newTask = [
    "text" => $_POST["text"],
    "done" => false,
    "id" => uniqid()
];
$toDoList[] = $newTask;

//ricodifico in jsoon
$toDoListJson = json_encode($toDoList, JSON_PRETTY_PRINT);

//salvo in toDoList.json il nuovo array
file_put_contents("../toDoList.json", $toDoListJson);

echo json_encode($newTask);