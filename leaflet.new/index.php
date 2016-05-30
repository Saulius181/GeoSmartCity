<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>


    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css">
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>

    <link rel="stylesheet" href="css/Control.Geocoder.css">
    <script src="javascript/Control.Geocoder.js"></script>

    <script type="text/javascript" src="javascript/map.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="nominatim/leaflet-routing-machine.css">
    <script src="nominatim/leaflet-routing-machine.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/sweetalert2.css">


    <script src="javascript/popup.js"></script>
    <script src="javascript/sweetalert2.min.js"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
<div id="mapid">

</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand" href="http://geosmartcity.dc.turkuamk.fi/" target="_blank">SouthWest Finalnd Routing</span>
        </div>
        <div class="collapse navbar-collapse pull-right" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="?lang=fi">FI</a></li>
                <li><a href="?lang=en">EN</a></li>
                <li><a href="?lang=sw">SW</a></li>
                <li onclick="route_information()"><a href="#"><span class="pref"> PREF</span></a></li>

            </ul>
        </div>

    </div>
</nav>


<div id="route-information">
    <span id="cancel" onclick="route_information()"><i class="fa fa-times" aria-hidden="true"></i></span>
    <p>Select your time and preference</p>
<!--
    <span onclick="time()"><i class="fa fa-clock-o"></i> Time | </span>
    <span onclick="preference()"><i class="fa fa-twitch"></i> Preferences | </span>
    <span onclick="info()"><i class="fa fa-exclamation-circle"></i> About  </span>
-->	
	<select id = "modeListBoxSelect" name="mode">
		<option value="WALK">Walk</option>
		<option value="CAR">Car</option>
		<option value="BICYCLE">Bicycle</option>
		<option value="TRANSIT%2CWALK">Transit request</option>
		<option value="BUSISH%2CWALK">Bus</option>
<!--		<option value="TRAINISH%2CWALK">Train</option> -->
		<option value="CAR_PARK%2CWALK%2CTRANSIT">Park and ride</option>
		<option value="CAR%2CWALK%2CTRANSIT">Kiss and ride</option>
		<option value="BICYCLE_PARK%2CWALK%2CTRANSIT">Bike and ride</option>
<!--		<option value="TRANSIT%2CBICYCLE">Bicycle and transit</option> -->
	</select><br>
	
	<input type="date" id= "dateId" name="date"><br>
	<input type="time" id= "timeId" name="time">

</div>
<div id="route-description">
   <p>View Route Details</p>
     <span onclick="route_bus()"><i class="fa fa-bus" aria-hidden="true"></i> Bus |</span>
     <span onclick="route_car()"><i class="fa fa-car" aria-hidden="true"></i> Car | </span>
    <span onclick="route_bike()"><i class="fa fa-bicycle" aria-hidden="true"></i> Bike |</span>
    <span onclick="route_walk()"><i class="fa fa-user" aria-hidden="true"></i> Walk | </span>

</div>

<div class="route-desktop bus">

    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td >
                <i class="fa fa-map-marker" aria-hidden="true"></i>--------<sup>120m</sup>

                <img src="images/walk.png" style="height: 20px">----
            </td>
            <td>
                <sup>14:35 </sup><br><i class="fa fa-bus" aria-hidden="true"></i><sup> Line 2A | Hamenkatu</sup>
            </td>
            <td>
                <sup>12:54 </sup><i class="fa fa-bus" aria-hidden="true"> <i class="fa fa-flag" aria-hidden="true"></i><sup> | Kohmo </sup>
            </td>
            <td>
                ----<sup>80m</sup> <img src="images/walk.png" style="height: 20px">
                --- <i class="fa fa-home" aria-hidden="true"></i>
            </td>


        </tr>


    </table>
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td>
                <sup>14:30</sup> <i class="fa fa-map-marker" aria-hidden="true"></i><br>--------<sup>120m</sup>

                <img src="images/walk.png" style="height: 20px">----
            </td>
            <td>
                <sup>14:35 </sup><br><i class="fa fa-bus" aria-hidden="true"></i><sup> Line 2A | Hamenkatu</sup>
            </td>
            <td>
                <sup>14:35 </sup><br><i class="fa fa-bus" aria-hidden="true"></i><sup> Line 2A | Hamenkatu</sup>
            </td>
            <td>
                <sup>12:54 </sup> <i class="fa fa-flag" aria-hidden="true"></i><sup>  Kohmo </sup>
            </td>
            <td>
                <sup>80m</sup> <img src="images/walk.png" style="height: 20px">
                --- <i class="fa fa-home" aria-hidden="true"><sup>12:56</sup></i>
            </td>


        </tr>

    </table>
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td>
                <sup>14:30</sup> <i class="fa fa-map-marker" aria-hidden="true"></i><br>--------<sup>120m</sup>

                <img src="images/walk.png" style="height: 20px">----
            </td>
            <td>
                <sup>14:35 </sup><br><i class="fa fa-bus" aria-hidden="true"></i><sup> Line 2A | Hamenkatu</sup>
            </td>
            <td>
                <sup>14:35 </sup><br><i class="fa fa-bus" aria-hidden="true"></i><sup> Line 2A | Hamenkatu</sup>
            </td>
            <td>
                <sup>12:54 </sup> <i class="fa fa-flag" aria-hidden="true"></i><sup>  Kohmo </sup>
            </td>
            <td>
                <sup>80m</sup> <img src="images/walk.png" style="height: 20px">
                --- <i class="fa fa-home" aria-hidden="true"><sup>12:56</sup></i>
            </td>


        </tr>

    </table>




