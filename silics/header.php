<!DOCTYPE html>
<html lang="en">
<head>
	<title>SILICA BOITECH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
"palette": {
"popup": {
"background": "#000"
},
"button": {
"background": "#f1d600"
}
},
"showLink": false
})});
</script>
</head>
<body>

<!------Nav------>
	<header>
		<nav class="navbar navbar-default ">
			<div class="container ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
				  <a class="navbar-brand" href="index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"></a>
				
				</div>
				<ul class="navbar-nav navbar-right widget">
					<li>
						<ul class="list-unstyled list-inline ct-topbar__list">
							<li class="ct-language notranslate">Lang
								<ul class="list-unstyled ct-language__dropdown translation-links">
									<li><a href="#" class="english notranslate" data-lang="English"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flag/flag-usa.png" alt="English" class="pull-left">English </a></li>
									<li><a href="#" class="lithuanian notranslate" data-lang="Lithuanian"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flag/lithuanian.png" alt="Lithuanian" class="pull-left">Lithuanian</a></li>
									<li><a href="#" class="russian notranslate" data-lang="Russian"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flag/rasia.png" alt="Russian" class="pull-left">Russian</a></li>
								</ul>
							</li>
						</ul>
						<div id="google_translate_element" style="display:none"></div>
					</li>
					<li>
						<div class="block-cart">
							<div class="shopping_cart" style="background: url(<?php bloginfo('stylesheet_directory');?>/images/shopping-bag.png) no-repeat;background-size:24px">
								<div id="cart" class="btn-shopping-cart">
									<a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<div class="shopcart">
											<div class="shopcart-inner">                                                        
												<span class="total-shopping-cart cart-total-full">
													<span class="items_cart">02</span>															
												</span>
											</div>
										</div>
									</a>
									<ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
										<li>
											<table class="table table-striped">
												<tbody>
													<tr>                                                            
														<td class="text-center">
															<a href="product.html">
																<img src="<?php bloginfo('stylesheet_directory'); ?>/images/product01.png" style="width:50px" alt="Xancetta bresao" title="Xancetta bresao" class="preview">
															</a>
														</td>
														<td class="text-left"> <a class="cart_product_name" href="product.html">POLISORB Plius/ SILASITA</a> 
														</td>
														<td class="text-center"> x1 </td>
														<td class="text-center">0,60 €</td>                                                                
														<td class="text-right">
															<a onclick="cart.remove('1');" class="fa fa-times"></a>
														</td>
													</tr>
												</tbody>
											</table>
										</li>
										<li>
											<div>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="text-left"><strong>Sub-Total</strong></td>
															<td class="text-right">0,60 €</td>
														</tr>
														<tr>
															<td class="text-left"><strong>Eco Tax (-2.00)</strong></td>
															<td class="text-right">0,00 €</td>
														</tr>
														<tr>
															<td class="text-left"><strong>VAT (20%)</strong></td>
															<td class="text-right">0,00 €</td>
														</tr>
														<tr>
															<td class="text-left"><strong>Total</strong></td>
															<td class="text-right">0,60 €</td>
														</tr>
													</tbody>
												</table>
												<p class="text-center total-carts"> <a class="btn view-cart" href="#cart.php"><i class="icon-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="icon-share-2"></i> Checkout</a></p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div id="navbar-sticky" class="nav-bar">
				<div class="container">
					<div class="collapse navbar-collapse" id="myNavbar">
						<!-- <ul class="nav navbar-nav ">
							<li><a href="index.php">Home</a></li>
							<li><a href="product.php">Products</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">For doctors</a></li>
							<li><a href="#">Partnership</a></li>
						</ul> -->
									<?php
		   $defaults = array( 'menu' => '', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'menu_class' => 'menu', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => '', 'theme_location' => 'header_menu' );
 
    //$args = wp_parse_args( $args, $defaults );
	
	echo wp_nav_menu( $defaults );
	
		?>
					</div>
				</div>
			</div>
		</nav>
	</header>
