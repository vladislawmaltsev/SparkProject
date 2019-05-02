<!--Profile Start-->
    <div class="userInfoBar">
      <div class="container">
      	<div class="row">
        	<div class="col-md-3"><div class="userPicbox">
          <div class="userimage">
            <div class="imgint"><img src="<?php echo ($this->session->userdata('photo'))?base_url().'glancePublic/uploads/member_images/thumb_'.$this->session->userdata('photo'):base_url().'glancePublic/images/no-image.jpg';?>" /></div>
          </div>
          <div class="userName">
            <h4><a href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>"><?php echo ($this->session->userdata('name')=='')?$this->session->userdata('username'):$this->session->userdata('name');?></a></h4>
            <a href="<?php echo base_url().'edit_profile';?>">Edit Profile</a></div>
        </div></div>
            <div class="col-md-4">
            
            <div class="searchFriendBox">
        <form name="search_frm" id="search_frm" action="<?php echo base_url();?>search" method="post">
          
          
          <div class="input-group">
          <input type="text" name="search" value="" class="form-control" placeholder="Search Friends" />
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </span>
        </div><!-- /input-group -->
          
          
        </form>
        </div>
        
        
        
        </div>
            <div class="col-md-5"><div class="userquickLinks">
          <ul class="usernav">
            <li><a href="<?php echo base_url(); ?>friends" title="Friend List">Friends</a> </li>
            <li><a href="<?php echo base_url();?>messages" title="Messages Conversation">Messages</a></li>
            <li><a href="<?php echo base_url();?>gallery/photos/<?php echo $this->session->userdata('username'); ?>" title="My Picture Gallery">My Gallery</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" title="Settings" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog" aria-hidden="true"></i></a>
              <ul class="subnav dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo base_url(); ?>profile/<?php echo $this->session->userdata('username'); ?>" title="Goto your profile"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $this->session->userdata('name');?></a></li>
                <li><a href="<?php echo base_url(); ?>edit_profile" title="Edit Profile"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a></li>
                
                <li><a href="<?php echo base_url(); ?>friends/request_received" title="Blcok List"><i class="fa fa-user-plus" aria-hidden="true"></i> Friends Request Received</a></li>
                <li><a href="<?php echo base_url(); ?>friends/request_sent" title="Blcok List"><i class="fa fa-paper-plane" aria-hidden="true"></i> Friends Request Sent</a></li>

                <li><a href="<?php echo base_url(); ?>friends/blocked_friends" title="Blcok List"><i class="fa fa-ban" aria-hidden="true"></i> Block List</a></li>
                <li><a href="<?php echo base_url(); ?>friends/favourite_friends" title="Favourities List"><i class="fa fa-heart" aria-hidden="true"></i> Favourities</a></li>
                <li><a href="<?php echo base_url(); ?>account_setting" title="Account Setting"><i class="fa fa-cog" aria-hidden="true"></i> Account Setting</a></li>
                <li><a href="<?php echo base_url(); ?>privacy" title="Privacy Setting"><i class="fa fa-lock" aria-hidden="true"></i> Privacy Setting</a></li>
                <li><a href="<?php echo base_url(); ?>user/logout" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>
        </div></div>
        </div>
      
        
        
        
      </div>
    </div>
<!--Profile End-->