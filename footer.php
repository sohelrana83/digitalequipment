<footer class="footer">
    <div class="copyright">
        &copy;. All rights are reserved by <a href="#">MIZAN IT LTD.</a>	
    </div>
</footer>

	<div id="bgImgChange" style="height: 667px; width: 1349px;">
	
	
	
	
	<!-- Slider image -->
	
	<img class="bgfade" src="images/background_images5.jpg" alt="Background-image5" style="display: inline;">
	 <img class="bgfade" src="images/background_images6.jpg" alt="Background-image6" style="display: none;">
	 <img class="bgfade" src="images/background_images1.jpg" alt="Background-image1" style="display: none;">
	<img class="bgfade" src="images/background_images2.jpg" alt="Background-image2" style="display: none;">
	<img class="bgfade" src="images/background_images3.jpg" alt="Background-image3" style="display: none;">
	<img class="bgfade" src="images/background_images4.jpg" alt="Background-image4" style="display: none;">
	</div>    
    
    <!-- SCRIPTS -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-easing.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/portfolio-setter.js"></script>
    <script type="text/javascript" src="js/js"></script>
	<!-- END SCRIPTS -->
    
    
	  <script type="text/javascript">
		
		/*$(window).load(function(){
			$('img.bgfade').hide();
			var dg_H = $(window).height();
			var dg_W = $(window).width();
			//alert(dg_W + " - " + dg_H);
			$('#bgImgChange').css({'height':dg_H,'width':dg_W});
			function animation() {
				$("#bgImgChange img.bgfade").first().appendTo('#bgImgChange').fadeOut(1500);
				$("#bgImgChange img").first().fadeIn(1500);
				setTimeout(anim, 6000);
			}
			animation();
		})*/
		
		$(window).load(function(){
		$('img.bgfade').hide();
		var dg_H = $(window).height();
		var dg_W = $(window).width();
		$('#bgImgChange').css({'height':dg_H,'width':dg_W});
		function anim() {
		    $("#bgImgChange img.bgfade").first().appendTo('#bgImgChange').fadeOut(1500);
		    $("#bgImgChange img").first().fadeIn(1500);
		    setTimeout(anim, 6000);
		}
		anim(); });
		
		//$(window).resize(function(){window.location.href=window.location.href})
		
		function init_map(){
			var myOptions = {
				zoom:14,
				center:new google.maps.LatLng(23.75902313789197,90.38670257354124),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.75902313789197, 90.38670257354124)});
			infowindow = new google.maps.InfoWindow({content:"<b>Graphic Aid :</b>TMC Building (4th Floor)<br/>52 New Eskaton Road Dhaka-1000,<br/>Bangladesh." });
			google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
			infowindow.open(map,marker);
		}
		google.maps.event.addDomListener(window, 'load', init_map);
		
		
		
		
		$('#portfolio_wavy').portfolioSetter({xmlSource:'http://graphic-aid.com/wp-content/themes/graphicaid_responsive/portfolio.xml', wavyAnimation:true});
		 
		

		$('#clickMe').click(function() {
            if($("#discoverMe").is(":hidden")){
					$('#discoverMe').fadeIn("slow");
			}
			else{
				$('#discoverMe').fadeOut("slow");
			}
        });
		$("#discoverMe").mouseleave(function(){
			$(this).fadeOut();
		});

		$(document).ready(function(){
			$('.port_cat').click();
		});

		var flashvars = {};
		var params = { wmode: "opaque" };
		var attributes = {};
		 
		swfobject.embedSWF("movie.swf", "flash", "600", "340", "7",
		                  "expressinstall.swf", flashvars, params, attributes);
		
		
	</script> -->
	</div>

 
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/functions.js"></script>



</body></html>