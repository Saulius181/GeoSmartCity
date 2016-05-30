window.onload=function() {
   var map=L.map('map',{

    center:[60.4500, 22.2667],
        zoom:8,
        zoomControl:false,
        minZoom:8
    });




    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    L.control.attribution({
        position:'bottomleft'
    });


    //the nominatim input field;
    var route=L.Routing.control({
            waypoints:
            [
              //no waypoint on the initials

            ],

        routeWhileDragging:true,
        geocoder: L.Control.Geocoder.nominatim()
    }).addTo(map);


    //set the position of the zoomlevel
    var zoom=L.control.zoom({
        position:'bottomleft',
               }).addTo(map);


    /*--------------ferri----------------*/
    //include the ferri route icon
    var FerriIcon = L.icon({
        iconUrl: 'images/ferry.png',
        iconSize: [30, 30],
    });

    function markFerries(feature, layer) {
        layer.bindPopup("<div id='ferrie'><img src='images/ferry.png' style='width: 50px; height: 50px;'><h2>" + feature.properties.name + "</h3><p>The ferry journey is approximately 300 meter long and takes 10 minutes to cross.</p>" +
            "<p><a href='"+feature.properties.timetable +"' target='_blank'> Please visit the link to view time table.</a> </p></div>");
        layer.setIcon(FerriIcon);

    }

   var ferryonMap=L.geoJson(geojsonFeature,{
            onEachFeature:markFerries
        }

    );

    /*-----------------------------------------------*/


    /*--------------------parking area----------------*/
    //inlcude the parking areas

    var parkingIcon = L.icon({
        iconUrl: 'images/park.png',
        iconSize: [60, 60],
    });

    function markParking(feature,layer){
        layer.bindPopup("<div id='ferrie'><img src='images/park.png' style='width: 50px; height: 50px;'><h2>" + feature.properties.name + "</h3><p>Payment type: Free.<br>Capacity:80<br>Time: 8:00-22:00" +
            "</div>");

        layer.setIcon(parkingIcon);
    }

    var parkingArea= L.geoJson(parkingInfo,{
        onEachFeature:markParking
    });


    /*----------------------parking entry-------------*/

    var parkingEntry = L.icon({
        iconUrl: 'images/enter-01.png',
        iconSize: [60, 60],
    });

    function markentry(feature,layer){
        layer.bindPopup("<div id='ferrie'><img src='images/park.png' style='width: 50px; height: 50px;'><h2>" + feature.properties.name + "</h3></div>");
        layer.setIcon(parkingEntry);
    }
    var parkingIn=L.geoJson(EnterParkingArea,{
        onEachFeature:markentry
    });

    /*---------------------------------------------------*/

    /*----------------------parking exit------------------*/
    var parkingExit = L.icon({
        iconUrl: 'images/exit-01.png',
        iconSize: [60, 60],
    });
    function markexit(feature,layer){
        layer.bindPopup("<div id='ferrie'><img src='images/park.png' style='width: 50px; height: 50px;'><h2>" + feature.properties.name + "</h3></div>");
        layer.setIcon(parkingExit);
    }
    var parkingOut=L.geoJson(ExitParkingArea,{
        onEachFeature:markexit
    });

    /*---------------------------mark zoomlevel---------------*/
    map.on("zoomend",function(){

        if(map.getZoom()>8){
            ferryonMap.addTo(map);
            // parkingArea.addTo(map);


        }
        else{
            map.removeLayer(ferryonMap);
        }
        if(map.getZoom()>13){
            parkingArea.addTo(map);

        }else{
            map.removeLayer(parkingArea);
            map.removeLayer(parkingIn);
            map.removeLayer(parkingOut)
        }

        if(map.getZoom()>16){
            parkingIn.addTo(map);
            parkingOut.addTo(map);
        }else{
            map.removeLayer(parkingIn);
            map.removeLayer(parkingOut)
        }



    });


/*----------------------------------------*/


    var road=route.on('routesfound', function(e){
        //unhide route info button


        document.getElementById("view_route").style.display="block";

        var destination_cordinate=this.getWaypoints()[1].latLng;

        L.circle(this.getWaypoints()[1].latLng,70).addTo(map);

        /*
        L.Routing.control({
            waypoints:[
                [60.45488,22.29041],
                destination_cordinate
            ]
        }).addTo(map)*/

        //  60.45488/22.29041
        /*
        L.polyline([
                [60.45488,22.29041],
                destination_cordinate
            ],


            {color: 'green'}
        ).addTo(map);

            */
    });



    /*DOM elements*/



    var para=document.createElement("p");
    var node=document.createTextNode("Southwest Finland Routing.");
    para.appendChild(node);

    var leafletop=document.getElementsByClassName("leaflet-routing-container")[0];
    leafletop.appendChild(para);

   }
