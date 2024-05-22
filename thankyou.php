<?php

require_once __DIR__ . "/partials/fuction.php";

if (!isset($_SESSION)) {
    session_start();
}

check_mail();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <div class="container">
        <h1>L'indirizzo mail è valido, lei è autorizzato</h1>
    </div>

</body>

</html>