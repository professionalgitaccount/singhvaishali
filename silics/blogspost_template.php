<?php 
/* 
Template Name: blogspost Template

Description: This is for blogs post only

Author: Technowebsy
 */
?>
<?php get_header(); ?>      
 

   
<section class="all-services"><!------------------------>
    <div class="container">
		<div class="row">
		<?php if( have_posts() ) {
    while (have_posts()) : the_post(); ?>
			<div class="col-md-9">
							
							<div class="grid_13 col-md-12 col-sm-12">
							 <?php if(has_post_thumbnail()){  
									$imgurl1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full');   ?>
												 <?php
$img_id_5 = get_post_thumbnail_id( $post->ID ); //Note: you may need other methods to get id
  $alt_text_5 = get_post_meta( $img_id_5, '_wp_attachment_image_alt', true  );
  ?>

								<img src="<?php  echo $imgurl1[0]; ?> " class="img-responsive center-block" alt="<?php echo $alt_text_5; ?>" />
						<?php }  ?>
								
								<div class="blog_content" style="margin-top:20px;"> 
									  <h2 style="color:#347db9;"><a href=" <?php the_permalink(); ?>" title="<?php the_title(); ?>" style="color:#347db9;"><?php the_title(); ?></a></h2>
									  <h4> By <span><?php the_author(); ?></a>&nbsp; | &nbsp;<?php echo get_the_date(); ?>   &nbsp;</h4>
									
									<?php the_content(); ?>
										
									<div class="clear"></div> 
								</div>
							</div>
		
					</div>
					<?php endwhile;
				}  ?>

			<div class="col-md-3">
					<div class="title">
				<h2 style="color:#347db9;">Recent Blogs</h2>
				</div>
					
		<?php 
$args = array( 'post_type' => 'blogs', 'posts_per_page' => 4, 'orderby'=>'date', 'order' => 'ASC');
$wp_query = new WP_Query($args);
while ( $wp_query->have_posts() ) : $wp_query->the_post(); 

?>
<div class="row">
		<!----<div class="red-box col-md-4 col-sm-3 col-xs-3">
								
									
									<div class="blog_img" >
									 <?php //if(has_post_thumbnail()){  
								//	$imgurl1 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'thumbnail');   ?>

								<img src="<?php  //echo $imgurl1[0]; ?> " class="img-responsive center-block" alt="" />
						<?php // }  ?>
										 
									</div>   
								
							</div>  ---->
					 <div class="white-box col-md-12 col-sm-12 col-xs-12">
					<p class="recent_blogs_title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
						<?php
						foreach($ids as $id){
  $link = get_permalink($id);
  $title = get_the_title($id);
  $links .= '<a href="'.$link.'">'.$title.'</a>'.'<br/>' ;?>
  //$links .= $link . ' <br>';
}
					</p>
					<p class="recent_blogs_date">On <?php echo get_the_date(); ?>  </p>
				</div>
				</div>
<?php endwhile; ?>


			</div>
		
		
		
		
		
						
					
					
					
        </div>
    </div>
</section>



<?php get_footer();?>