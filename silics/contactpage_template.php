<?php
/*
Template Name: contactpage Template
*/
?>

<?php
get_header();
?>
<hr class="hr-div hr-none" style="border-color:#f1f1f1;">

	
<!---Contact us Part-->
    <div id="contact" class="product-details">    
        <div class="container">
			<div class="row">
				<div class="col-md-12 page-title">
					<h1>Contact Us</h1>
				</div>
				<div class="col-sm-5">
					<form action="">
						<div class="form-group">
							<input type="text" class="form-control" id="" placeholder="Your Name*" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="" placeholder="Email ID*" required>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="" placeholder="Phone No.">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="5" id="" placeholder="Message"></textarea>
						</div>					  
						<button type="submit" class="btn send-button">Submit</button>
					</form>
				</div>
				<div class="col-sm-7">
					<ul class="contact-details">
						<li><i class="fa fa-phone"></i> <div class="cdr">Call Us: <br><h2><b><?php the_field('title_1'); ?></b></h2></div></li>
						<li><i class="fa fa-envelope"></i> <div class="cdr">Mail Us: <br><h2><b><?php the_field('title_2'); ?></b></h2></div></li>
						<li><i class="fa fa-map-marker"></i> <div class="cdr">Address: <br><b><?php the_field('title_3'); ?></b></div></li>
						<li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2305.702205853956!2d25.30722531588981!3d54.69726788028435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd969f9d4f66a1%3A0x1487ab8b4afdf393!2sAntakalnio+g.+17%2C+Vilnius+10312%2C+Lithuania!5e0!3m2!1sen!2sin!4v1532063268339" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></li>
					</ul>
				</div>
			</div>
		</div><!--/container-->
	</div>




<?php
get_footer();
?>