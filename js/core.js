var app = {
    init: function() {
        app.maps.load();
    },

    maps: {
        canvas: null,
        locations: [],

        load: function() {
            app.maps.canvas = new google.maps.Map(document.getElementById('maps'), {
                zoom: 17,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            $('#locations').find('span').each(function() {
                var lat = $(this).attr('data-lat');
                var lng = $(this).attr('data-lng');
                var title = $(this).attr('data-title');
                var num = $(this).attr('data-num');

                var loc = new google.maps.LatLng(lat, lng);
                var icon_uri = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld='+num+'|FE6256|000000';

                var marker = new google.maps.Marker({
                    position: loc,
                    map: app.maps.canvas,
                    title: title,
                    icon: new google.maps.MarkerImage(icon_uri)
                });

                app.maps.locations.push(loc);
            });

            app.maps.fitBounds();
            app.maps.drawLines();
        },

        fitBounds: function() {
            var bounds = new google.maps.LatLngBounds();

            for (var i = 0; i < app.maps.locations.length; i++) {
                bounds.extend(app.maps.locations[i]);
            }

            app.maps.canvas.fitBounds(bounds);
        },

        drawLines: function() {
            var housesPath = new google.maps.Polyline({
                path: app.maps.locations,
                geodesic: true,
                strokeColor: '#FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 2
            });

            housesPath.setMap(app.maps.canvas);
        }
    }
};