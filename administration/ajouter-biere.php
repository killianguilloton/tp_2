<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Ajouter bière</title>
</head>
<body>

<?php

include "en-tete.php";
include "../bd.php";

?>

    <section>
        <h2>Ajouter une bière</h2>
        <form action="modifier-biere-traitement.php" method="post">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom"/>
            </div>
            <div>
                <label for="micro-brasserie">Micro-brasserie :</label>
                <textarea name="micro-brasserie" id="micro-brasserie"></textarea>
            </div>
            <div>
                <label for="type-de-biere">type de biere :</label>
                <input type="text" name="type-de-biere" id="type-de-biere"/>
            </div>
            <div>
                <label for="degres_alcool">Degres d'alcool:</label>
                <input type="text" name="degres_alcool" id="degres_alcool"/>
            </div>
            <div>
                <label for="description">Description :</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div>
                <label for="image">Image :</label>
                <input type="text" name="image" id="image"/>
            </div>
            <div>
                <label for="type_contenant">Type contenant :</label>
                <input type="text" name="type_contenant" id="type_contenant"/>
            </div>
            <input type="submit" value="Modifier le film">
            <input type="hidden" name="id_biere" value="<?=$_GET['id_biere']?>">                
        </form>
    </section>

<?php

include "../pied-page.php";

?>
    
</body>
</html>