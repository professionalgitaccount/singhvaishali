<?php
/*
Template Name: checkoutpage Template
*/
?>
<?php
get_header();
?>
<hr class="hr-div hr-none" style="border-color:#f1f1f1;">
	
	
<!--checkout part -->
    <div class="product-details">    
        <div class="container">
			<div class="checkout-page">

				<!-- <ul class="default-links">
				<li>Exisitng Customer? <a href="#"><strong>Click here to login</strong></a></li>
				</ul> -->
				<div class="row">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<div class="billing-details">
							<div class="shop-form">
								<form method="post">
									<div class="default-title">
										<h2>Billing Details</h2>
									</div>
									<div class="row">
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>First name <sup>*</sup></label>
											<input type="text" name="field-name" value="" placeholder="Jhon" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Last name <sup>*</sup></label>
											<input type="text" name="field-name" value="" placeholder="Doe" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Company name</label>
											<input type="text" name="field-name" value="" placeholder="Company" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Email Address <sup>*</sup></label>
											<input type="email" name="field-name" value="" placeholder="jhon@gmail.com" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Phone <sup>*</sup></label>
											<input type="text" name="field-name" value="" placeholder="0044 43345523" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Address <sup>*</sup></label>
											<input type="text" name="field-name" value="" placeholder="Street name" class="form-control">
										</div>
										<div class="form-group col-md-12 col-sm-12 col-xs-12">
											<label>Country <sup>*</sup></label>
											<select name="country" class="form-control">
												<option>United Kingdom (UK)</option>
												<option>Pakistan</option>
												<option>USA</option>
												<option>CANADA</option>
												<option>INDIA</option>
											</select>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>Zip / Postal Code</label>
											<input type="text" name="code" value="" placeholder="Zip / Postal Code" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<label>City <sup>*</sup></label>
											<select name="state" class="form-control">
												<option>City</option>
												<option>Maharshtra</option>
												<option>NY</option>
												<option>ALabama</option>
												<option>Mexico</option>
											</select>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="check-box">
												<input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Create an account?</label>
											</div>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<label>Order note</label>
											<textarea placeholder="Notes about your order, e.g. special notes for delivery" class="form-control"></textarea>
										</div>
									</div>
								</form>
							</div>
						</div><!--End Billing Details-->
					</div><!--End Col-->
					
					<div class="col-md-5 col-sm-12 col-xs-12">
						<div class="your-order">
							<div class="default-title" style="margin-bottom:0;">
								<h2>Your Order</h2>
							</div>
							<ul class="orders-table">
								<li class="clearfix">
									<div class="col" style="text-transform:none;">
										<img src="images/product01.png" width="50" height="50" alt=""> Smoke Sensor
									</div>
									<div class="col second">
										$15.00
									</div>
								</li>
								<li class="clearfix">
									<div class="col" style="text-transform:none;">
										SubTotal
									</div>
									<div class="col second">
										$15.00
									</div>
								</li>
								<li class="clearfix total">
									<div class="col">
										<strong>Order Total</strong>
									</div>
									<div class="col second">
										<strong>$15.00</strong>
									</div>
								</li>
							</ul>
							<div class="coupon-code">
								<div class="form-group">
									<div class="field-group">
										<input type="text" name="code" value="" placeholder="Coupon Code" class="form-control">
									</div>
									<div class="field-group btn-field">
										<button type="submit" class="btn_cart_outine">Apply</button>
									</div>
								</div>
							</div>
						</div><!--End Your Order-->

						<div class="place-order add_bottom_30">
							<div class="default-title">
								<h2>Payment Method</h2>
							</div>
							<div class="payment-options">
								<ul>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-1">
											<label for="payment-1">Cheque Payment<span class="small-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
										</div>
									</li>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-2">
											<label for="payment-2">Direct Bank Transfer</label>
										</div>
									</li>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment-group" id="payment-3">
											<label for="payment-3">Paypal<img src="img/credit-card-icon.png" alt=""></label>
										</div>
									</li>
								</ul>
							</div>
							<button type="button" class="btn_full">Place Order <i class="icon-left"></i></button>
						</div><!--End Place Order-->
					</div>
				</div>
			
			</div>
		</div><!--/container-->
	</div>



<?php
get_footer();
?>