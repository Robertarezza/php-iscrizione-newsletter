<?php

function email_valid($email) {
  return str_contains($email, ".") && str_contains($email, "@");
}

function control_email($email) {
  $result = [];
  if (empty($email)) {
    $result["success"] = false;
    $result["message"] = "Inserisci email";
  } else if (!email_valid($email)) {
    $result["success"] = false;
    $result["message"] = "Email deve contenere una @ e un punto";
  } else {
    $result["success"] = true;
    $result["message"] = "Grazie per esserti iscritto! Manderemo aggiornamenti alla tua email {$email}";
  }

  return $result;
}


// var_dump($_GET)
