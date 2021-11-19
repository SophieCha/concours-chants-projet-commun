<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription au site.</title>
</head>
<body>
<div class="flex">
    <div class="form1">
        <center><p>Je n'ai pas de compte:</p></center>
<form action="nouveaucompte.php" method="post">
    <table>
        <tr> 
            <td>
                <label>Nom : </label> </td> <td><input type="text" name="nom" class="form" placeholder="Guyart" required="required" maxlength="30">
            </td>
        </tr>
        <tr>
            <td> 
                <label>Prénom : </label>
            </td> 
            <td>
        <input type="text" name="prenom" class="form" placeholder="Fabrice" required="required" maxlength="20"> 
            </td>
        </tr>
        <tr>
            <td>
                <label>E-mail :</label>
            </td>
            <td>
                <input type="text" name="email" required="required" placeholder="xyz@cc.io" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            </td>
        </tr>
        <tr>
            <td>
                <label>Date de Naissance :</label>
            </td>
            <td> 
                <input type="date" name="dateNaissance" min="1920-01-01" max="2020-01-01" class="form" required="required">
            </td> 
        </tr>
        <tr>
            <td>
                <label>N° de Téléphone :</label>
            </td>
            <td>
                <input type="text" name="tel" required="required" placeholder="06..." maxlength="14">
            </td>
            </tr>
            <tr>    
            <td> 
                <label>Mot de passe: </label>
            </td>
            <td>
                <input type="password" name="password1" required="required"> 
            </td>
        </tr>
        <tr>
            <td>
                <label>Confirmez le mdp : </label>
            </td>
            <td>
                <input type="password" name="password2" required="required">
            </td>
        </tr>
    </table>
    <br>
        <center><button type="submit">Je m'inscris!</button></center>
    </form>
</div>
<div class="form2">
<center><p>J'ai déjà un compte.</p></center>
    <form action="login.php" method="post">
        <table>
            <tr>
        <td><label>E-Mail :</label></td> <td><input type="text" name="emailV"></td>
        </tr>
        <td><label>Mot de passe</label></td> <td><input type="password" name="mdpV"></td>
        </table>
        <br>
       <center> <button type="submit">Je me connecte.</button> </center>
    </form>
</div>
</div>
    <?php ?>
</body>
</html>