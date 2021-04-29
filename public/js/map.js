let mymap
window.onload = () => {
    mymap = L.map("detailsMap").setView([48.852969, 2.349903], 11)
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(mymap)
    mymap.on("click", mapClickListen)
}
function mapclickListen(e) {
    let pos = e.latlng

    document.querySelector("#lat").value = pos.lat
    document.querySelector("#lon").value = pos.lon
}

// function addMarker(pos) {
//     if(pin != undefined) {
//         mymap.removeLayer(pin)
//     }
//     pin = L.marker(pos, {
//         pin.on("dragend", function(e){
//             pos = e.target.getLatLng()
//             document.querySelector("#lat").value = pos.lat
//             document.querySelector("#lon").value = pos.lng
//         })
//         pin.addTo(mymap)
//     }
// }