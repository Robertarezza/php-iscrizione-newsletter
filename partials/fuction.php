<?php


function check_mail() {
    if (!isset($_SESSION["ok"]) || $_SESSION["ok"] !== true) {
        header("Location: ./index.php");
        die();
      }
    }

function valid_mail() {
    if (isset($_GET["mail"])) {
        //var_dump($_GET["mail"]);
        $mail = $_GET["mail"];
        //var_dump($mail);

        // strpos controlla se quel valore è presente nella stringa
        if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
            //stampa messaggio mail valida 
            $_SESSION["ok"] = true;
            header('Location: ./thankyou.php');
        } else {
            //stampa messaggio mail NON valido
            echo ' <div class="alert alert-danger" style="width: 50%;
            margin: 0 auto;">
                        Indirizzo mail NON valido
                    </div>';
        }
    }
}



// var_dump($_GET)
?>


