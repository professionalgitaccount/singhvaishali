<!---Footer-->
	<div class="footer">
		<div class="container">
			<div class="outer-box">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-box">
						<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/images/building.png">&nbsp;CONTACTS </h3>
							<ul>
							<li>UAB,,Silico Biotechnologijios", i.k.304639660, Antakalnio g. 17, LT-10312, Vilnius.</li>
							<li>Tel.:&nbsp;&nbsp;+370 68772451</li>
							<li>El.p.&nbsp;&nbsp;<a href="mailto:info@silics.eu">info@silics.eu</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-box">
						<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/images/information-button.png">&nbsp;INFORMATION</h3>
						<ul>
							<li><a href="http://localhost/wordpress/purchase-condition/">Purchase rules</a></li>
							<li><a href="http://localhost/wordpress/privacy-policy/">Privacy Policy</a></li>
							<li><a href="contact.php">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-box">
						<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/images/help-button.png">&nbsp;HELP</h3>
						<ul>
							<li><a href="#">D.U.K.</a></li>
							<li><a href="http://localhost/wordpress/pristatymas/">Delivery</a></li>
							<li><a href="http://localhost/wordpress/grazinimas/">Refunds</a></li>
							<li><a href="#">Billing methods</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="footer-box">
						<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/images/link.png">&nbsp;Quick Link</h3>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="product.php">Products</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">For doctors</a></li>
							<li><a href="#">Partnership</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container"><hr class="hr-div"></div>
		<div class="container">
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="footer-end-box footer-text">
					<p>&copy;2018, Silica Biotech</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="footer-end-box social-icon-aln">
					<p>Communicate:&nbsp;<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt="facebook"></a></p>
				</div>
			</div>
		</div>
	</div>




	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.2.4.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.easeScroll.js"></script> 
	<!-- <script src="js/main.js"></script> -->
  
  
  
  
  
	<script>
		$("html").easeScroll();
	</script> 

	<script type="text/javascript">
	  function googleTranslateElementInit() {
		new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
	  }
	</script>
	
	<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

	<!-- Flag click handler -->
	<script type="text/javascript">
		$('.translation-links a').click(function() {
		  var lang = $(this).data('lang');
		  var $frame = $('.goog-te-menu-frame:first');
		  if (!$frame.size()) {
			alert("Error: Could not find Google translate frame.");
			return false;
		  }
		  $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
		  return false;
		});
	</script>
	
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5b39b85c4af8e57442dc3ed4/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

	
	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar-sticky");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

	
	
</body>
</html>