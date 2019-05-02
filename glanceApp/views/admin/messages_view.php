<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<?php $this->load->view('admin/common/meta_tags'); ?>
<?php $this->load->view('admin/common/before_head_close'); ?>
</head>
<body class="skin-blue">
<?php $this->load->view('admin/common/after_body_open'); ?>
<?php $this->load->view('admin/common/header'); ?>
<div class="wrapper row-offcanvas row-offcanvas-left"> 
	<?php $this->load->view('admin/common/left_side'); ?>
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> User's Messages Management 
        <!--<small>advanced tables</small>--> 
      </h1>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Messages</h3>
            </div>
            <!-- /.box-header -->
            <?php
            if($this->session->flashdata('msg')):
			?>
              <div style="color:#009933;font-size:12px;"><?php echo $this->session->flashdata('msg');?></div><br />
            <?php
			endif;
			?>  
            
            <div class="box-body table-responsive">

            <table id="example2" class="table table-bordered table-hover">
            
              <thead>
                <tr>
                    <th><strong>Date Added</strong></td>
                    <th><strong>Sender</strong></td>
                    <th><strong>Receiver</strong></td>
                    <th><strong>Message</strong></td>
                    <th><strong>Action</strong></td>
                  </tr>
              </thead>
              <?php
              if($message_row):
			  	foreach($message_row as $message) {
					
			  ?>
              <tr>
                <td><?php echo date('d-m-Y',strtotime($message['date_send']));?></td>
                <td><?php echo $message['sender'];?></td>
                <td><?php echo $message['reciever'];?></td>
                <td><?php echo $message['message'];?></td>
                <td>
                	
                    <a href="<?php echo base_url().'admin/all_messages/message_delete/'.$message['messages_id'];?>" onclick="if(confirm('Do you want to delete message?')){ return true; } else {return false;} ">Delete Message</a><br/>
               </td>
              </tr>
              <?php
				}
              endif;
              ?>

                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body --> 
          </div>
          <!-- /.box --> 
          
          <!-- /.box --> 
        </div>
      </div>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
</body>
</html>