var map = L.map('map').setView([49.7072, 0.2045], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var rayonNormal = 9;
var rayonSurvol = 15;

var marqueurEtretat = L.circleMarker([49.706313, 0.206913], {
    radius: rayonNormal,
    color: '#D4AF37',
    weight: 2,
    fillColor: '#991B1B',
    fillOpacity: 0.9
});

marqueurEtretat.bindPopup(
    "<b>Maison Maurice Leblanc</b><br>" +
    "Bravo ! Tu as trouvé le lieu du tout premier vol d'Arsène Lupin ! Tu gagnes un indice pour la prochaine étape!<br>" +
    "Cet endroit devenu célèbre hébèrge aujourd'hui le musée Arsène Lupin.<br>" +
    "Rends-toi désormais au prochain lieu !"
);

// Affiche le marqueur uniquement au niveau de zoom maximal
map.on('zoomend', function () {
    if (map.getZoom() >= map.getMaxZoom()) {
        if (!map.hasLayer(marqueurEtretat)) {
            marqueurEtretat.addTo(map);
        }
    } else {
        marqueurEtretat.closePopup();
        if (map.hasLayer(marqueurEtretat)) {
            map.removeLayer(marqueurEtretat);
        }
    }
});

// Grossit le rond quand le curseur passe dessus
marqueurEtretat.on('mouseover', function () {
    this.setRadius(rayonSurvol);
});

// Remet la taille normale quand le curseur quitte le rond
marqueurEtretat.on('mouseout', function () {
    this.setRadius(rayonNormal);
});