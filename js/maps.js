define(['jquery'], function () {

    google.maps.visualRefresh = true;

    var initialize = function () {
        // Create an array of styles.
        var styles = [
            {
                stylers: [
                    { saturation: -100 }
                ]
            }
        ];

        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(59.941885, 10.517349),
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            },
            scrollwheel: false,
            draggable: false
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(59.941885, 10.517349),
            map: map,
        });

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    }

    $(document).ready(function () {
        initialize();
    });

});
