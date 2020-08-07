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