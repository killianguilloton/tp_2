<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Modifier bière</title>
</head>
<body>

<?php

include "en-tete.php";
include "../bd.php";

?>

<section class="center">
        <h2>Modifier une bière</h2>
        <form action="modifier-biere-traitement.php" method="post">
            <div class="space-top">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom"/>
            </div>
            <div class="space-top">
                <label for="nom_micro-brasserie">Micro-brasserie :</label>
                <textarea name="nom_micro-brasserie" id="nom_micro-brasserie"></textarea>
            </div>
            <div class="space-top">
                <label for="type_biere">type de biere :</label>
                <input type="text" name="type_biere" id="type_biere"/>
            </div>
            <div class="space-top">
                <label for="degres_alcool">Degres d'alcool:</label>
                <input type="text" name="degres_alcool" id="degres_alcool"/>
            </div>
            <div class="space-top">
                <label for="description">Description :</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div class="space-top">
                <label for="image">Image :</label>
                <input type="text" name="image" id="image"/>
            </div>
            <div class="space-top">
                <label for="type_contenant">Type contenant :</label>
                <input type="text" name="type_contenant" id="type_contenant"/>
            </div>
            <input type="submit" value="Modifier la bière" class="space-top">
            <input type="hidden" name="id_biere" value="<?=$_GET['id_biere']?>">                
        </form>
    </section>

<?php

include "../pied-page.php";

?>
    
</body>
</html>