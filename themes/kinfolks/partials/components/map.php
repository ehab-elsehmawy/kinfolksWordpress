<?php
global $flex;
$locations = $flex['locations'];
if(empty(get_field('google_api_key','option'))){return;} ?>

<!-- Global CODE -->
<style>
.gmnoprint a, .gmnoprint span {
    display:none;
}
.gmnoprint div {
    background:none !important;
}
</style>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=<?php the_field('google_api_key','option'); ?>&callback=modeso_map">
</script>



<script>
function modeso_map(){
	// Style
	var styledMapType = new google.maps.StyledMapType(
[
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    }
],
	{name: 'Styled Map'});


    var locations = <?php echo json_encode($locations); ?>;
    var final_location = [];
    locations.forEach(function(loca) {
        var location = new google.maps.LatLng(loca.map_location.lat,loca.map_location.lng);
        final_location.push(location);
    });

    var map = new google.maps.Map(document.getElementById('aumico_map'), {
        center: final_location[0],
        zoom: 14,
        disableDefaultUI: true,
    });
    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');

    var markers = [];
    for (i = 0; i < final_location.length; i++) {
        var marker = new google.maps.Marker({
            position: final_location[i],
            visible: true,
            icon: "<?php echo get_template_directory_uri(); ?>/assets/images/pin.png",
        });
        marker.setMap(map);
        markers.push(marker);
    }

} //END
</script>