<?php
if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION["email"])) {
  header("Location: ./index.php");
  die();
}

$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h2>Grazie per esserti iscritto! Manderemo aggiornamenti alla tua email <?php echo $email; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>