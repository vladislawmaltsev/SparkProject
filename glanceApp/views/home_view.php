<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
<?php $this->load->view('common/meta_tags'); ?>
<?php $this->load->view('common/before_head_close'); ?>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<!--Site Wraper Start-->
<div class="siteWraper">
  <?php $this->load->view('common/header'); ?>
  
  <!--Form Section Start-->
  <?php if(!$this->session->userdata('is_user_login')):?>
  <div class="searchForm">
    <div class="container"> 
      <!--Signup Start-->
      <div class="row">
      	<div class="col-md-4 col-sm-5">
        	<div class="signupBox">
        <h1>Sign Up</h1>
        <div class="formboxWrap">
          <form name="frm" id="frm" method="post" action="">
            <div class="formbox">
              <label>Username *</label>
              <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" class="form-control" />
              <?php echo form_error('username', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formbox">
              <label>Password *</label>
              <input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password'); ?>" />
              <?php echo form_error('password', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formbox">
              <label>Email *</label>
              <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>" />
              <?php echo form_error('email', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="formbox">
            	<div class="row">
                    <div class="col-md-6 col-sm-6">
                    	  <label>I'm a *</label>
                          <select name="gender" id="gender" class="form-control">
                            <option value="male" selected="selected">Man</option>
                            <option value="female">Woman</option>
                          </select>
                          <?php echo form_error('gender', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                    <div class="col-md-6 col-sm-6">
                    	  <label>Seeking a</label>
                          <select name="seeking_for" id="seeking_for" class="form-control">
                            <option value="Female" selected="selected">Woman</option>
                            <option value="Male">Man</option>
                          </select>
                          <?php echo form_error('seeking_for', '<div class="error"><span>', '</span></div>'); ?>
                    </div>
                </div>              
            </div>
            <div class="formbox">
              <label>Birthday *</label>
              <div class="row">
              	<div class="col-md-4 col-sm-4">
                	<select name="birth_month" id="birth_month" class="form-control">
                <option value="<?php echo set_value('birth_month'); ?>" selected="selected"><?php echo (set_value('birth_month'))?set_value('birth_month'):'Month'; ?></option>
                <?php
					for($i=1;$i<=12;$i++): ?>
                <option value="<?php echo sprintf("%02s", $i);?>"><?php echo sprintf("%02s", $i);?></option>
                <?php endfor; ?>
              </select>
              <?php echo form_error('birth_month', '<div class="error"><span>', '</span></div>'); ?>
                </div>
                <div class="col-md-4 col-sm-4">
                	<select name="birth_day" id="birth_day" class="form-control">
                <option value="<?php echo set_value('birth_day'); ?>" selected="selected"><?php echo (set_value('birth_day'))?set_value('birth_day'):'Day'; ?></option>
                <?php
					for($i=1;$i<=31;$i++): ?>
                <option value="<?php echo sprintf("%02s", $i);?>"><?php echo sprintf("%02s", $i);?></option>
                <?php endfor; ?>
              </select>
              <?php echo form_error('birth_day', '<div class="error"><span>', '</span></div>'); ?>
                </div>
                <div class="col-md-4 col-sm-4">
                	<select name="birth_year" id="birth_year" class="form-control">
                <option value="<?php echo set_value('birth_year'); ?>" selected="selected"><?php echo (set_value('birth_year'))?set_value('birth_year'):'Year'; ?></option>
                <?php
					for($i=1950;$i<=date('Y');$i++): ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php endfor; ?>
              </select>
              <?php echo form_error('birth_year', '<div class="error"><span>', '</span></div>'); ?>
                </div>
              </div>
              
              
              
              
              
              
              <div class="clear"></div>
            </div>
            <div class="formbox">
              <label>Country *</label>
              <select name="country" id="country" class="form-control">
                <option value="<?php echo set_value('country'); ?>" selected="selected"><?php echo (set_value('country'))?set_value('country'):'Country'; ?></option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote D'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="USA">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
              <?php echo form_error('country', '<div class="error"><span>', '</span></div>'); ?>
              <div class="clear"></div>
            </div>
            <div class="accept">
              <div class="terms">By clicking you agree to our <a href="<?php echo base_url();?>terms">Terms and Conditions</a></div>              
            </div>
            
            <input type="submit" value="Signup" class="btn" />
            
          </form>
        </div>
      </div>
      	</div>
        <div class="col-md-8 col-sm-7"><?php echo $content;?></div>
      </div>      
    </div>
  </div>
  
  <!--Login Start-->
  <div class="signinBox">
        <div class="container">
        <div class="loginWrap">
        	<form name="login_form" id="login_form" method="post" action="<?php echo base_url().'user/login';?>">
        	<div class="row">
            	<div class="col-md-3 col-sm-3"><input type="text" name="username" id="username" class="form-control" placeholder="username" /></div>
                <div class="col-md-3 col-sm-3"><input type="password" name="password" id="password" class="form-control" placeholder="password" /></div>
                <div class="col-md-2 col-sm-2"><input type="submit" name="" class="btn" value="Login" /></div>
                <div class="col-md-3 col-sm-3"><div class="forgot"><a href="<?php echo base_url();?>user/forgot">Forgot your password?</a></div></div>
            </div>
          </form>
          
        </div>
        </div>
      </div>
  
  <?php endif;?>
  
  <!--Form Section End--> 
  
  
  
<div class="howitwrap">
	<div class="container">
    	<h3>How to Find Your Soul Mate</h3>
        
        <ul class="row howtolist">
        	<li class="col-md-4">
            	<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <h5>Create a Profile</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis neque quis maximus tempor. </p>
            </li>
            
            <li class="col-md-4">
            	<div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                <h5>Search Matches</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis neque quis maximus tempor. </p>
            </li>
            
            <li class="col-md-4">
            	<div class="icon"><i class="fa fa-mars-double" aria-hidden="true"></i></div>
                <h5>Start Dating</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis neque quis maximus tempor. </p>
            </li>
        </ul>
        
    </div>
</div>
  
  
  
  
  
  <!--Recent Profiles Start-->
  <div class="recentWraper">
  	<div class="container">
    <h4>Featured Profiles</h4>
    <?php if($all_members_result): ?>
    <ul class="featuredListing row">
      <?php foreach($all_members_result as $val): 
	  	$is_already_friend = $this->friend_model->friendship_validations($val->id);
		
	  if($val->photo)
	  	$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$val->photo;
	  else
	  	$image_thumb = base_url().'glancePublic/images/no-image.jpg';
	  ?>
      <li class="col-md-3 col-sm-6">
        <div class="profileBox">
        <div class="imgbox"> <img src="<?php echo $image_thumb;?>" /> </div>      
           
            <div class="profileInfo">
              <h1><a href="<?php echo base_url(); ?>profile/<?php echo $val->username; ?>"><?php echo $val->name;?></a></h1>
              <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $val->gender;?></p>
              <p><i class="fa fa-history" aria-hidden="true"></i> <?php echo count_years($val->dob,date("Y-m-d"));?> yrs</p>
              <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $val->country;?></p>
              <?php if(!$is_already_friend):?>
              <a href="<?php echo base_url(); ?>friends/send_friend_request/<?php echo my_encrypt($val->id); ?>" class="chatbtn">Add Friend</a>
              <?php endif; ?>
            </div>
            <div class="clear"></div>
         
          
        </div>
      </li>
      <?php endforeach;?>
    </ul>
    <?php endif;?>
    
    <div class="btlinkwrap"> <a href="<?php echo base_url();?>listing" class="botomlink">View All Profiles</a></div>
  </div>
  </div>
  <!--Recent Profiles Endt-->   
  

  <?php // echo $content2;?>
	
    
    
<!--Welcome Start-->    
<div class="welcomeWrap">
<div class="container">
<h3>Welcome to our Dating Site</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis neque quis maximus tempor. Fusce ante lorem, volutpat id eleifend ac, finibus quis quam. Etiam ultricies, neque at aliquet placerat, risus nisi molestie nibh, condimentum venenatis turpis ante et sapien. Aliquam egestas nibh ac nisl lobortis, quis commodo tortor laoreet. Donec pellentesque metus a dolor porta molestie. Mauris viverra id purus at imperdiet.</p>
<img src="http://codeareena.com/online_dating/glancePublic/images/social-image.png" /></div>
</div>


<!--Testimonials Start-->

<div class="testimonials">
  <div class="container">
      <h3>Testimonials</h3>
    
    
    <ul class="testimonialsList row">
      <li class="col-md-6">
        <div class="testinner">
          <div class="testimg"><img src="http://localhost/dat2017/glancePublic/uploads/member_images/thumb_151460634747.jpg"></div>
          <div class="clientname">Garry Miller Jr (Tutor)</div>
          <div class="clientinfo">London, United Kingdom</div>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        </div>
      </li>
      <li class="col-md-6">
        <div class="testinner">
          <div class="testimg"><img src="http://localhost/dat2017/glancePublic/uploads/member_images/thumb_181461568013.jpg"></div>
          <div class="clientname">David Jackson (Student)</div>
          <div class="clientinfo">London, United Kingdom</div>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        </div>
      </li>
    </ul>
  </div>
</div>



<!--info Start-->

<div class="homeinfowrap">
<div class="container">
<ul class="homeinfo row">
	<li class="col-md-4">
	<div class="inforint"><img src="http://codeareena.com/online_dating/glancePublic/images/female0icon.png" />
	<h3>Find Girls</h3>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis neque quis maximus tempor. Fusce ante lorem, volutpat id eleifend ac, finibus quis quam.</p>
	</div>
	</li>
	<li class="col-md-4">
	<div class="inforint"><img src="http://codeareena.com/online_dating/glancePublic/images/connect-icon.png" />
	<h3>We connect people</h3>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis neque quis maximus tempor. Fusce ante lorem, volutpat id eleifend ac, finibus quis quam.</p>
	</div>
	</li>
	<li class="col-md-4">
	<div class="inforint"><img src="http://codeareena.com/online_dating/glancePublic/images/male-icon.png" />
	<h3>Find Men</h3>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis neque quis maximus tempor. Fusce ante lorem, volutpat id eleifend ac, finibus quis quam.</p>
	</div>
	</li>
</ul>
</div>
</div>
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
  
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
