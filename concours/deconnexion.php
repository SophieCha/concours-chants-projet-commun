<?php 

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalement, on détruit la session.
session_destroy();

echo "Vous êtes déconnecté. A plus dans le bus. </br>";
echo "<a href='/\localhost/concours/signin.php'><button>Je retourne à la page d'inscription.</button></a>";


?>