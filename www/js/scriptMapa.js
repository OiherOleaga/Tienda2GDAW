/* This code is using the Mapbox API to create a map and display a marker at a specific latitude and
longitude. */

let latitud = parseFloat(document.getElementById('latitud').textContent);
let longitud = parseFloat(document.getElementById('longi').textContent);
mapboxgl.accessToken = 'pk.eyJ1Ijoib2loZXJvbGVhZ2EiLCJhIjoiY2xvbXBxbXc3MnA1dzJqbjB6cG5wMmFjZiJ9.iL6T2IqDsyJzwDFxlrmoLA';

const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [longitud, latitud],
    zoom: 10 // Nivel de zoom
});

new mapboxgl.Marker().setLngLat([longitud, latitud]).addTo(map);