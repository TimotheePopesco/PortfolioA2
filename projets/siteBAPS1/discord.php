<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Discord</title>
</head>
<body class="contbody">
    <header class="contretour">
        <button onclick="window.location.href='index.php'"><img src="img/retour.png" alt="Return"></button>
    </header>
    <?php echo      
            " <section class='contus'>
                <form class='contform' method='post'>
                    <div>
                    <button class='contformimg'> <img src='img/footdiscord.png' alt='Discord'></button>
                    </div>
                    <div>
                        <p>Renseignez votre nom d'utilisateur discord</p>
                    </div>
                    <div>
                        <input type='text' name='pseudo2'>
                    </div>
                            
                    <input class='send' type='submit' value='Envoyer' >
                    </form>
                    <div class='contdecor'>
                        <img src='img/foottel.png' alt='Telephone'>
                        <p>Studio Edoras © 2020-2024 - Tous droits réservés</p>
                    </div>
                </section>";
            ?>


<?php
    // connexion a la base de donnée 
    $pdo = new PDO ('mysql:host=localhost;dbname=bap20', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    // Je verifie :
    // var_dump($pdo);

    // Si validation du formulaire :
    if($_POST) {

        // Je gere les apostrophe pour ne que la chaine de caractere ne se referme pas:
        $_POST['pseudo2'] = addslashes($_POST['pseudo2']);
        // J'envoie les infos du formulaire dans la base :
        $pdo->exec("INSERT INTO contact02 (discord) VALUES ('$_POST[pseudo2]')");
        echo "<p class='msgmerci'>Merci, nous vous contacterons très vite.</p>";
    }
?>

</body>
</html>