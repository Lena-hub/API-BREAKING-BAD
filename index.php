<?php

require __DIR__ . '/vendor/autoload.php';
use App\Api;

$api = new Api();

$characters = $api->getDataFrom("https://www.breakingbadapi.com/api/characters");

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo API</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

    <h1 id="BreakingBad">
      <span id="Br">Br</span><br><span id="eaking">eaking</span><br>
      <span id="Ba">Ba</span> <span id="d">d</span>
    <h1>

  <?php foreach($characters as $character) :?>
        <li><?= $character['name'] ?> </li>
        <?php endforeach; ?>



  </body>

</html>