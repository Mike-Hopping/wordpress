<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 10/04/2018
 * Time: 1:35 PM
 */
?>
<?php get_header(); ?>
<div class="text-container">
    <div class="contact-container">
    <div id="map-container">Map goes here</div>
        <br>
        <script>
            function myMap() {
                var mapOptions = {
                    center: new google.maps.LatLng(-43.518727, 172.636497),
                    zoom: 19
                };
                var map = new google.maps.Map(document.getElementById("map-container"), mapOptions);
            }
        </script>
    <div class="contact-info">
    <h1>Contact Us</h1>
        <br>
    <h2>Piston Cranky Motors</h2>
        <p>
            Address:	961 Colombo Street<br>
            Christchurch<br>
            New Zealand<br>
            <br>
            Postal Address:	P.O. Box 21447<br>
            Edgeware<br>
            Christchurch 8143<br>
            New Zealand<br>
            <br>
            Phone:	03 385 8890<br>
            Fax:	03 385 8413<br>
            <br>
            Email:	info@pistoncranky.co.nz</p>
        <a href=""><strong>Please click here to enquire</strong></a>
    </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZHMT4UAIYHOtBxAh-BnJoZ8vvEDPWYYM&callback=myMap"></script>
</div>
<?php get_footer(); ?>