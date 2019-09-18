<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
              </style>
<head><title>Lampung</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    

<body>
    <div class="header">      
        <img src="img/logo1.png" alt="" width="100" height="100">
             <h3> Sistem Informasi Geografis </h3>
    </div>
    <div class="w3-bar w3-border w3-black">
      <a href="{{url('home')}}" class="w3-bar-item w3-button w3-padding-16">Home</a>
      <a href="{{route('petakeamanan')}}"  class="w3-bar-item w3-button w3-padding-16">Lembaga Keamanan</a>
    </div>
</body>
</head>
    <body>
        <div id="map">
            
        </div>

        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script>

            var map = L.map('map', {
                zoomControl:true, maxZoom:28, minZoom:1
            }).fitBounds([[-5.9103899703,105.64729064],[-5.81273806224,105.838188038]]);
            var hash = new L.Hash(map);
            map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
            var bounds_group = new L.featureGroup([]);
            var basemap0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
                maxZoom: 28
            });
            basemap0.addTo(map);

            var desa = ('{!! $des !!}');
            //console.log(desa);
           
            var lagend = [];
            var desaa =[];
            var color =[];
            $.each(JSON.parse(desa),function desa(des_baru,i){
               // console.log(des_baru);
                var id      = (i.gid);
                var nama    = (i.desa);
                console.log(nama);
                var geomi    = (i.geo);
                var jumpendidikan = (i.jumlah_sekolah);
                var jumpengajar = (i.jumlah_pendidikan);
              
           
            function getColor(d) {
               return d > 15 ? '#800026' :
                      d > 13  ? '#BD0026' :
                      d > 10  ? '#E31A1C' :
                      d > 8  ? '#FC4E2A' :
                      d > 5   ? '#FD8D3C' :
                      d > 3   ? '#FEB24C' :
                      d > 1   ? '#FED976' :
                                 '#FFEDA0';
                };
                    
            function style(nama) {
                return {
                    fillColor:getColor([jumpendidikan]),
                    weight: 2,
                    opacity: 1,
                    color: 'white',
                    dashArray: '3',
                    fillOpacity: 0.7
                };
            }

                  var geom= new L.geoJson(geomi, {
                    attribution: '<a href=""></a>',
                    style: style,
                    onEachFeature: des,
                }).addTo(map);
                            
            function des(feature, layer) {
                layer.on({
                    mouseout: function(e) {
                        for (i in e.target._eventParents) {
                            e.target._eventParents[i].resetStyle(e.target);
                        }
                    },
                 
                });
                    var popupContent = '<table> <id="table_wil" <tbody><tr><th scope="row">No:</th><td>'+ ([id] ) + '</td></tr><tr><th scope="row">Desa:</th><td>'+ ([nama]) + '</td></tr><tr><th scope="row">Jumlah Sekolah:</th><td>'+ ([jumpendidikan]) + '</td></tr><tr><th scope="row">Jumlah Pengajar:</th><td>'+ ([jumpengajar]) + '</td></tr><tr><th scope="row">Detail:</th><td><a  class="btnclick" href="/detailpendidikan/'+([nama])+'" l="'+ ([nama]) + '">Detail</a></td></tr></tbody></table>';
                    layer.bindPopup(popupContent, {maxHeight: 400});
            }
               

         
            lagend.push(geom);
            color.push(getColor);

           
        });  


            console.log(lagend);
             var legend = L.control({position: 'topright'});
                legend.onAdd = function (map) {
                    var div = L.DomUtil.create('div', 'info legend'),
                              grades = [0, 1, 3, 5, 8, 10, 13, 15 ],
                              labels = [],
                              from, to;
                 
                    for (var i = 0; i < grades.length; i++) {
                              from = grades[i];
                              to = grades[i + 1];
                 
                    labels.push(
                              '<i style="background:' + color[1](from + 1) + '"></i> ' +
                              from + (to ? '&ndash;' + to : '+'));
                    }
                 
                    div.innerHTML = labels.join('<br>');
                    return div;
                };
                             
                legend.addTo(map);

          var baseMaps = {};
         L.control.layers(baseMaps,{'Bakauheni': lagend[0],'Kalawi' : lagend[1],'Totoharjo' : lagend[2],'Hata' : lagend[3],'Semanak':lagend[4]}).addTo(map); 


        </script>
    </body>
</html>

