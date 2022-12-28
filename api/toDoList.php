<?php 

//leggo i dati da toDoList.json 
/**
 * @var string
 */
$toDoList = file_get_contents("../toDoList.json");

//specifico che le informazioni restituite sono di tipo json
header("Content-Type: application/json");

//stampo la striga json
echo $toDoList;