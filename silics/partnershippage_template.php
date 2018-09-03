<?php 
/* Template Name: partnershipPage Template */
?>
<?php get_header(); ?> 


	<hr class="hr-div hr-none" style="border-color:#f1f1f1;">
	
	
	
	
	
<!---Under Construction Part-->
    <div class="partner-page">    
        <div class="container">
			<div class="row">
				<div class="col-md-12 page-title">
					<h1>Partnership</h1>
				</div>
				<div class="col-sm-8 col-sm-offset-2">
					
			
					<?php 
                 if ( have_posts() ) {
                 while ( have_posts() ) {
                 the_post(); 

                the_content(); 

              } // end while
              } // end if
              ?>

					<br><br><br><br>
					
					<form id="regForm" action="">

						<!-- One "tab" for each step in the form: -->
						<div class="tab">
								<div class="form-group">
									<label for="">First Name</label>
									<input type="text" class="form-control" id="">
								</div>
								<div class="form-group">
									<label for="">Last Name</label>
									<input type="text" class="form-control" id="">
								</div>
								<div class="form-group">
									<label for="">Company / Organization</label>
									<input type="text" class="form-control" id="">
								</div>
								<div class="form-group">
									<label for="">Job Title / Responsibility</label>
									<input type="text" class="form-control" id="">
								</div>
								<div class="form-group">
									<label for="email">Email </label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="email">Phone Number </label>
									<input type="number" class="form-control" id="">
								</div>
						</div>

						<div class="tab">
							<div class="form-group">
								<label for="email">Country</label>
								<select id="mauticform_input_partnership_country" name="mauticform[country]" value="" class="form-control mauticform-selectbox">                    <option value=""></option>                    <option value="Afghanistan">Afghanistan</option>                    <option value="Albania">Albania</option>                    <option value="Algeria">Algeria</option>                    <option value="Andorra">Andorra</option>                    <option value="Angola">Angola</option>                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>                    <option value="Argentina">Argentina</option>                    <option value="Armenia">Armenia</option>                    <option value="Australia">Australia</option>                    <option value="Austria">Austria</option>                    <option value="Azerbaijan">Azerbaijan</option>                    <option value="Bahamas">Bahamas</option>                    <option value="Bahrain">Bahrain</option>                    <option value="Bangladesh">Bangladesh</option>                    <option value="Barbados">Barbados</option>                    <option value="Belarus">Belarus</option>                    <option value="Belgium">Belgium</option>                    <option value="Belize">Belize</option>                    <option value="Benin">Benin</option>                    <option value="Bhutan">Bhutan</option>                    <option value="Bolivia">Bolivia</option>                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>                    <option value="Botswana">Botswana</option>                    <option value="Brazil">Brazil</option>                    <option value="Brunei">Brunei</option>                    <option value="Bulgaria">Bulgaria</option>                    <option value="Burkina Faso">Burkina Faso</option>                    <option value="Burundi">Burundi</option>                    <option value="Cape Verde">Cape Verde</option>                    <option value="Cambodia">Cambodia</option>                    <option value="Cameroon">Cameroon</option>                    <option value="Canada">Canada</option>                    <option value="Central African Republic">Central African Republic</option>                    <option value="Chad">Chad</option>                    <option value="Chile">Chile</option>                    <option value="China">China</option>                    <option value="Colombia">Colombia</option>                    <option value="Comoros">Comoros</option>                    <option value="Republic of the Congo">Republic of the Congo</option>                    <option value="Costa Rica">Costa Rica</option>                    <option value="Croatia">Croatia</option>                    <option value="Cuba">Cuba</option>                    <option value="Cyprus">Cyprus</option>                    <option value="Czech Republic">Czech Republic</option>                    <option value="Denmark">Denmark</option>                    <option value="Djibouti">Djibouti</option>                    <option value="Dominica">Dominica</option>                    <option value="Dominican Republic">Dominican Republic</option>                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>                    <option value="East Timor">East Timor</option>                    <option value="Ecuador">Ecuador</option>                    <option value="Egypt">Egypt</option>                    <option value="El Salvador">El Salvador</option>                    <option value="Equatorial Guinea">Equatorial Guinea</option>                    <option value="Eritrea">Eritrea</option>                    <option value="Estonia">Estonia</option>                    <option value="Ethiopia">Ethiopia</option>                    <option value="Fiji">Fiji</option>                    <option value="Finland">Finland</option>                    <option value="France">France</option>                    <option value="Gabon">Gabon</option>                    <option value="Gambia">Gambia</option>                    <option value="Georgia">Georgia</option>                    <option value="Germany">Germany</option>                    <option value="Ghana">Ghana</option>                    <option value="Greece">Greece</option>                    <option value="Grenada">Grenada</option>                    <option value="Guatemala">Guatemala</option>                    <option value="Guinea">Guinea</option>                    <option value="Guinea Bissau">Guinea Bissau</option>                    <option value="Guyana">Guyana</option>                    <option value="Haiti">Haiti</option>                    <option value="Holy See">Holy See</option>                    <option value="Honduras">Honduras</option>                    <option value="Hungary">Hungary</option>                    <option value="Iceland">Iceland</option>                    <option value="India">India</option>                    <option value="Indonesia">Indonesia</option>                    <option value="Iran">Iran</option>                    <option value="Iraq">Iraq</option>                    <option value="Ireland">Ireland</option>                    <option value="Israel">Israel</option>                    <option value="Italy">Italy</option>                    <option value="Ivory Coast">Ivory Coast</option>                    <option value="Jamaica">Jamaica</option>                    <option value="Japan">Japan</option>                    <option value="Jordan">Jordan</option>                    <option value="Kazakhstan">Kazakhstan</option>                    <option value="Kenya">Kenya</option>                    <option value="Kiribati">Kiribati</option>                    <option value="Kuwait">Kuwait</option>                    <option value="Kyrgyzstan">Kyrgyzstan</option>                    <option value="Laos">Laos</option>                    <option value="Latvia">Latvia</option>                    <option value="Lebanon">Lebanon</option>                    <option value="Lesotho">Lesotho</option>                    <option value="Liberia">Liberia</option>                    <option value="Libya">Libya</option>                    <option value="Liechtenstein">Liechtenstein</option>                    <option value="Lithuania">Lithuania</option>                    <option value="Luxembourg">Luxembourg</option>                    <option value="Madagascar">Madagascar</option>                    <option value="Malawi">Malawi</option>                    <option value="Malaysia">Malaysia</option>                    <option value="Maldives">Maldives</option>                    <option value="Mali">Mali</option>                    <option value="Malta">Malta</option>                    <option value="Marshall Islands">Marshall Islands</option>                    <option value="Mauritania">Mauritania</option>                    <option value="Mauritius">Mauritius</option>                    <option value="Mexico">Mexico</option>                    <option value="Micronesia">Micronesia</option>                    <option value="Moldova">Moldova</option>                    <option value="Monaco">Monaco</option>                    <option value="Mongolia">Mongolia</option>                    <option value="Montenegro">Montenegro</option>                    <option value="Morocco">Morocco</option>                    <option value="Mozambique">Mozambique</option>                    <option value="Myanmar">Myanmar</option>                    <option value="Namibia">Namibia</option>                    <option value="Nauru">Nauru</option>                    <option value="Nepal">Nepal</option>                    <option value="Netherlands">Netherlands</option>                    <option value="New Zealand">New Zealand</option>                    <option value="Nicaragua">Nicaragua</option>                    <option value="Niger">Niger</option>                    <option value="Nigeria">Nigeria</option>                    <option value="North Korea">North Korea</option>                    <option value="Norway">Norway</option>                    <option value="Oman">Oman</option>                    <option value="Pakistan">Pakistan</option>                    <option value="Palau">Palau</option>                    <option value="Panama">Panama</option>                    <option value="Papua New Guinea">Papua New Guinea</option>                    <option value="Paraguay">Paraguay</option>                    <option value="Peru">Peru</option>                    <option value="Philippines">Philippines</option>                    <option value="Poland">Poland</option>                    <option value="Portugal">Portugal</option>                    <option value="Qatar">Qatar</option>                    <option value="Romania">Romania</option>                    <option value="Russia">Russia</option>                    <option value="Rwanda">Rwanda</option>                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>                    <option value="Saint Lucia">Saint Lucia</option>                    <option value="Samoa">Samoa</option>                    <option value="San Marino">San Marino</option>                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>                    <option value="Saudi Arabia">Saudi Arabia</option>                    <option value="Senegal">Senegal</option>                    <option value="Serbia">Serbia</option>                    <option value="Seychelles">Seychelles</option>                    <option value="Sierra Leone">Sierra Leone</option>                    <option value="Singapore">Singapore</option>                    <option value="Slovakia">Slovakia</option>                    <option value="Slovenia">Slovenia</option>                    <option value="Solomon Islands">Solomon Islands</option>                    <option value="Somalia">Somalia</option>                    <option value="South Africa">South Africa</option>                    <option value="South Korea">South Korea</option>                    <option value="South Sudan">South Sudan</option>                    <option value="Spain">Spain</option>                    <option value="Sri Lanka">Sri Lanka</option>                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>                    <option value="Palestine">Palestine</option>                    <option value="Sudan">Sudan</option>                    <option value="Suriname">Suriname</option>                    <option value="Swaziland">Swaziland</option>                    <option value="Sweden">Sweden</option>                    <option value="Switzerland">Switzerland</option>                    <option value="Syria">Syria</option>                    <option value="Taiwan">Taiwan</option>                    <option value="Tajikistan">Tajikistan</option>                    <option value="Tanzania">Tanzania</option>                    <option value="Macedonia">Macedonia</option>                    <option value="Thailand">Thailand</option>                    <option value="Togo">Togo</option>                    <option value="Tonga">Tonga</option>                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>                    <option value="Tunisia">Tunisia</option>                    <option value="Turkey">Turkey</option>                    <option value="Turkmenistan">Turkmenistan</option>                    <option value="Tuvalu">Tuvalu</option>                    <option value="United Kingdom">United Kingdom</option>                    <option value="United States">United States</option>                    <option value="Unknown">Unknown</option>                    <option value="Uganda">Uganda</option>                    <option value="Ukraine">Ukraine</option>                    <option value="United Arab Emirates">United Arab Emirates</option>                    <option value="Uruguay">Uruguay</option>                    <option value="Uzbekistan">Uzbekistan</option>                    <option value="Vanuatu">Vanuatu</option>                    <option value="Venezuela">Venezuela</option>                    <option value="Vietnam">Vietnam</option>                    <option value="Yemen">Yemen</option>                    <option value="Zambia">Zambia</option>                    <option value="Zimbabwe">Zimbabwe</option>                </select>
							</div>
							<div class="form-group">
								<label for="">State / Province / Region</label>
								<input type="text" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">City</label>
								<input type="text" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Address</label>
								<input type="text" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Postal / Zip Code</label>
								<input type="number" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Partner type</label>
									<div class="checkbox">
									  <label><input type="checkbox" value="">Retailer</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value="">eTailer</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value="">Distributor</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value=""> Catalogue owner</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value=""> Other</label>
									</div>									
							</div>
							<div class="form-group">
								<label for="">Category of products sold</label>
									<div class="checkbox">
									  <label><input type="checkbox" value="">Consumer Electronics</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value="">Apple Devices / Accessories</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value="">Android Devices / Accessories</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value=""> Fishing tackle / gear</label>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" value=""> Tech Gadgets</label>
									</div>	
									<div class="checkbox">
									  <label><input type="checkbox" value=""> Other</label>
									</div>									
							</div>
						</div>

						<div class="tab">
							<div class="form-group">
								<label for="">Annual Revenue</label>
								<select id="mauticform_input_partnership_annual_revenue" name="mauticform[annual_revenue]" value="new" class="form-control">                    <option value="new" selected="selected">New business</option>                    <option value="100k">Less than 100 000 USD</option>                    <option value="500k">100 000 - 500 000 USD</option>                    <option value="1mln">500 000 - 1 mln USD</option>                    <option value="10mln">1 - 10 mln USD</option>                    <option value="more">10 mln and more</option>                </select>
							</div>
							<div class="form-group">
								<label for="">How would you like to buy our product</label>
								<select id="mauticform_input_partnership_how_would_you_like_to_buy"  value="direct" class="form-control">                    <option value="direct" selected="selected">Direct</option>                    <option value="distributor">Distributor</option>                    <option value="both">Both</option>                </select>
							</div>
							<div class="form-group">
								<label for="">Number of stores or locations you represent</label>
								<select id="mauticform_input_partnership_number_of_stores_or_locat" name="mauticform[number_of_stores_or_locat]" value="5" class="form-control">                    <option value="5">1-5</option>                    <option value="10">6-10</option>                    <option value="30">11-30</option>                    <option value="50">31-50</option>                    <option value="100">51-100</option>                    <option value="200">101-200</option>                    <option value="more">200 and more</option>                </select>
							</div>
							<div class="form-group">
								<label for="">Number of Employees</label>
								<select id="mauticform_input_partnership_number_of_employees" value="5" class="form-control">                    <option value="5">1-5</option>                    <option value="10">6-10</option>                    <option value="50">11-50</option>                    <option value="100">51-100</option>                    <option value="500">101-500</option>                    <option value="more">500 and more</option>                </select>
							</div>
						</div>

						<div class="tab">
							<div class="form-group">
								<label for="">Comments or Questions</label>
								<textarea class="form-control" rows="5" id=""></textarea>
							</div>
						</div>

						<div style="overflow:auto;">
						  <div style="float:right;">
							<button type="button" class="partner-button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
							<button type="button" class="partner-button" id="nextBtn" onclick="nextPrev(1)">Next</button>
						  </div>
						</div>

						<!-- Circles which indicates the steps of the form: -->
						<div style="text-align:center;margin-top:40px;">
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						  <span class="step"></span>
						</div>

						</form>
				</div>
			</div>
		</div><!--/container-->
	</div>


	
	





<?php get_footer(); ?> 