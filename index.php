<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi Milestone 2</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main id="app">
             <div class="disco" @change="fetchData()" v-for="disco in listaDischi">
                 <img :src="disco.image" height="300px">
                 <h3>{{disco.title}}</h3>
                 <p>{{disco.author}}</p>
                 <p>{{disco.year}}</p>
             </div>
     </main>

    <script src="myScript2.js"></script>
</body>
</html>