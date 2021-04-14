<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Ajouter bière traitement</title>
</head>
<body>

<?php

include "en-tete.php";
include "../bd.php";


try {
    $sth = $dbh->prepare("INSERT INTO `biere_1932675`(`nom`, `nom_micro-brasserie`, `type_biere`, `degres_alcool`, `description`, `image`, `type_contenant`) VALUES ([:nom],[:nom_micro-brasserie],[:type_biere],[:degres_alcool],[:description],[:image],[:type_contenant])");

    $sth->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $sth->bindParam(':nom_micro-brasserie', $_POST['nom_micro-brasserie'], PDO::PARAM_STR);
    $sth->bindParam(':type_biere', $_POST['type_biere'], PDO::PARAM_STR);
    $sth->bindParam(':degres_alcool', $_POST['degres_alcool'], PDO::PARAM_STR);
    $sth->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
    $sth->bindParam(':image', $_POST['image'], PDO::PARAM_STR);
    $sth->bindParam(':type_contenant', $_POST['type_contenant'], PDO::PARAM_STR);
    $sth->bindParam(':id_biere', $_POST['id_biere'], PDO::PARAM_INT);

?>

<div class="centrer centrer-text">

    <?php
        if ($sth->execute()) {
            echo("Succès lors de la modification de la bière.");
        } else {
            echo("Erreur lors de la modification de la bière.");
        }
    ?>

</div>

<?php

} catch (\Throwable $th) {
    echo("erreur lors de la modification de la bière");
}

include "../pied-page.php";

?>
    
</body>
</html>