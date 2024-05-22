<?php

include_once __DIR__ . "/partials/fuction.php";

if (!isset($_SESSION)) {
    session_start();
}

valid_mail();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> PHP Iscrizione Newsletter</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-7">

                <!-- form -->
                <form action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="mail" class="form-label">Inserisci indirizzo email</label>
                        <input type="text" class="form-control" id="mail" aria-describedby="email" name="mail" value="<?php
                         if (isset($_GET['mail'])) { 
                            echo $_GET['mail'];
                            
                         } else {
                             echo ''; 
                        } ?>">
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>

    </div>


</body>

</html>




 <!-- Quando la pagina viene caricata, lo script PHP verifica se il parametro mail è presente nella query string usando isset($_GET['mail']).
                        Se mail è presente, il valore viene visualizzato nel campo di input.
                        Se mail non è presente, il campo di input rimane vuoto.
                     value="<?php echo isset($_GET['mail']) ? $_GET['mail'] : ''; ?>" -->