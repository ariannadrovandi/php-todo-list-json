<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>todo list</title>
</head>
<body>
    <div id="app">
        <h1>{{title}}</h1>
        <ul>
            <li v-for="(todo, index) in todoList" :key="index">{{todo}}</li>
        </ul>

        <section>
            <div class="container">
                <div class="input-group">
                    <input type="text" @keyup.enter="updateList" v-model="newTodo" class="form-control" placeholder="Inserisci elemento ...">
                    <button @click="updateList" class="btn btn-outline-primary" type="button" id="button-add">Inserisci</button>
                </div>
            </div>
        </section>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>