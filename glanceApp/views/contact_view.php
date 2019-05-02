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
  
  <div class="innerPageswrap">
  	<div class="container">
    	
        <div class="row">
        	<div class="col-md-8 col-sm-7">
            	<div class="profilebgcol">
            		<h1>Contact Us</h1>
      				<div class="one_half left">
        <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
        <br />
        <p>Please be patient while waiting for response. (24/7 Support!) <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p>
        <form name="frm" id="frm" method="post" action="">
          <fieldset>
            <label for="name" class="blocklabel">Your Name*</label>
            <p class="">
              <input type="text" name="fname" id="fname" value="<?php echo set_value('fname'); ?>" class="form-control" />
              <?php echo form_error('fname', '<div class="error"><span>', '</span></div>'); ?>
            </p>
            <label for="email" class="blocklabel">E-Mail*</label>
            <p class="">
              <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email'); ?>" />
              <?php echo form_error('email', '<div class="error"><span>', '</span></div>'); ?>
            </p>
            <label for="message" class="blocklabel">Your Message*</label>
            <p class="">
              <textarea name="comment" id="comment" class="form-control" cols="20" rows="7"></textarea>
              <?php echo form_error('comment', '<div class="error"><span>', '</span></div>'); ?>
            </p>
            
            <div class="clear"></div>
            <input name="Send" type="submit" value="SUBMIT" class="comment_submit" id="send">
            <p></p>
          </fieldset>
        </form>
      </div>
      			</div>
            </div>
            <div class="col-md-4 col-sm-5"><div class="one_half last">
        <div class="address-info">
          <h3>Address Info</h3>
          <ul>
            <li> <strong>Company Name</strong><br>
              5420 Lipsum Road, ipsum, Seattle, CA 85125-854<br>
              Telephone: +1 1234-567-89000<br>
              FAX: +1 0123-4567-8900<br>
              E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br>
              Website: <a href="index.html">www.yoursitename.com</a> </li>
          </ul>
        </div>
        <h3>Find the Address</h3>
        <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=California+City,+CA,+United+States&amp;aq=0&amp;oq=calefornia&amp;sll=37.0625,-95.677068&amp;sspn=42.224734,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=California+City,+Kern+County,+California&amp;t=m&amp;z=10&amp;ll=35.125801,-117.985904&amp;output=embed"></iframe>
      </div></div>
        </div>
        
      
      
     
     
  </div>
  </div>
  
  <?php $this->load->view('common/footer'); ?>
</div>
<!--/Site Wraper End-->
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>
