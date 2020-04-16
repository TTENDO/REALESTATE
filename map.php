<?php
    //if this button is clicked
    if(isset($_POST["submit_address"]))
    {
            $address = $_POST["address"];
            ?>
            //show a map with that address
            //src sends request to google
            //means the parameter => ?q
            <iframe src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed" height="500" width="100%"></iframe>
            <?php
    }
?>
<form method="POST">
        <p>
            <input type="text" name="address" placeholder="Enter address">
        </p>
        <input type="submit" name=="submit_address">
</form>







<!-- 0772123100

10.120.0.138 proxy

8080 -->


























<!-- <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
          <table border="0" cellpadding="0" cellspacing="0">
               <tr>
                    <td>
                         <div id="dvMap" style="width: 500px; height: 500px">
                         </div>
                    </td>
                    <td id="legend">
                    </td>
               </tr>
     </table>

     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var markers = [
{
    "title": 'Bombay Hospital',
    "lat": '18.9409388',
    "lng": '72.82819189999998',
    "description": 'Bombay Hospital',
    "type": 'Hospital',
    "icon": "Markers/letter_a.png"
},
{
    "title": 'Jaslok Hospital',
    "lat": '18.9716956',
    "lng": '72.80991180000001',
    "description": 'Jaslok Hospital',
    "type": 'Hospital',
    "icon": "Markers/letter_b.png"
},
{
    "title": 'Lilavati Hospital',
    "lat": '19.0509488',
    "lng": '72.8285644',
    "description": 'Lilavati Hospital',
    "type": 'Hospital',
    "icon": "Markers/letter_c.png"
},
{
    "title": 'Aksa Beach',
    "lat": '19.1759668',
    "lng": '72.79504659999998',
    "description": 'Aksa Beach',
    "type": 'Beach',
    "icon": "Markers/letter_d.png"
},
{
    "title": 'Juhu Beach',
    "lat": '19.0883595',
    "lng": '72.82652380000002',
    "description": 'Juhu Beach',
    "type": 'Beach',
    "icon": "Markers/letter_e.png"
},
{
    "title": 'Girgaum Beach',
    "lat": '18.9542149',
    "lng": '72.81203529999993',
    "description": 'Girgaum Beach',
    "type": 'Beach',
    "icon": "Markers/letter_f.png"
},
{
    "title": 'Oberoi Mall',
    "lat": '19.1737704',
    "lng": '72.86062400000003',
    "description": 'Oberoi Mall',
    "type": 'Mall',
    "icon": "Markers/letter_g.png"
},
{
    "title": 'Infinity Mall',
    "lat": '19.1846511',
    "lng": '72.83454899999992',
    "description": 'Infinity Mall',
    "type": 'Mall',
    "icon": "Markers/letter_h.png"
},
{
    "title": 'Phoenix Mall',
    "lat": '19.0759837',
    "lng": '72.87765590000003',
    "description": 'Phoenix Mall',
    "type": 'Mall',
    "icon": "Markers/letter_i.png"
},
{
    "title": 'Jijamata Udyan',
    "lat": '18.979006',
    "lng": '72.83388300000001',
    "description": 'Jijamata Udyan',
    "type": 'Park',
    "icon": "Markers/letter_j.png"
},
{
    "title": 'Sanjay Gandhi National Park',
    "lat": '19.2147067',
    "lng": '72.91062020000004',
    "description": 'Sanjay Gandhi National Park',
    "type": 'Park',
    "icon": "Markers/letter_k.png"
}
];
window.onload = function () {
    LoadMap();
}
function LoadMap() {
    var mapOptions = {
        center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var infoWindow = new google.maps.InfoWindow();
    var latlngbounds = new google.maps.LatLngBounds();
    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
    var legend = document.getElementById("legend");
    legend.innerHTML = "";
    for (var i = 0; i < markers.length; i++) {
        var data = markers[i]
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: data.title,
            icon: data.icon
        });
        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("<div style = 'width:100px;height:40px'>" + data.description + "</div>");
                infoWindow.open(map, marker);
            });
        })(marker, data);
        latlngbounds.extend(marker.position);
 
        legend.innerHTML += "<div style = 'margin:5px'><img align = 'middle' src = '" + marker.icon + "' />&nbsp;" + marker.title + "</div>";
    }
    var bounds = new google.maps.LatLngBounds();
    map.setCenter(latlngbounds.getCenter());
    map.fitBounds(latlngbounds);
}
</script>
</body>
</html>
PROFILE NAME MTN
APN internet

proxy port 8080 -->