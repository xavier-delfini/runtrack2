<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="#" method="GET">
    Nombre:<input type="number" name="nombre">
    <button type="submit">Envoyer</button>
    </form>
    <?php
    if (isset($_GET['nombre']) ){
        if($_GET['nombre'] %2 ==0 ){
            echo "Nombre pair";
        }
        else
            echo "Nombre Impair";
    }
        ?>
</body>
</html>