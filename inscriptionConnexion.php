<?php  

if (isset($_SESSION['email']) ) {
    header('Location: http://localhost/concours-chants-projet-commun/compte-utilisateur.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription/Connexion</title>
    <link rel="stylesheet" href="./style/form.css">
      
</head>
<body>
    <?php include './template/header.php'; ?>

<div class="imageLogin">
        <img src="./media/audio.jpg" alt="micro" class="bglogin"> 

</div>
<?php include './template/formulaires.php' ;
        include './template/footer.php'; ?>

 
<script src="test.js"></script>
</body>
</html>