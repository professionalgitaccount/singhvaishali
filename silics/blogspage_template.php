<?php 
/* Template Name: blogsPage Template */
?>
<?php get_header(); ?>      
 

   
<section id="services" class="services-a"><!------------------------>
    <div class="container">
		<div class="row">
		
	
    
	
		<?php 
$args = array( 'post_type' => 'blogs', 'posts_per_page' => -1, 'orderby'=>'date', 'order' => 'ASC');
$wp_query = new WP_Query($args);
while ( $wp_query->have_posts() ) : $wp_query->the_post();    

?>
<div class="blogs_list">
		 								<div class="blog_date_box red-box col-md-2 col-sm-3 col-xs-12">
								
									<div class="blog_date" style="padding: 10px;
text-align: center;">
										<?php if(has_post_thumbnail()){  
								$imgurl15 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'thumbnail');   ?>

								<img src="<?php  echo $imgurl15[0]; ?> " class="img-responsive center-block " alt="best-pest-control-service" />
						<?php  }  ?>
									</div>
									
								
							</div>
								 <div class="col-md-10 col-sm-9 col-xs-12">
									<h2 style="color:#347db9;"><a href="<?php the_permalink(); ?>" style="color:#347db9;"><?php the_title(); ?></a></h2>
								  <h4> By <span><?php the_author(); ?></a>&nbsp; | &nbsp;<?php echo get_the_date(); ?>   &nbsp;</h4>
									<div class="custom-excerpt">
									<p> <?php the_excerpt(); ?></p>
									</div>
									</div>
									
</div>
			
<?php endwhile;  ?>	





			
        </div>
    </div>
</section>




<?php get_footer();?>