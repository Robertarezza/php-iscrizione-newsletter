<?php


if (isset($_GET["mail"])) {
    //var_dump($_GET["mail"]);

    $mail = $_GET["mail"];
    //var_dump($mail);

    // strpos controlla se quel valore è presente nella stringa
    if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
        $correction = "indirizzo mail valido";
    } else {
       $error = "indirizzo mail non valido";
    }
}

// var_dump($_GET)
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
        <div class="row">
            <div class="col-7">

            <!-- stampa messaggio mail valida -->
                <?php if (isset($correction)) { ?>
                    <div class="alert alert-primary">
                        <?php echo $correction; ?>
                    </div>

                    <!-- stampa messaggio mail NON valido -->
                <?php } elseif (isset($error)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>
              
                <!-- form -->
                <form action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="mail" class="form-label">Inserisci indirizzo email</label>
                        <input type="text" class="form-control" id="mail" aria-describedby="email" name="mail">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>

    </div>


</body>

</html>