<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À la recherche du Gentleman Cambrioleur</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="stylesheet" href="assets/css/Page_Etretat_css.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
    <div id="lien">
        <ul>
            <li><a href="page_creation_badge.php" title="Page précédente">Retour à la création du badge</a></li>            
        </ul>
    </div>

    <div id="Contexte">
        <h1>Début du jeu</h1>
        <?php 
            echo "<p>Bienvenue à Etretat, ".$id.".</p>";
        ?>
        <p>Étretat occupe une place centrale dans l'univers d'Arsène Lupin : Maurice Leblanc, son créateur, y a vécu 
            et a fait des fameuses falaises d'Etretat un lieu mythique connu dans le monde entier.</p>
    </div>

    <div id="Mission_1">
        <h2>A toi de jouer !</h2>
        <p>Il y a un commencement à tout ! Balade-toi à Étretat, et découvre où le premier vol d'Arsène Lupin a eu lieu !</p>
    </div>

    <div id="map"></div>

    <script src="assets/js/leaflet_lupin_js.js"></script>

</body>
</html>