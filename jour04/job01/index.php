<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php
    $i=0;
?>
    <form action="#" method="GET">
    Texte:    <input type="text" name="texte"><br>
    Date:    <input type="date" name="date"><br>
    Couleur:    <input type="color"name="couleur"><br>
        <button type="submit">Envoyer</button>
    </form>
    <?php
    foreach($_GET as $help){
$i++;
}
if  (isset($_GET)){
    echo "Il y a  actuellement ",$i, " valeurs actuellement envoyer par la méthode GET";
}
    ?>
</body>
</html>