</div>

<div class="route-desktop car">
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>


            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-car" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>
            <td>
                12:54 <img src="images/parking.png" style="height: 25px"><br>
                <i class="fa fa-car" aria-hidden="true"> </i><sup> | Kohmo </sup>
            </td>
            <td>
                ----<sup>95m</sup> <img src="images/walk.png" style="height: 20px">
                --- <i class="fa fa-home" aria-hidden="true"></i>
            </td>


        </tr>
        <tr>


            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-car" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>
            <td>
                12:54 <img src="images/parking.png" style="height: 25px"><br>
                <i class="fa fa-car" aria-hidden="true"> </i><sup> | Kohmo </sup>
            </td>
            <td>
                ----<sup>95m</sup> <img src="images/walk.png" style="height: 20px">
                --- <i class="fa fa-home" aria-hidden="true"></i>
            </td>


        </tr>

    </table>
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>


            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-car" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>
            <td>
                12:54 <img src="images/parking.png" style="height: 25px"><br>
                <i class="fa fa-car" aria-hidden="true"> </i><sup> | Kohmo </sup>
            </td>
            <td>
                ----<sup>45m</sup> <img src="images/walk.png" style="height: 20px">
                --- <i class="fa fa-home" aria-hidden="true"></i>
            </td>


        </tr>

    </table>



</div>
<!--
<div class="route-desktop bike">

    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-bicycle" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>
            <td>
                --------<sup>4.2 km</sup> <i class="fa fa-bicycle" aria-hidden="true"></i>------
            </td>
            <td>
                14:35 <i class="fa fa-home" aria-hidden="true"></i><br><i class="fa fa-bicycle" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>


        </tr>
        <tr>

            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-bicycle" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>
            <td>
                --------<sup>4.2 km</sup> <i class="fa fa-bicycle" aria-hidden="true"></i>------
            </td>
            <td>
                14:35 <i class="fa fa-home" aria-hidden="true"></i><br><i class="fa fa-bicycle" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>


        </tr>

    </table>
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-bicycle" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>

            <td>
                --------<sup>4.2 km</sup> <i class="fa fa-bicycle" aria-hidden="true"></i>------
            </td>

            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-home" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>


        </tr>


    </table>
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-bicycle" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>
            <td>
                --------<sup>4.2 km</sup> <i class="fa fa-bicycle" aria-hidden="true"></i>------
            </td>
            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><i class="fa fa-home" aria-hidden="true"></i><sup> | Hamenkatu</sup>
            </td>


        </tr>


    </table>

</div>
-->
<div class="route-desktop walk">
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><img src="images/walk.png" style="height: 20px"><sup> | Hamenkatu</sup>
            </td>

            <td>
                --------<sup>4.2 km</sup> <img src="images/walk.png" style="height: 20px">------
            </td>
            <td>
                14:35 <i class="fa fa-home" aria-hidden="true"></i><br><img src="images/walk.png" style="height: 20px"><sup> | Hamenkatu</sup>
            </td>




        </tr>


    </table>
    <table>
        <tr>
            <th colspan="5">Distance: 8km, Duration :19 minutes, CO<sub>2</sub> Emission : 0.45g
                [<i class="fa fa-tree" aria-hidden="true"></i><i class="fa fa-tree" aria-hidden="true"></i>]</th>
        </tr>
        <tr>

            <td>
                14:35 <i class="fa fa-map-marker" aria-hidden="true"></i><br><img src="images/walk.png" style="height: 20px"><sup> | Hamenkatu</sup>
            </td>

            <td>
                --------<sup>4.2 km</sup> <img src="images/walk.png" style="height: 20px">------
            </td>
            <td>
                14:35 <i class="fa fa-home" aria-hidden="true"></i><br><img src="images/walk.png" style="height: 20px"><sup> | Hamenkatu</sup>
            </td>




        </tr>


    </table>


</div>





</body>
</html>