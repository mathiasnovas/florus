define(['jquery'], function ($) {

    google.maps.visualRefresh = true;

    var initialize = function () {
        var styles = [
            {
                stylers: [
                    { saturation: -100 }
                ]
            }
        ];

        var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});

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

        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    }

    $(document).ready(function () {
        initialize();
    });

});
