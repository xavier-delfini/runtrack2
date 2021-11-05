<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="#" method="POST">
    Identifiant:<input type="text" name="username" required>
    Mot de passe:<input type="password" name="password" required>
    <button type="submit">Envoyer</button>
    <?php
    if (isset($_POST['username'])){
        if($_POST['username']== "John" && $_POST['password']== "Rambo" ){
            echo "<br>C'est pas ma guerre";
        }
        else{
            echo "<br>Votre pire cauchemar";
        }
    }

    ?>
</form>
</body>
</html>