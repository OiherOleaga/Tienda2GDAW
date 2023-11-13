
let latitud = parseFloat(document.getElementById('latitud').textContent);
let longitud = parseFloat(document.getElementById('longi').textContent);
mapboxgl.accessToken = 'pk.eyJ1Ijoib2loZXJvbGVhZ2EiLCJhIjoiY2xvbXBxbXc3MnA1dzJqbjB6cG5wMmFjZiJ9.iL6T2IqDsyJzwDFxlrmoLA';

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [longitud, latitud],
    zoom: 17 // Nivel de zoom
});

new mapboxgl.Marker().setLngLat([longitud, latitud]).addTo(map);


// Función para generar coordenadas aleatorias en Vitoria-Gasteiz
function getRandomCoordinates() {
    const latitude = 42.8611 + Math.random() * 0.1;  // Latitud de Vitoria-Gasteiz
    const longitude = -2.6780 + Math.random() * 0.1;  // Longitud de Vitoria-Gasteiz
    return [longitude, latitude];
}

// Crear marcadores con coordenadas aleatorias
new mapboxgl.Marker().setLngLat(getRandomCoordinates()).addTo(map);

