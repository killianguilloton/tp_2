<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Modifier bière traitement</title>
</head>
<body>

<?php

include "en-tete.php";
include "../bd.php";

try {
    $sth = $dbh->prepare("UPDATE `biere_1932675` SET `nom`=:nom,`nom_micro-brasserie`=:nom_micro_brasserie,`type_biere`=:type_biere,`degres_alcool`=:degres_alcool,`description`=:description,`image`=:image,`type_contenant`=:type_contenant WHERE id_biere = :id_biere;");

    $sth->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $sth->bindParam(':nom_micro_brasserie', $_POST['nom_micro-brasserie'], PDO::PARAM_STR);
    $sth->bindParam(':type_biere', $_POST['type_biere'], PDO::PARAM_STR);
    $sth->bindParam(':degres_alcool', $_POST['degres_alcool'], PDO::PARAM_INT);
    $sth->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
    $sth->bindParam(':image', $_POST['image'], PDO::PARAM_STR);
    $sth->bindParam(':type_contenant', $_POST['type_contenant'], PDO::PARAM_STR);
    $sth->bindParam(':id_biere', $_POST['id_biere'], PDO::PARAM_INT);

?>
    <div>

        <?php
        if ($sth->execute()) {
            echo("Succès lors de la modification de la bière.");
        } else {
            echo("petite erreur lors de la modification de la bière.");
        }
        ?>

    </div>

<?php

} catch (\Throwable $e) {
    echo("erreur lors de la modification de la bière");
    echo($e->getMessage());
}

include "../pied-page.php";

?>
    
</body>
</html>