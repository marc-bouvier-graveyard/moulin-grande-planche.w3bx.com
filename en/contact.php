<?php

$pageName = 'contact';
$title = 'Accueil';
$description = "";
$keywords = "Villeneuve , sur , Yonne, Sens, Sénonais, Marsangy, Roussemeau, Egriselles , le , bocage, courtenay, veron, gron, rosoy";
$extraScripts = '';

include_once 'header.php';
?>



<div class="grid_12" style="margin-bottom:25px">
    <img src="/images/banners/banner_pic01.jpg" />
</div>

<!-- end .grid_12 -->

<div class="clear" >
</div>

<div class="grid_8" style="margin-bottom:25px">
    <h2>
        Contact</h2>
    <p style="text-align: center;">
        One hour from Paris coming from A6 highway (exit 'Courtenay') or 2nd exit of A19 highway between A5 and A6<br/>
        The "rue des Fontaines" matches the D24 road between Egriselles le Bocage and Marsangy. <br/>
        The Inn is 4 kilometers away from Marsangy's center and 2 kilometers away from Egriselles    </p>
    <p style="text-align: center;">
        Francine Boura <br/>
        81, rue des Fontaines<br/>
        89500 Marsangy<br/>
        03 86 96 99 11<br/>

    <script type="text/javascript" >
            mail2("boura.francine","aliceadsl",14,"","boura.francine@aliceadsl.fr","alicedsl")</script>
    <noscript>
        boura.francine[replace with @]aliceadsl.fr</noscript>
</p>

<li style="text-align: center;">
    <a target="_blank" style="list-style-type:circle;" href="http://www.gites-de-france.com/location-vacances-Marsangy-Chambre-d-hotes--,89G2190.html">Site of "Gîtes de France et Chambres d'hôtes"</a>
</li>

</div>
<div class="grid_4">
		<script type="text/javascript">
			widgetIteaGL({
				key : "s8hl7ria",
				numGite : "89G2190",
				widget : "resa",
				langue : "UK",
			});
		</script>
</div>

<div class="grid_10 prefix_1 suffix_1">
    <div id="map_canvas" style="width: 780px;       height: 480px;">
    </div>
</div>

<div class="clear">
</div>

<!-- end .grid_11 -->
<?php
include_once 'footer.php';
?>
<script type="text/javascript">

    API.attachDocumentReadyListener(function() {

        var myLatlng = new google.maps.LatLng(48.118301, 3.221858);

        var myOptions = {
            zoom: 10,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" style="margin-top:3px;margin-bottom:0px;font-size:14px" class="firstHeading">Moulin de la Grande Planche</h3>'+
            '<div id="bodyContent">'+
            '<p style="padding: 1px 0;margin-bottom:1px;">Francine Boura   <br/>81, rue des Fontaines <br/>89500 Marsangy</p>'+
            '</div>'+
            '<span><a target="_blank" href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Francine+Boura+++81,+rue+des+Fontaines+89500+%E2%80%93+Marsangy&aq=&sll=48.118301,3.221858&sspn=0.046987,0.110979&ie=UTF8&hq=Francine+Boura&hnear=81+Rue+des+Fontaines,+89500+Marsangy,+Yonne,+Bourgogne,+France&t=h&ll=48.118301,3.221858&spn=0.003875,0.013872&z=17&iwloc=A">More on Google Maps</a></span></div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Moulin de la Grande Planche'
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });

        infowindow.open(map,marker);
    });

</script>
