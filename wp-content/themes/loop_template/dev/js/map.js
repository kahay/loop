// var map;
// function initMap() {
//   map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: 50.018400, lng: 19.949720},
//     zoom: 15,
//     styles: [
//         {
//             "featureType": "administrative",
//             "elementType": "labels.text.fill",
//             "stylers": [
//                 {
//                     "color": "#444444"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.country",
//             "elementType": "geometry.fill",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.country",
//             "elementType": "geometry.stroke",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.province",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.province",
//             "elementType": "labels.text.fill",
//             "stylers": [
//                 {
//                     "hue": "#ff0000"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.locality",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.locality",
//             "elementType": "labels.text",
//             "stylers": [
//                 {
//                     "color": "#465064"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.locality",
//             "elementType": "labels.text.fill",
//             "stylers": [
//                 {
//                     "color": "#465064"
//                 },
//                 {
//                     "visibility": "simplified"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.locality",
//             "elementType": "labels.icon",
//             "stylers": [
//                 {
//                     "visibility": "off"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.neighborhood",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.neighborhood",
//             "elementType": "geometry.fill",
//             "stylers": [
//                 {
//                     "color": "#ff0000"
//                 }
//             ]
//         },
//         {
//             "featureType": "administrative.neighborhood",
//             "elementType": "labels.text.fill",
//             "stylers": [
//                 {
//                     "color": "#465064"
//                 }
//             ]
//         },
//         {
//             "featureType": "landscape",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "color": "#f2f2f2"
//                 },
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "landscape",
//             "elementType": "geometry",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "landscape.man_made",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "poi",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "off"
//                 }
//             ]
//         },
//         {
//             "featureType": "road",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "saturation": "-100"
//                 },
//                 {
//                     "lightness": "0"
//                 },
//                 {
//                     "visibility": "on"
//                 },
//                 {
//                     "gamma": "1.00"
//                 }
//             ]
//         },
//         {
//             "featureType": "road.highway",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "simplified"
//                 }
//             ]
//         },
//         {
//             "featureType": "road.arterial",
//             "elementType": "labels.icon",
//             "stylers": [
//                 {
//                     "visibility": "off"
//                 }
//             ]
//         },
//         {
//             "featureType": "transit",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "off"
//                 }
//             ]
//         },
//         {
//             "featureType": "transit.line",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "transit.station",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "visibility": "on"
//                 },
//                 {
//                     "hue": "#ff1a00"
//                 }
//             ]
//         },
//         {
//             "featureType": "water",
//             "elementType": "all",
//             "stylers": [
//                 {
//                     "color": "#ff3a24"
//                 },
//                 {
//                     "visibility": "on"
//                 }
//             ]
//         },
//         {
//             "featureType": "water",
//             "elementType": "labels",
//             "stylers": [
//                 {
//                     "visibility": "off"
//                 }
//             ]
//         }
//     ]
//   });




//   var contentString = '<div id="google-maps-window">'+
//   '<div id="siteNotice">'+
//   '</div>'+
//   '<h1><b>Loop</b></h1>'+
//   '<div id="bodyContent">'+
//   '<p>ul.Jana Sas-Zubrzyckiego 3/55<br>' +
//   '30-611 Kraków<br>'+
//   '<a href="tel:+792880991">tel. 792-880-991<br></a>' +
//   '(przed przyjazdem prośba o kontakt telefoniczny)</p>'+
//   '</div>'+
//   '</div>';

// var infowindow = new google.maps.InfoWindow({
// content: contentString
// });


// var image = 'dist/images/marker.svg';
// var marker = new google.maps.Marker({
// position: {lat: 50.018400, lng: 19.949720},
// map: map,
// title: 'Uluru (Ayers Rock)',
// icon: image
// });
// marker.addListener('click', function() {
// infowindow.open(map, marker);
// });


// }






var mapE = document.getElementById("mapid");
if (mapE) {

  var mymap = L.map('mapid').setView([50.01844, 19.94984], 14);


  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoia2FoYXkiLCJhIjoiY2tmcXowYXd6MDdzMjJybXpldmI1Z291byJ9.TbQqBRXXrBbdIUH1a8UI7A', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoia2FoYXkiLCJhIjoiY2tmcXowYXd6MDdzMjJybXpldmI1Z291byJ9.TbQqBRXXrBbdIUH1a8UI7A'
  }).addTo(mymap);




  var greenIcon = L.icon({
    iconUrl: 'http://pos-loop.pl/wp-content/themes/loop_template/dist/images/icons/marker.svg',
    // shadowUrl: 'leaf-shadow.png',

    iconSize: [36, 48], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    // iconAnchor: [0, 0], // point of the icon which will correspond to marker's location
    // shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-5, -14] // point from which the popup should open relative to the iconAnchor
  });

  var marker = L.marker([50.01844, 19.94984], { icon: greenIcon }).addTo(mymap);


  marker.bindPopup('<div id="maps-window">' +
    '<div id="siteNotice">' +
    '</div>' +
    '<h1><b>Loop</b></h1>' +
    '<div id="bodyContent">' +
    '<p>ul.Jana Sas-Zubrzyckiego 3/55<br>' +
    '30-611 Kraków<br>' +
    '<a href="tel:+792880991">tel. 792-880-991<br></a>' +
    '(przed przyjazdem prośba o kontakt telefoniczny)</p>' +
    '</div>' +
    '</div>').openPopup();

}