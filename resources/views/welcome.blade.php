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
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>


    <html>
<head>
     <title>LAMPUNG</title>
    <link rel="stylesheet" href="css/navbar.css">
    </head>
<body>
    <div class="nav">
    <ul>
<li><a href="#">Beranda</a></li>
<li><a href="#">Daftar Desa</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Hubungi Kami</a></li>
</ul>
</div>
</body>
</html>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/INDONESIA_PROP_0.js"></script>
        <script src="data/INDONESIA_KABcopy_1.js"></script>
        <script src="data/Indo_Desa_region_2.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-5.84977175456,100.039194863],[-1.59940234188,107.482149446]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
        var measureControl = new L.Control.Measure({
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        var bounds_group = new L.featureGroup([]);
        var basemap0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 28
        });
        basemap0.addTo(map);
        function setBounds() {
        }
        function pop_INDONESIA_PROP_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td><a href="' + (feature.properties['LINK'] !== null ? Autolinker.link(String(feature.properties['LINK'])) : '') + '"">' + (feature.properties['LINK'] !== null ? Autolinker.link(String(feature.properties['LINK'])) : '') + '</a></td>\
                    </tr>\
                    <tr>\
                        <th scope="row">ID</th>\
                        <td>' + (feature.properties['ID'] !== null ? Autolinker.link(String(feature.properties['ID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kode</th>\
                        <td>' + (feature.properties['kode'] !== null ? Autolinker.link(String(feature.properties['kode'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Propinsi</th>\
                        <td>' + (feature.properties['Propinsi'] !== null ? Autolinker.link(String(feature.properties['Propinsi'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SUMBER</th>\
                        <td>' + (feature.properties['SUMBER'] !== null ? Autolinker.link(String(feature.properties['SUMBER'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_INDONESIA_PROP_0_0() {
            return {
                pane: 'pane_INDONESIA_PROP_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(80,83,228,1.0)',
            }
        }
        map.createPane('pane_INDONESIA_PROP_0');
        map.getPane('pane_INDONESIA_PROP_0').style.zIndex = 400;
        map.getPane('pane_INDONESIA_PROP_0').style['mix-blend-mode'] = 'normal';
        var layer_INDONESIA_PROP_0 = new L.geoJson(json_INDONESIA_PROP_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_INDONESIA_PROP_0',
            onEachFeature: pop_INDONESIA_PROP_0,
            style: style_INDONESIA_PROP_0_0,
        });
        bounds_group.addLayer(layer_INDONESIA_PROP_0);
        map.addLayer(layer_INDONESIA_PROP_0);
        function pop_INDONESIA_KABcopy_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ID'] !== null ? Autolinker.link(String(feature.properties['ID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kabupaten_</th>\
                        <td>' + (feature.properties['Kabupaten_'] !== null ? Autolinker.link(String(feature.properties['Kabupaten_'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kode</th>\
                        <td>' + (feature.properties['kode'] !== null ? Autolinker.link(String(feature.properties['kode'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Ibukota</th>\
                        <td>' + (feature.properties['Ibukota'] !== null ? Autolinker.link(String(feature.properties['Ibukota'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Dsr_Hukum</th>\
                        <td>' + (feature.properties['Dsr_Hukum'] !== null ? Autolinker.link(String(feature.properties['Dsr_Hukum'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Provinsi</th>\
                        <td>' + (feature.properties['Provinsi'] !== null ? Autolinker.link(String(feature.properties['Provinsi'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Bupati_Wal</th>\
                        <td>' + (feature.properties['Bupati_Wal'] !== null ? Autolinker.link(String(feature.properties['Bupati_Wal'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Wakil</th>\
                        <td>' + (feature.properties['Wakil'] !== null ? Autolinker.link(String(feature.properties['Wakil'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Batas_Utar</th>\
                        <td>' + (feature.properties['Batas_Utar'] !== null ? Autolinker.link(String(feature.properties['Batas_Utar'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Batas_Sela</th>\
                        <td>' + (feature.properties['Batas_Sela'] !== null ? Autolinker.link(String(feature.properties['Batas_Sela'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Batas_Bara</th>\
                        <td>' + (feature.properties['Batas_Bara'] !== null ? Autolinker.link(String(feature.properties['Batas_Bara'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Batas_Timu</th>\
                        <td>' + (feature.properties['Batas_Timu'] !== null ? Autolinker.link(String(feature.properties['Batas_Timu'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Lmb_Geo</th>\
                        <td>' + (feature.properties['Lmb_Geo'] !== null ? Autolinker.link(String(feature.properties['Lmb_Geo'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_INDONESIA_KABcopy_1_0() {
            return {
                pane: 'pane_INDONESIA_KABcopy_1',
                opacity: 1,
                color: 'rgba(0,0,0,0.709804)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,227,241,0.709804)',
            }
        }

        function pop_Indo_Desa_region_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">DESA</th>\
                        <td>' + (feature.properties['DESA'] !== null ? Autolinker.link(String(feature.properties['DESA'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KODE</th>\
                        <td>' + (feature.properties['KODE'] !== null ? Autolinker.link(String(feature.properties['KODE'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KECAMATAN</th>\
                        <td>' + (feature.properties['KECAMATAN'] !== null ? Autolinker.link(String(feature.properties['KECAMATAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KABUPATEN</th>\
                        <td>' + (feature.properties['KABUPATEN'] !== null ? Autolinker.link(String(feature.properties['KABUPATEN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">PROPINSI</th>\
                        <td>' + (feature.properties['PROPINSI'] !== null ? Autolinker.link(String(feature.properties['PROPINSI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">STATUS_IDT</th>\
                        <td>' + (feature.properties['STATUS_IDT'] !== null ? Autolinker.link(String(feature.properties['STATUS_IDT'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">STATUS_KOT</th>\
                        <td>' + (feature.properties['STATUS_KOT'] !== null ? Autolinker.link(String(feature.properties['STATUS_KOT'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">STATUS_HUK</th>\
                        <td>' + (feature.properties['STATUS_HUK'] !== null ? Autolinker.link(String(feature.properties['STATUS_HUK'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SUMBER_AIR</th>\
                        <td>' + (feature.properties['SUMBER_AIR'] !== null ? Autolinker.link(String(feature.properties['SUMBER_AIR'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['IDT_94_95'] !== null ? Autolinker.link(String(feature.properties['IDT_94_95'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['IDT_95_96'] !== null ? Autolinker.link(String(feature.properties['IDT_95_96'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KLASIFIKAS</th>\
                        <td>' + (feature.properties['KLASIFIKAS'] !== null ? Autolinker.link(String(feature.properties['KLASIFIKAS'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">TERMASUK_D</th>\
                        <td>' + (feature.properties['TERMASUK_D'] !== null ? Autolinker.link(String(feature.properties['TERMASUK_D'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">LUAS_WILAY</th>\
                        <td>' + (feature.properties['LUAS_WILAY'] !== null ? Autolinker.link(String(feature.properties['LUAS_WILAY'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SUMBER_PEN</th>\
                        <td>' + (feature.properties['SUMBER_PEN'] !== null ? Autolinker.link(String(feature.properties['SUMBER_PEN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SUB_SEKTOR</th>\
                        <td>' + (feature.properties['SUB_SEKTOR'] !== null ? Autolinker.link(String(feature.properties['SUB_SEKTOR'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KEMATIAN_B</th>\
                        <td>' + (feature.properties['KEMATIAN_B'] !== null ? Autolinker.link(String(feature.properties['KEMATIAN_B'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">KEMATIAN</th>\
                        <td>' + (feature.properties['KEMATIAN'] !== null ? Autolinker.link(String(feature.properties['KEMATIAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">BANYAKNYA_</th>\
                        <td>' + (feature.properties['BANYAKNYA_'] !== null ? Autolinker.link(String(feature.properties['BANYAKNYA_'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Indo_Desa_region_2_0(feature) {
            switch(String(feature.properties['DESA'])) {
                case 'Bakauheni':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,212,133,1.0)',
            }
                    break;
                case 'Bangun Rejo':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(61,152,236,1.0)',
            }
                    break;
                case 'Banjarmasin':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(213,119,25,1.0)',
            }
                    break;
                case 'Belambangan':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,227,18,1.0)',
            }
                    break;
                case 'Berundung':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(131,210,62,1.0)',
            }
                    break;
                case 'Gayam':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(141,115,223,1.0)',
            }
                    break;
                case 'Gedungharta':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(113,211,214,1.0)',
            }
                    break;
                case 'Hata':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,170,132,1.0)',
            }
                    break;
                case 'Kampungbaru':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(169,95,233,1.0)',
            }
                    break;
                case 'Karang Sari':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(18,30,204,1.0)',
            }
                    break;
                case 'Kekiling':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(18,30,204,1.0)',
            }
                    break;
                case 'Kelau':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(87,238,152,1.0)',
            }
                    break;
                case 'Ketapang':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(236,44,121,1.0)',
            }
                    break;
                case 'Klaten':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,104,117,1.0)',
            }
                    break;
                case 'Kuripan':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(38,171,201,1.0)',
            }
                    break;
                case 'Legundi':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(38,171,201,1.0)',
            }
                    break;
                case 'Negeri Pandan':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(135,169,228,1.0)',
            }
                    break;
                case 'Padan':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(127,70,218,1.0)',
            }
                    break;
                case 'Pasuruan':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(36,229,90,1.0)',
            }
                    break;
                case 'Pematan Pasir':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(238,106,73,1.0)',
            }
                    break;
                case 'Penengahan':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,117,111,1.0)',
            }
                    break;
                case 'Pisang':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(57,93,223,1.0)',
            }
                    break;
                case 'Rawi':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(212,159,61,1.0)',
            }
                    break;
                case 'Ruang Tengah':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(190,120,204,1.0)',
            }
                    break;
                case 'Ruguk':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(144,221,20,1.0)',
            }
                    break;
                case 'Semanak':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(50,223,203,1.0)',
            }
                    break;
                case 'Sidoasih':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(50,223,203,1.0)',
            }
                    break;
                case 'Sri Pendowo':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,73,155,1.0)',
            }
                    break;
                case 'Sukabaru':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(214,52,92,1.0)',
            }
                    break;
                case 'Sukajaya':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(63,158,205,1.0)',
            }
                    break;
                case 'Sumbernadi':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,222,172,1.0)',
            }
                    break;
                case 'Sumur':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,222,172,1.0)',
            }
                    break;
                case 'Taman Baru':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(158,200,18,1.0)',
            }
                    break;
                case 'Taman Sari':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(61,221,83,1.0)',
            }
                    break;
                case 'Tanjung Heran':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(76,62,226,1.0)',
            }
                    break;
                case 'Tetaan':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(239,95,199,1.0)',
            }
                    break;
                case 'Totoharjo':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,49,215,1.0)',
            }
                    break;
                case 'Tridarmayoga':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,49,215,1.0)',
            }
                    break;
                case 'Way Kalam':
                    return {
                pane: 'pane_Indo_Desa_region_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(197,217,17,1.0)',
            }
                    break;
            }
        }
        
        var baseMaps = {};
        L.control.layers(baseMaps,{'Indo_Desa_region<br /><table><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Bakauheni0.png" /></td><td>Bakauheni</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_BangunRejo1.png" /></td><td>Bangun Rejo</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Banjarmasin2.png" /></td><td>Banjarmasin</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Belambangan3.png" /></td><td>Belambangan</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Berundung4.png" /></td><td>Berundung</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Gayam5.png" /></td><td>Gayam</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Gedungharta6.png" /></td><td>Gedungharta</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Hata7.png" /></td><td>Hata</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Kampungbaru8.png" /></td><td>Kampungbaru</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_KarangSari9.png" /></td><td>Karang Sari</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Kekiling10.png" /></td><td>Kekiling</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Kelau11.png" /></td><td>Kelau</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Ketapang12.png" /></td><td>Ketapang</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Klaten13.png" /></td><td>Klaten</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Kuripan14.png" /></td><td>Kuripan</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Legundi15.png" /></td><td>Legundi</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_NegeriPandan16.png" /></td><td>Negeri Pandan</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Padan17.png" /></td><td>Padan</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Pasuruan18.png" /></td><td>Pasuruan</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_PematanPasir19.png" /></td><td>Pematan Pasir</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Penengahan20.png" /></td><td>Penengahan</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Pisang21.png" /></td><td>Pisang</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Rawi22.png" /></td><td>Rawi</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_RuangTengah23.png" /></td><td>Ruang Tengah</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Ruguk24.png" /></td><td>Ruguk</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Semanak25.png" /></td><td>Semanak</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Sidoasih26.png" /></td><td>Sidoasih</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_SriPendowo27.png" /></td><td>Sri Pendowo</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Sukabaru28.png" /></td><td>Sukabaru</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Sukajaya29.png" /></td><td>Sukajaya</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Sumbernadi30.png" /></td><td>Sumbernadi</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Sumur31.png" /></td><td>Sumur</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_TamanBaru32.png" /></td><td>Taman Baru</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_TamanSari33.png" /></td><td>Taman Sari</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_TanjungHeran34.png" /></td><td>Tanjung Heran</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Tetaan35.png" /></td><td>Tetaan</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Totoharjo36.png" /></td><td>Totoharjo</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_Tridarmayoga37.png" /></td><td>Tridarmayoga</td></tr><tr><td style="text-align: center;"><img src="legend/Indo_Desa_region_2_WayKalam38.png" /></td><td>Way Kalam</td></tr></table>': layer_Indo_Desa_region_2,'<img src="legend/INDONESIA_KABcopy_1.png" /> INDONESIA_KAB copy': layer_INDONESIA_KABcopy_1,'<img src="legend/INDONESIA_PROP_0.png" /> INDONESIA_PROP': layer_INDONESIA_PROP_0,},{collapsed:false}).addTo(map);
        setBounds();
        </script>
    </body>
</html>
