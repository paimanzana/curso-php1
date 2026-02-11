<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
                
// Iniciamos una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL); 
//Queremos recibir el resultado de la petición y no mostrarla en la pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutar la petición y guardar resultado

$result = curl_exec($ch);
$data = json_decode($result, true);

//var_dump($data);


    /* <pre style="font-size: 17px; overflow: scroll; height: 460px;"> 
        <?php var_dump($data); ?>
    </pre> */    //BORRAR SI ES NECESARIO SOLO MUESTRA TODOS LOS DATOS 
                 // SIN FILTRAR , SIN ORDENAR
                
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <title>LA PROXIMA PELICULA DE MARVEL</title>
</head>



<main>

    <section>
        <img src=" <?= $data["poster_url"]; ?>" width="350" alt="Poster de <?= $data["title"]; ?>"
        style = "border-radius: 16px"
        />
    </section>

<hgroup>
<h3> <?= $data["title"]; ?> se estrena dentro de <?=  $data["days_until"] ?> dias   </h3>
<p> Fecha de estreno: <?= $data["release_date"];  ?> </p>
<p> La siguiente pelicula es : <?= $data["following_production"]["title"] ?> </p>

</main>

</body>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }


    section {
        display: flex;
        place-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }

</style>