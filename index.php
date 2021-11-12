<?php
    session_start();
    $login="Jordan";
    $password="epse";


    if(isset($_POST['login']))
    {
        if(empty($_POST['login']) OR empty($_POST['password']))
        {
            $error="Veuillez remplir le formulaire";
        }else{
            $postLogin = htmlspecialchars($_POST['login']);
            if($login == $postLogin)
            {
                if($password==$_POST['password'])
                {
                    $_SESSION['login']=$login;
                    header("LOCATION:test.php");
                }else{
                    $error="Votre mot de passe n'est pas correct";
                }
            }else{
                $error="Votre login n'est pas connu";
            }
        }
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
    <div id="form">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="login">Login: </label>
                <input type="text" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe: </label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="submit" value="Connexion">
            </div>
        </form>
        <?php
            if(isset($error))
            {
                echo "<div class='error'>".$error."</div>";
            }
        ?>
    </div>
    
</body>
</html>