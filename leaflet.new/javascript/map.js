window.onload=function(){
    var map=L.map('mapid',{
        zoom:14,
        zoomControl:false,
        minZoom:8

    });

    map.locate({setView:true, maxZoom:14});
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

    function onLocationFound(e)
    {
        

    }
        map.on('locationfound', onLocationFound);

        function onLocationError(e){
        alert(e.message);
        map.on('locationerror',onLocationError);
     }

    var route=L.Routing.control({
        waypoints:
            [
                //no waypoint on the initials

            ],

        routeWhileDragging:true,
        geocoder: L.Control.Geocoder.opentripplaner()
    }).addTo(map);



   route.on('routesfound', function(e) {
        document.getElementById("route-description").style.display = "block";
    });



  }

function route_bus(){

    if($('.route-desktop.bus').is(':hidden')){
        $('.route-desktop.bus').show('slow');
        $('.route-desktop.car').hide('fast');
        $('.route-desktop.bike').hide('fast');
        $('.route-desktop.walk').hide('fast');

    }
}

function route_car(){

    if($('.route-desktop.car').is(':hidden')){
        $('.route-desktop.car').show('slow');
        $('.route-desktop.bus').hide('fast');
        $('.route-desktop.bike').hide('fast');
        $('.route-desktop.walk').hide('fast');

    }
}

function route_bike(){

    if($('.route-desktop.bike').is(':hidden')){
        $('.route-desktop.bike').show('slow');
        $('.route-desktop.bus').hide('fast');
        $('.route-desktop.car').hide('fast');
        $('.route-desktop.walk').hide('fast');

    }
}
function route_walk(){

    if($('.route-desktop.walk').is(':hidden')){
        $('.route-desktop.walk').show('slow');
        $('.route-desktop.bus').hide('fast');
        $('.route-desktop.car').hide('fast');
        $('.route-desktop.bike').hide('fast');

    }
}




function route_information(){


    if($('#route-information').is(':hidden')){
        $('#route-information').show('slow');
    }else{
        $('#route-information').hide('slow');
    }


        $('.navbar-collapse').collapse('hide');



}



