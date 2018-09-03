<?php
/*
Template Name: homepage Template
*/
?>

<?php
get_header();
?>


<!---------Blue Line above Banner--------------------->
	<div id="NotificationPromo" class="notification notification--promo notification--active" data-text="nemokamas-pristatymas-nuo-14" aria-hidden="false">
		<div class="alert alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<div class="page-width notification__inner ">
				<span class="notification__message"><a href="homepage_template.php#features">Free shipping from € 14</a></span>
			</div>
		</div>
	</div> 
   
   
   
<!---Banner-->
	<div class="container-fluid img-pos">
		<div class="row">
			  <img src="<?php the_field('image_1'); ?>" class="img-responsive">
			<div class="centered">
				<h1><?php the_field('title_1'); ?></h1>
				<p><?php the_field('description_1'); ?></p>
				
			</div> 
		</div>
	</div>



<!---Sample Product Image-->
	<div class="sample-product">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<img src="<?php the_field('image_2'); ?>" class="img-responsive img-margin">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="<?php the_field('image_3'); ?>" class="img-responsive img2-margin">
					<h2><?php the_field('title_2'); ?></h2>
					
					<p class="prod-para"><?php the_field('description_2'); ?></p>
					
					<p class="prod-link"><a href="#">More information</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container"><div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><hr class="hr-div"></div></div></div>



<!---------OUR PRODUCT-------------->
	<div class="our-products">
		<div class="container">
			<div class="row">	
				<div class="col-sm-12">
					<h2 class="section-title"><?php the_field('title_3'); ?></h2>
					<!-- <h2 class="section-title">Our Products</h2> -->
				</div>
				<div class="col-sm-4">
					<a href="product.php" class="single-product">
						<div class="product-image">
							 <img src="<?php the_field('image_4'); ?>" class="img-responsive center-block"> 
						</div>
						<div class="product-info">
							<h2><?php the_field('title_4'); ?></h2>
							
							<p><?php the_field('description_4'); ?></p>
					
						</div>
						<div class="product-overlay">
							<span class="btn product-card__overlay-btn  btn--narrow">
								<font style="vertical-align: inherit;">review</font>
							</span>
						</div>					
					</a>
				</div>
				<div class="col-sm-4">
					<a href="product.php" class="single-product">
						<div class="product-image">
							<img src="<?php the_field('image_5'); ?>" class="img-responsive center-block"> 
						</div>
						<div class="product-info">
							<h2><?php the_field('title_5'); ?></h2>
							
							<p><?php the_field('description_5'); ?></p>
							
						</div>
						<div class="product-overlay">
							<span class="btn product-card__overlay-btn  btn--narrow">
								<font style="vertical-align: inherit;">review</font>
							</span>
						</div>					
					</a>
				</div>
				<div class="col-sm-4">
					<a href="product.php" class="single-product">
						<div class="product-image">
							<img src="<?php the_field('image_6'); ?>" class="img-responsive center-block"> 
						</div>
						<div class="product-info">
							<h2><?php the_field('title_6'); ?></h2>
							
							<p><?php the_field('description_6'); ?></p>
							
						</div>
						<div class="product-overlay">
							<span class="btn product-card__overlay-btn  btn--narrow">
								<font style="vertical-align: inherit;">review</font>
							</span>
						</div>					
					</a>
				</div>
			</div>
		</div>
	</div>	

	<div class="container"><div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><hr class="hr-div"></div></div></div>




<!----Blue Background image---->
	<div class="blue-image">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="img-pos">
						<img src="<?php the_field('image_7'); ?>" class="img-responsive"> 
						<div class="blue-img-text">
							<h1><?php the_field('title_7'); ?></h1>

							
							<a href="#" role="button" class="btn1">More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container"><div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><hr class="hr-div"></div></div></div>




<!----Features ---->
<a id="features"></a>
	<div class="features">
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12 text-center">
				<div class="feature-box">
					<a href="#">
						<img src="<?php the_field('image_8'); ?>" class="img-size">
						<h3><?php the_field('title_8'); ?></h3>
						<p><?php the_field('description_8'); ?></p>
						<!-- <h3>Free Shipping from € 14 </h3>
						<p>Delivery within 1-3 dd</p> -->
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 text-center">
				<div class="feature-box">
					<a href="#">
						<img src="<?php the_field('image_9'); ?>" class="img-size">
						<h3><?php the_field('title_9'); ?></h3>
						<p><?php the_field('description_9'); ?></p>
						<!-- <h3>Need Advice?</h3>
						<p>Contact us in chat or tel. +370 5260 3926</p> -->
					</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 text-center">
				<div class="feature-box">
					<a href="#">
						<img src="<?php the_field('image_10'); ?>" class="img-size">
						<h3><?php the_field('title_10'); ?></h3>
						<p><?php the_field('description_10'); ?></p>
						<!-- <h3>Cheaper</h3>
						<p>Cheaper than the pharmacy</p> -->
					</a>
				</div>
			</div>
			</div>
		</div>
	</div>


<?php
get_footer();
?>