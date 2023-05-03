<?php
// Imposto le variabili dai valori della queryString
$badWord = trim($_GET["badworld"]);
$paragraph = trim($_GET["paragraph"]);
//Uso str_replace per rimpiazzare la badWorld nel paragrafo
if (isset($paragraph) and empty($paragraph)) { //Se la variabile esiste ma è vuota
    $censuredParagraph = "Non hai inserito nulla nel paragrafo"; //Dichiaralo
} elseif (isset($badWord) and empty($badWord)) {
    $censuredParagraph = "Non hai inserito una parola da censurare";

} else {
    $censuredParagraph = str_replace($badWord, '<span class="fw-bold">***</span>', $paragraph); //Sostituisci la parola nel paragrafo 
}

if (str_contains($paragraph, $badWord)) { //Gestisci il titolo della pagina
    $title = "Parola censurata!";
} else {
    $title = "Nessuna parola da censurare";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title> <?php echo $title ?> </title>
  </head>
  <body>
    <main>
      <div class="container-fluid d-flex justify-content-center">
        <div class="card" style="width: 45rem;">
          <img class="img-fluid" src="https://sp.rmbl.ws/s8/6/E/L/a/u/ELaua.qR4e.2.jpg" class="card-img-top" alt="censored">
          <div class="card-body">
            <h3 class="card-title m-0 text-center"> <?php echo $title ?> </h3>
            <p class="fs-4 p-4 m-0 card-text text-center"> <?php echo $censuredParagraph ?> </p>
            <div class="go-back text-center">
              <a href="index.php">
                <button type="submit" class="w-50 btn btn-primary">Torna indietro</button>
              </a>
            </div>
          </div>
        </div>
    </main>
  </body>
</html>