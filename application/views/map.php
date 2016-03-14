<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>

<div class="row">
    <div class="col-lg-12">
        <div id="map" class="col-lg-12" style="height: 450px;"></div>

        <script type="text/javascript">
            var geocoder;
            var map;

            function initializeGoogleMaps() {

                geocoder = new google.maps.Geocoder();
                var myOptions = {
                    zoom: 2,
                    center: new google.maps.LatLng(20, 0),
                    mapTypeId: google.maps.MapTypeId.TERRAIN
                };

                map = new google.maps.Map(document.getElementById("map"), myOptions);
                map.setOptions({scrollwheel: false});

                google.maps.event.addListener(map, 'click', function (event) {
                    this.setOptions({scrollwheel: true});
                });

                google.maps.event.addListener(map, 'mouseout', function (event) {
                    this.setOptions({scrollwheel: false});
                });
            }

            function geocodeFromAdress(address, title) {
                geocoder.geocode({'address': address}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var latLng = results[0].geometry.location;
                        addMarkerFromAdress(latLng, title);
                    }
                });
            }

            function addMarkerFromAdress(cords, title, ic) {
                c = cords.split(",");

                if (c.length == 2) {
                    var latLng = new google.maps.LatLng(c[0], c[1]);

                    var marker = new google.maps.Marker({
                        map: map,
                        position: latLng,
                        title: title,
                        icon: ic
                    });
                }

            }

            window.onload = function () {
                initializeGoogleMaps();

                <?php foreach ($locations as $location): ?>
                addMarkerFromAdress('<?php echo $location['coordinates'] ?>',
                    '<?php echo $location['location'] ?>',
                    '<?php echo base_url() . 'marker/' . $location['quantity'] ?>'
                );
                <?php endforeach; ?>
            }
        </script>
    </div>
</div>
</div>
</header>
