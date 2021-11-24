<?php

if (isset($_SESSION ['email'])) {

  session_start();

  echo 'Session is active.';
} else {
    echo 'marche po';
}

?>