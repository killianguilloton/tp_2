<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Effacer bière traitement</title>
</head>
<body>

<?php

include "en-tete.php";

include "../bd.php";

$idBiere = $_GET['id_biere'];

try {

    $sth = $dbh->prepare("DELETE FROM `biere` WHERE `id_biere` = :id_biere;");
    $sth->bindParam(':id_biere', $idBiere, PDO::PARAM_INT);
    $sth->execute();

    ?>

    <div>
    <?php
    if ($sth->execute()) {
        echo("succès lors de la suppression");
    } else {
        echo("petite erreur lors de la suppression");
    }
    ?>
    </div>
    <?php

} catch (\Throwable $e) {
    echo("erreur de la suppression");
}

include "../pied-page.php";

?>
    
</body>
</html>