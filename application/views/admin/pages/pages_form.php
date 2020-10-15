<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?php echo $page_title;?></h1>
  <a href="#" onclick="return validateForm()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-save fa-sm text-white-50"></i> Save</a>
</div>


<div class="row">
  <!-- Area Chart -->
  <div class="col-xl-12 col-lg-12">
	<?php 
		if ($message){
			echo "<div class='alert alert-info' >".$message."</div>";
		}
	?>
    <div class="card shadow mb-4">
      <!-- Card Body -->
      <div class="card-body">
		<form id='form' action="" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>Company Logo</label>
				<br>
				<img src="<?php echo $this->settings_model->get_logo();?>" />
				<input type="file" name='company_logo' class="form-control" />
			</div>
			<div class='form-group'>
				<label>Page Name</label>
				<input type='text' value="<?php echo $page_data[0]['page_name'];?>" name='page_name' placeholder="Page Name" class="form-control" id='page_name'/>
			</div>
			<div class='form-group'>
				<label>Email Address</label>
				<div class="input-group">
					<span class="input-group-addon left"><i class='fa fa-envelope'></i></span>
					<input type='email' value="<?php echo $settings['COMPANY_EMAIL_ADDRESS'];?>" name='company_email_address' placeholder="Company Email Address" class="form-control" id='company_email_address'/>
				</div>
			</div>
			<div class='form-group'>
				<label>Primary Phone Number</label>
				<input type='text' value="<?php echo $settings['COMPANY_PRIMARY_PHONE_NUMBER'];?>" name='company_primary_phone_number' placeholder="Company Primary Phone Number" class="form-control" id='company_email_address'/>
			</div>
			
			<div class='form-group'>
				<label>Company WhatsApp Number</label>
				<div class="input-group">
					<span class="input-group-addon left"><i class='fa fa-whatsapp'></i></span>
					<input type='text' value="<?php echo $settings['COMPANY_WHATSAPP_NUMBER'];?>" name='company_whatsapp_number' placeholder="Company WhatsApp Number" class="form-control" id='company_email_address'/>
				</div>
			</div>
			<div class='form-group'>
				<label>Website Theme</label>
				<select class="form-control" name="website_theme">
					<option value="">Select Theme</option>
					<?php 
						foreach($themes as $theme){
							echo "<option value='".$theme."' ".($settings['WEBSITE_THEME'] == $theme ? 'SELECTED':'').">".$theme."</option>";
						}	
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Company Short Address</label>
				<textarea name="company_short_address" class="form-control"><?php echo $settings['COMPANY_SHORT_ADDRESS'];?></textarea>
			</div>
			<div class="form-group">
				<label>Company Address</label>
				<textarea name="company_full_address" class="form-control"><?php echo $settings['COMPANY_FULL_ADDRESS'];?></textarea>
			</div>
			
			<div class='form-group'>
				<label>Company Facebook Link</label>
				<div class="input-group">
					<span class="input-group-addon left"><i class='fa fa-facebook'></i></span>
					<input type='text' value="<?php echo $settings['COMPANY_FACEBOOK_LINK'];?>" name='company_facebook_link' placeholder="Company Facebook Profile" class="form-control" id='company_facebook_link'/>
				</div>
			</div>
			
			<div class='form-group'>
				<label>Company Instagram Link</label>
				<div class="input-group">
					<span class="input-group-addon left"><i class='fa fa-instagram'></i></span>
					<input type='text' value="<?php echo $settings['COMPANY_INSTAGRAM_LINK'];?>" name='company_instagram_link' placeholder="Company Instagram Profile" class="form-control" id='company_instagram_link'/>
				</div>
			</div>
			
			<div class='form-group'>
				<label>Company YouTube Link</label>
				<div class="input-group">
					<span class="input-group-addon left"><i class='fa fa-youtube'></i></span>
					<input type='text' value="<?php echo $settings['COMPANY_YOUTUBE_LINK'];?>" name='company_youtube_link' placeholder="Company Youtube Profile" class="form-control" id='company_youtube_link'/>
				</div>
			</div>
			
			<div class='form-group'>
				<label>Company Twitter Link</label>
				<div class="input-group">
					<span class="input-group-addon left"><i class='fa fa-twitter'></i></span>
					<input type='text' value="<?php echo $settings['COMPANY_TWITTER_LINK'];?>" name='company_twitter_link' placeholder="Company Twitter Profile" class="form-control" id='company_twitter_link'/>
				</div>
			</div>
			
			<div class='form-group'>
				<label>Company LinkedIn Link</label>
				<div class="input-group">
					<span class="input-group-addon left"><i class='fa fa-linkedin'></i></span>
					<input type='text' value="<?php echo $settings['COMPANY_LINKEDIN_LINK'];?>" name='company_linkedin_link' placeholder="Company LinkedIn Profile" class="form-control" id='company_linkedin_link'/>
				</div>
			</div>
			<div class='form-group'>
				<label>Company GST Number</label>
				<input type='text' value="<?php echo $settings['COMPANY_GST_NUMBER'];?>" name='company_gst_number' placeholder="Company GST Number" class="form-control" id='company_gst_number'/>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
<script>
function validateForm(){
	$('#form').submit();
}
</script>