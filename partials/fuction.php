<?php

function valid_mail()
{
    if (isset($_GET["mail"])) {
        //var_dump($_GET["mail"]);
        $mail = $_GET["mail"];
        //var_dump($mail);

        // strpos controlla se quel valore è presente nella stringa
        if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
            //stampa messaggio mail valida 
            echo  '<div class="alert alert-success" style="width: 50%;
            margin: 0 auto;">
                Indirizzo mail valido
            </div>';
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


