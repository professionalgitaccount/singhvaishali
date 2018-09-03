<?php
/*
Template Name: productpage Template
*/
?>

<?php
get_header();
?>


<hr class="hr-div hr-none" style="border-color:#f1f1f1;">

<!--Product Details-->
	<div class="product-details">
		<div class="container">
			<div class="rows">			
				<div class="col-sm-5 wow bounceIn animated">
					<div class="product-img owl-carousel owl-theme">
						<div class="item"><a data-fancybox="gallery" href="<?php the_field('image_1'); ?>"><img src="<?php the_field('image_1'); ?>"  alt="polisorb plus 3g" /></a></div>
						<div class="item"><a data-fancybox="gallery" href="<?php the_field('image_2'); ?>"><img src="<?php the_field('image_2'); ?>"  alt="silica boitech" /></a></div>
						<div class="item"><a data-fancybox="gallery" href="<?php the_field('image_3'); ?>"><img src="<?php the_field('image_3'); ?>"  alt="enterosorbentas maisto papildas" /></a></div>
						<!--<div class="item"><img src="images/product04.png" alt="polisorb plus 3g" /></div>-->
					</div>
					<i class="banka_pulse">
                        <div></div>
                        <div></div>
                        <div></div>
                    </i>
				</div>
				<div class="basic-details info-column col-sm-6 fadeInRight wow animated">
					<div class="pro-details">
						<div class="details-header">
						<h1><?php the_field('title_1'); ?></h1>					
							
							<div class="item-price">
								<span class="offer">0,70 €</span> 0,60 €
							</div>
							
						</div>
						<div class="text">
							 <p><?php the_field('description_1'); ?></p>
							<p><?php the_field('description_2'); ?></p>
							<p><?php the_field('description_3'); ?></p>
							

						</div>
						<div class="other-options">
							<div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="">
                                          <span class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                            </div>
							
							<ul class="list-inline">
							<li>
							<button class="send-button">
							 <span class="text">Add To Cart</span>
							  <span class="icon-wrapper">
								<span class="icon-1 fa fa-cart-plus"></span>
									<span class="icon-2 fa fa-check"></span>
							  </span>
							</button>
							</li>
							<li><a href="<?php bloginfo('stylesheet_directory'); ?>/locationspage_template.php" class="buy-btn">Where to Buy</a></li>
							</ul>
							
							
							

						</div>
						
					</div>
				</div>
				
				<!---Product Description-->
				<div class="col-md-12 col-sm-12 col-xs-12 product-description">
				 	
					 <p><?php the_field('description_4'); ?></p>  
					
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="container">
			<div class="row">	
				<div class="col-sm-12">
					<h2 class="section-title"><?php the_field('title_2'); ?></h2>
						
					<!-- <h2 class="section-title">Our Products</h2> -->
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
				<div class="col-sm-4">
					<a href="product.php" class="single-product">
						<div class="product-image">
							<img src="<?php the_field('image_7'); ?>" class="img-responsive center-block">
						</div>
						<div class="product-info">
							<h2><?php the_field('title_7'); ?></h2>
							<p><?php the_field('description_7'); ?></p>
							
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

<?php
get_footer();
?>