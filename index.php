<?php


?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

  <title>Php to do list</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
       <main class="container">
            <h1 class="text-center py-3">Todo list</h1>

            <div class="row justify-content-center">
                <div class="col-md-6 list-group list-group-flush">
                    <!-- elementi to do list -->
                    <div class="list-group-item" v-for="element in toDo">
                        <label for="" class="d-flex align-items-center justify-content-between">
                            <!-- testo -->
                            <div class="flex-fill px-3">{{element.text}}</div>
                            <!-- button: cancella task-->
                            <button class="btn btn-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </label>
                    </div>

                    <!-- campo di input testuale -->
                    <form class="input-group my-3 d-flex" @submit.prevent="submitForm">
                        <input type="text" class="form-control" placeholder="Inserisci elemento..."
                            name="newTask" v-model="newTask.text">
                        <button class="btn btn-outline-warning">
                            <i class="fa-solid fa-plus"></i>
                            Inserisci
                        </button>
                    </form>
                </div>
            </div>
       </main>
    </div>

    <script src="js/main.js"></script>
</body>

</html>