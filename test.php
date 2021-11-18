<?php 
    session_start();

    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
    }

    if(isset($_GET['deco']))
    {
        session_destroy();
        header("LOCATION:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Administration</h1>
    <div>
        <a href="test.php?deco=ok">Déconnexion</a>
    </div>
    <?php 
        echo "Bonjour ".$_SESSION['login'];
    
    ?>
</body>
</html>