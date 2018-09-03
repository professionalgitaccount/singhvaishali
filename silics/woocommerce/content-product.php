<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 === ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 === $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 === $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
?>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
							<div class="product-itm">
			<!----------
<li <?php // post_class( $classes ); ?>>

	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
//	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
//	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
//	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
//	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
//	do_action( 'woocommerce_after_shop_loop_item' );
	?>
    -------->


								<div class="product-img">
						<a href="<?php the_permalink(); ?>">
							 <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog img-responsive center-block');  else 
						echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" class="img-responsive center-block" />'; ?>
								<!----	<img src="images/veg1.jpg" class="img-responsive center-block" alt="" />  ---->
								</a>
						</div>
						
							<div class="product-det">
									<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
									
								
						
							<?php  
			/*  to get available attributes */
			$iouseg_attributes = $product->get_variation_attributes();
		//print_r($product);
		// $finl_avlble_atrbt=$iouseg_attributes[pa_quantity];
		/*  to get available attributes */
						 
		$new_temp_id=$product->id;
		$dgfg=$product->default_attributes; 

		//to get attributes
		$new_temp_attrbt=$dgfg[quantity];
							
		$new_temp_attrbt_2=$dgfg[pa_quantity];
						
		//to get variations
		$temp_variations = $product->get_available_variations();
						
		$temp_variations_inr=$temp_variations[0];
							
		$final_variations_inr=$temp_variations_inr[variation_id];  //variation id
		
		$available_variations = array();

        foreach ( $product->get_children() as $child_id ) {
            $variation = wc_get_product( $child_id );

            // Hide out of stock variations if 'Hide out of stock items from the catalog' is checked
            if ( ! $variation->exists() || ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) && ! $variation->is_in_stock() ) ) {
                continue;
            }

            // Filter 'woocommerce_hide_invisible_variations' to optionally hide invisible variations (disabled variations and variations with empty price)
            if ( apply_filters( 'woocommerce_hide_invisible_variations', false, $product->get_id(), $variation ) && ! $variation->variation_is_visible() ) {
                continue;
            }

            $available_variations[] = $product->get_available_variation( $variation );
        }
        ?>
  
        <form method="POST" action="" class="custm_frm_sbt">
       										<input type="hidden" name="add-to-cart" value="<?php echo $new_temp_id; ?>">
       										<input type="hidden" name="quantity" value="1">
       										<select class="cstm_qnty" name="variation_id">
      											<?php foreach($available_variations as $available_variations_new){ 
        													$first_row=$available_variations_new;
        													$first_row_new = $first_row[attributes];
        													
        													$first_row_final=$first_row_new['attribute_pa_quantity']; //variation name

        													$first_row_id = $first_row[variation_id]; // variation id
        													$first_display_price=$first_row['display_price'];
        													$first_display_regular_price=$first_row['display_regular_price'];
        													if($first_display_price != $first_display_regular_price){
        													$first_display_old_price=$first_display_regular_price;
        													}else{
        													$first_display_old_price="";
        													}
        													
        											?>
      											<option id="<?php if($first_display_old_price != "" ) { ?>Rs.<?php echo $first_display_old_price; ?>.00 <?php } ?>
      											<?php if($first_display_price != "" ) { ?>& Rs.<?php echo $first_display_price; ?>.00 <?php } ?>" 
      											value="<?php echo $first_row_id; ?>"><?php echo $first_row_final; ?> 
      											</option>
      											<?php } ?>
      			
      										</select>
      		
      										<?php  	$first_row1=$available_variations[0];
        													$first_row_new1 = $first_row1[attributes];
        													$first_row_final1=$first_row_new1['attribute_pa_quantity']; //variation name
        														$first_row_id1 = $first_row1['variation_id']; // variation id
        													$first_display_price1=$first_row1['display_price'];
        													$first_display_regular_price1=$first_row1['display_regular_price'];
        													if($first_display_price1 != $first_display_regular_price1){
        													$first_display_old_price1=$first_display_regular_price1;
        													}else{
        													$first_display_old_price1="";
        													}
        													
        										?>
       										<input type="hidden" name="attribute_pa_quantity" value="<?php echo $first_row_final1; ?>">
       										
 										
    											<button type="submit" id="submit" class="button btn-cart"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></button>
    										
 										</form>
 										<h4 class="prices"><strike>
 										<span class="variable_old_price" style="color:red;font-size:12px;">
 										<?php if($first_display_old_price1 != "" ) { ?>Rs.<?php echo $first_display_old_price1; ?>.00 <?php } ?>
 										</span></strike>
 										<span class="variable_price">
 										<?php if($first_display_price1 != "" ) { ?>Rs.<?php echo $first_display_price1; ?>.00 <?php } ?>
 										</span></h4>
 										</div>
								
								<div class="quick-view">
									<a href="<?php the_permalink(); ?>"><h4 class="qview">View Product</h4></a>			
								</div>
							
							</div>
						  </div><!------product-item------>

