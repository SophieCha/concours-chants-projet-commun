<?php
  session_start();


if (session_status() === 2) {
      echo 'YESSAILLZZLZ';
} else {
echo "Session is active. Your mail is $mail";
}

?>