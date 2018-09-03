<?php 
/* Template Name: defaultPage Template */
?>
<?php get_header(); ?> 
<hr class="hr-div hr-none" style="border-color:#f1f1f1;">

<div class="product-details">
	<div class="container img-pos">
		<div class="row">
			<div class="col-md-12 page-title">
				<h1><?php
        bloginfo('name');
        if (wp_title('', false)) {
            echo '|';
        } else {
            echo bloginfo('description');
        } wp_title('');
        ?></h1>
			</div>
			<div class="image">	
				
				<?php $url_new = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'full') );   ?>
  <?php if($url_new != ""){   ?>
	<img src="<?php echo $url_new; ?>" class="img-responsive" style="margin-bottom:30px;">
	<?php }  ?>
			</div>
			<div class="col-md-12">
			<?php 
if ( have_posts() ) {
while ( have_posts() ) {
the_post(); 

the_content(); 

} // end while
} // end if
?>			
				
			</div>
		</div>
	</div>
</div>

	<!-- <div class="container-fluid img-pos">
		<div class="row">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new.jpg" alt="" class="img-responsive mobile-ban-img" >
			
		</div>
	</div>

 -->


<?php get_footer();?>