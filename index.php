<?php

// $url = "https://whenisthenextmcufilm.com/api";

// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $result = curl_exec($ch);

// if ($e = curl_errno($ch)) {
//   echo "error";
//   echo $e;
// } else {
//   $data = json_decode($result);
//   var_dump($data);
// }

// curl_close($ch);

const API_URL = "https://whenisthenextmcufilm.com/api";
// // const API_URL = "https://jsonplaceholder.typicode.com/users";

// # Iniciar una nueva sesión cURL
$ch = curl_init(API_URL);

// # Indicar que queremos recibir el resultado de la perticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// # Ejecutar la peticion y guardarla en una variable
$result = curl_exec($ch);

// # parsear el resultado de la peticion
$data = json_decode($result, true);

// # Cerrar la sesión cURL para liberar recursos

// if (!curl_errno($ch)) {
//   switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
//     case 200:  # OK
//       break;
//     default:
//       echo 'Unexpected HTTP code: ', $http_code, "\n";
//   }
// }

curl_close($ch);

// $result = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// $data = json_decode($result);

// var_dump($data);


?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="/public/marvel.ico" type="image/x-icon">
  <title>Next Marvel Movie</title>
</head>

<body>
  <div class="container">
    <!-- <pre>
      <?php
      var_dump($data);
      ?>
    </pre> -->
    <img src="./public/marvel.jpg" alt="logo" width="100" height="auto">
    <h2>Next Marvel Movie</h2>
    <img src="<?= $data["poster_url"]; ?>" alt=<?= $data["title"] ?> width="150">
    <h1><?= $data["title"]; ?></h1>
    <p><?= $data["overview"]  ?></p>
    <p><?= "release date: " . $data["release_date"]; ?></p>
    <p><?= "type: " . $data["type"]; ?></p>
    <span></span>
    <p>next production</p>
    <h1><?= $data["following_production"]["title"] ?></h1>
    <p><?= "release date: " . $data["following_production"]["release_date"]; ?></p>

    <!-- <img src="<?php echo $data->poster_url; ?>" alt="movie poster" width="200"> -->
    <!-- <h1><?php echo $data->title; ?></h1> -->
    <!-- <p><?php echo "release date: $data->release_date"; ?></p> -->
    <!-- <p><?php echo "type:  $data->type"; ?></p> -->
  </div>

</body>