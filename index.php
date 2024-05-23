<?php

require_once __DIR__ . "/partials/fuction.php";



if (!isset($_SESSION)) {
  session_start();
}

// Controlliamo se il submit è stato fatto
// Se l'utente non ha fatto ancora submit, allora non ci sarà chiave email nel $_POST
//var_dump($_POST);
$result;
if (isset($_POST["email"])) {
  // Dobbiamo elaborare l'input
  // Se l'utente aveva cliccato sul submit ma con input vuoto, lachiave email ci sarà, ma avrà il valore della stringa vuota
  $user_email = $_POST["email"];
  $result = control_email($user_email);

  // Nel caso di successo salvo email nella session e reindirizzo l'utente alla pagina thank you
  if ($result["success"]) {
    $_SESSION["email"] = $user_email;
    header("Location: ./thankyou.php");
    die();
  }
}

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
            <?php if (isset($result)) { ?>
              <div class="alert <?php echo $result["success"] ? 'alert-success' : 'alert-danger'; ?>">
                <?php echo $result["message"]; ?>
              </div>
            <?php } ?>


                <!-- form -->
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci indirizzo email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="email" name="email" value="<?php echo isset($result) && !$result["success"] ? $user_email : ""; ?>">
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
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