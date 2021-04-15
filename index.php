<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Bière</title>
</head>
<body>

<?php

include "en-tete.php";

include "bd.php";

    $sth = $dbh->prepare("SELECT `id_biere`, `nom`, `nom_micro-brasserie`, `type_biere`, `image` from `biere_1932675`;");
	$sth->execute();
    $bieres = $sth->fetchAll();

    foreach($bieres as $biere) {

?>

<main class="columns">

        <div class="presentation">
        <img src="imgs/<?=$biere['image']?>" alt="image bière" class="fluide">
			<h4>
			<a href="detail-biere.php?id_biere=<?=$biere['id_biere']?>" title=""><?=$biere['nom']?></a>
			</h4>
            <a>micro-brasserie :</a>
			<p><?=$biere['nom_micro-brasserie']?></p>
            <a>type :</a>
			<p><?=$biere['type_biere']?></p>
		</div>
    
</main>
<?php

}

include "pied-page.php";

?>
    
</body>
</html>