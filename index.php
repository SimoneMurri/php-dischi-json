<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App Dischi</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <header class="container"></header>
    <div id="app">
    <main>
        <div v-for="(element, index) in albumList" :key="index" class="album">
        <img :src="element.cover" alt="..." class="img-cover">
            <h4>{{ element.title }}</h4>
            <p>{{ element.artist }} </p>
            <p><strong>{{ element.releaseYear }}</strong></p>
        </div>
        </div>
    </main>
    <script src="./js/script.js"></script>
</body>
</html>