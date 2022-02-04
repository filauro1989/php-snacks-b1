<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">   <title>php-snacks-b1</title>
</head>
<body>
    
    <div class="wrapper" id="app">

    <div v-for="(auto, index) in autoUsate" :key="index" class="car">
        <h2>
            {{auto.marca}}
        </h2>
        <h2>
            {{auto.modello}}
        </h2>
        <p>
            {{auto.immatricolazione}}
        </p>
        <p>
            {{auto.proprietari_precedenti}}
        </p>
        <p>
            {{auto.allestimento}}
        </p>
        <p>
            {{auto.cilindrata}}
        </p>
        <p>
            {{auto.cambio}}
        </p>
        <p>
            {{auto.posti_a_sedere}}
        </p>
        <p>
            {{auto.aria_condizionata}}
        </p>
        <p>
            {{auto.prezzo}}
        </p>
        <p>
            {{auto.kilometraggio}}
        </p>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>