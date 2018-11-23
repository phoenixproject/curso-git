<!DOCTYPE html>
<html>
<head>
    <title>Simple Leaflet Map</title>
    <meta charset="utf-8" />
    <link 
        rel="stylesheet" 
        href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css"
    />
</head>
<body>
    <!-- Tamanho do mapa -->
    <div id="map" style="width: 800px; height: 600px"></div>

    <script
        src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js">
    </script>

    <script>
        //Define o ponto inicial do mapa
        var map = L.map('map').setView([-41.2858, 174.78682], 14);
        
        //Pega a base cartográfica
        mapLink = 
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    
        //L.tileLayer é uma função usada para carregar e exibir 
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; ' + mapLink,
            maxZoom: 18,
            }).addTo(map);
    </script>
</body>
</html>