<?php
/*

Template Name: page Template

Description: This is page only

Author: Technowebsy
 */
get_header(); ?>


<?php  if ( is_shop() ) {   ?>


<!----inner-banner ----> 
    <div class="inner-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					
					<div class="caption">Shop Now</div>
					<ol class="breadcrumb">
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li class="active">Shop Now</li>
					</ol>

				</div>
			</div>
		</div>
	</div>   
<!----inner-banner  ----> 

<?php  }  ?>

<?php if( is_product() ) {  ?>

		<!----inner-banner ----> 
    <div class="inner-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<?php if( have_posts() ) {
    while (have_posts()) : the_post(); ?>
    
<?php 
global $post;
$terms = get_the_terms( $post->ID, 'product_cat' );
foreach ($terms as $term) {
    $product_cat_name = $term->name;
    $product_cat_slug = $term->slug;
    break;
}
?>
					<div class="caption"><?php the_title(); ?></div>
					<ol class="breadcrumb">
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><a href="<?php echo site_url(); ?>/<?php echo $product_cat_slug; ?>"><?php echo $product_cat_name; ?></a></li>
						<li class="active"><?php the_title(); ?></li>
					</ol>
<?php endwhile;
}  ?>

				</div>
			</div>
		</div>
	</div>   
<!----inner-banner  ----> 

<?php }  ?>


<section id="content" class="single-product product-view pro-category">
    <div class="container">
		<div class="row product-essential">
		<div class="col-sm-12 col-md-12">
		  
				<?php
				// Start the loop.
						//while ( have_posts() ) : the_post(); ?>

				<?php //the_content(); ?>
				<?php woocommerce_content(); ?>
				<?php	
					// End the loop.
					//endwhile;
				?>
				</div>
			 
        </div>
    </div>
   </div>
</br>

<?php get_footer(); ?>