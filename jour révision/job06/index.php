<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    switch($_POST['style']){
    case '1': 
        echo '<link rel="stylesheet" href="css/style1.css">';
        break;
    case '2':
        echo '<link rel="stylesheet" href="css/style2.css">';
        break;
    case '3':
        echo '<link rel="stylesheet" href="css/style3.css">';
        break;
    }
?>
    <title>Formulaire</title>
</head>
<body>
    <form action="#" method="POST">
        <select name="style">
            <option value="1">CSS1</option>
            <option value="2">Thème halloween</option>
            <option value="3">Thème gazon</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
    <?php if($_POST['style']== 2){echo "<strike>";} ?>
    Ceci est une phrase
    <?php if($_POST['style']== 2){echo "</strike><br><label>Ceci n'est pas une phrase</label>";}?>
    
</body>
</html>