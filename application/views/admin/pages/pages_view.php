<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?php echo $page_title;?></h1>
  <a href="<?php echo base_url($this->settings_model->get_admin_path()).'cms/pages/add'; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Add</a>
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
		<?php if (count($pages)>=1){ ?>
		<table class="table">
			<tr>
				<th>Sr. No. </th>
				<th>Page</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<?php 
				foreach($pages as $page){
					?>
					<tr>
						<td><?php echo $page['id'];?></td>
						<td><?php echo $page['page_name'];?></td>
						<td><?php echo ($page['status'] == 1?'Active':'In Active');?></td>
						<td><a href=''><i class='fa fa-pencil'></i></a> | <a href=''><i class='fa fa-trash'></i></a></td>
					</tr>
					<?php
				}
			?>
		</table>
		<?php }else{ ?>
			<center>
				<h3>No Pages found</h3>
			</center>
		<?php }?>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
<script>

</script>