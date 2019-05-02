<div class="rightCol right">
			<?php 
			if($this->session->userdata('username')) {
				$this->load->model('member_model');
				$this->load->model('friend_model');
				$all_members_result = $this->member_model->get_near_located_member($this->session->userdata('city'));
			?>
            <div class="recomendWrap">
            	<h1>You May also Interested</h1>
            	<ul class="recomendList">
                	<?php
					if($all_members_result):
					foreach($all_members_result as $val):
						
						if($val->photo)
	  						$image_thumb = base_url().'glancePublic/uploads/member_images/thumb_'.$val->photo;
	  					else
	  						$image_thumb = base_url().'glancePublic/images/no-image.jpg';
				
						if($this->session->userdata('username') == $val->username) {
							continue;
						}
                    ?>
                	<li>
                    	<div class="imgbox"><img src="<?php echo $image_thumb;?>" alt="<?php echo $val->name;?>" /></div>
                        <div class="infoProfile">
                        	<h2><a target="_blank" href="<?php echo base_url(); ?>profile/<?php echo $val->username; ?>" title="<?php echo $val->name;?>"><?php echo $val->name;?></a></h2>
                            <p><?php echo $val->gender;?></p>
                            <p><?php echo $val->city;?>, <?php echo $val->country;?></p>
                             <?php 
								$isFriend = $this->friend_model->isfriends($this->session->userdata('member_id'),$val->id);
								if(!$isFriend) {
							?>
                            <a href="<?php echo base_url(); ?>friends/send_friend_request/<?php echo my_encrypt($val->id); ?>" class="chatbtn" title="Send Friend Request">Add Friend</a> 
                            <?php 
								} 
							?>
                            <a href="javascript:;" onclick="setRecieverSession('<?php echo $val->username;?>')" class="chatbtn" title="Send Message"> Message</a>
                            
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <?php
					endforeach;
					endif;
                    ?>                    
                </ul>
            </div>
            <?php
			}
			?>
            
            
            <div class="banner250">
            <h6>Sponsord Links</h6>   
            <?php $ads = $this->ads_model->get_content(); echo $ads->content;?>
            </div>
            
       </div>