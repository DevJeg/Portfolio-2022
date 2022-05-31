<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root', '');
if(!$_session['mdp']){
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<head>
    <title>Afficher les membres</title>
    <meta charset="utf-8">
</head>
<body>
<!-- Afficher tous les membres -->
    <?php   
        $recupUsers = $bdd->query('SELECT * FROM utilisateur');
        while($user = $recupUsers->fetch()){
            ?>
            <p><?= $user['pseudo']; ?><a href="bannir.php?id=<?= $user['id']; ?>">Bannir le membre</a></p>
            <?php
        }
    ?>
<!-- Fin d'afficher tous les membres -->
</body>
</html>