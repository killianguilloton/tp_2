<?php

include "bd.php";

    $idBiere = $_GET['id_biere'];

    $sth = $dbh->prepare("SELECT `nom`, `id_biere`, `nom_micro-brasserie`, `type_biere`, `description`, `degres_alcool`, `image` from `biere_1932675` WHERE id_biere = :id_biere");
    $sth->bindParam(':id_biere', $idBiere, PDO::PARAM_INT);
    $sth->execute();
    $biere = $sth->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>detail bière</title>
</head>
<body>

<?php

include "en-tete.php";

include "bd.php";
?>

<div>
    <img src="imgs/<?=$biere['image']?>" alt="image bière">
    <h4><?=$biere['nom']?></h4>
    <p><?=$biere['nom_micro-brasserie']?></p>
    <p><?=$biere['type_biere']?></p>
    <p><?=$biere['degres_alcool']?></p>
    <p><?=$biere['description']?></p>
</div>

<div>
		<a href="administration/effacer-biere-traitement.php?id_biere=<?=$biere['id_biere']?>">Supprimer cette bière</a> 
		<a href="administration/modifier-biere.php?id_biere=<?=$biere['id_biere']?>">Modifier cette bière</a> 
	
</div>




<?php

include "pied-page.php";

?>
    
</body>
</html>