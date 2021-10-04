<?php

error_reporting(E_ALL);
require_once ("autoload.php");
$pageName = 'contact';
$title = 'Accueil';
$description = "";
$keywords = "Villeneuve , sur , Yonne, Sens, Sénonais, Marsangy, Roussemeau, Egriselles , le , bocage, courtenay, veron, gron, rosoy";
$extraScripts = '';
include_once 'header.php';
?>

<div class="grid_12" style="margin-bottom:25px">  
    <img src="/images/banners/banner_pic01.jpg" /></div>
<!-- end .grid_12 -->
<div class="clear" ></div>
<div class="grid_8" style="margin-bottom:25px">  
    <h2>Contact</h2>  
    <p style="text-align: center;">  
        Une bonne heure de Paris par l'A6 sortie <a href="http://www.courtenay45.fr/">Courtenay</a> ou sortie N°2 de la A19 entre l'A5 et l'A6<br/>
        La rue des Fontaines correspond à la D24 entre <a href="http://www.egriselles-le-bocage.net/">Egriselles le Bocage</a> et <a href="http://marsangy.chez-alice.fr/">Marsangy</a>. <br/>
        Le Moulin est à 4 Km du centre de Marsangy et 2 Km d'Egriselles    </p>
    <p style="text-align: center;">
        Francine Boura <br/>
        81, rue des Fontaines<br/>
        89500 Marsangy<br/>
        03 86 96 99 11<br/>
        <script type="text/javascript" >
            mail2("boura.francine","aliceadsl",14,"","boura.francine@aliceadsl.fr","alicedsl")</script>   
    <noscript> boura.francine[remplacer par @]aliceadsl.fr</noscript> 
</p>
<li style="text-align: center;">
    <a target="_blank" style="list-style-type:circle;" href="http://www.gites-de-france.com/location-vacances-Marsangy-Chambre-d-hotes--,89G2190.html">
        Site des Gîtes de France et Chambres d'hôtes</a>
</li>
</div>
<div class="grid_4">
		<script type="text/javascript">
			widgetIteaGL({
				key : "s8hl7ria",
				numGite : "89G2190",
				widget : "resa",
			});
		</script>
</div>
<div class="grid_10 prefix_1 suffix_1">   
    <div id="map_canvas" style="width: 780px; height: 480px;"></div>
</div>
<div class="clear"></div>
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
        var contentString = '<div id="content" style="" >'+     
            '<div id="siteNotice">'+               
            '</div>'+              
            '<h3 id="firstHeading" style="margin-top:3px;margin-bottom:0px;padding:1px;font-size:14px" class="firstHeading">Moulin de la Grande Planche</h3>'+   
            '<div id="bodyContent">'+            
            '<p style="padding: 1px 0;margin-bottom:1px;">Francine Boura   <br/>81, rue des Fontaines <br/>89500 Marsangy</p>'+  
            '</div>'+             
            '<span><a target="_blank" href="http://maps.google.com/maps?f=q&source=s_q&hl=fr&geocode=&q=Francine+Boura+++81,+rue+des+Fontaines+89500+%E2%80%93+Marsangy&aq=&sll=48.117173,3.234015&sspn=0.046987,0.110979&ie=UTF8&hq=Francine+Boura&hnear=81+Rue+des+Fontaines,+89500+Marsangy,+Yonne,+Bourgogne,+France&t=h&ll=48.119394,3.220582&spn=0.003875,0.013872&z=17&iwloc=A">Itinéraire et plan sur Google Maps</a></span></div>';   
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