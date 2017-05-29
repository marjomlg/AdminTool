<div class="container-fluid">
<?php $message = $this->session->flashdata('message');
	if($message==TRUE){
	?>
	<div class="panel panel-info">
	<div class="panel-heading"> Message</div>
	<h1><span class="label labe-info"><?php echo $this->session->flashdata('message');?></span></h1>
	<p>would you like a reciept
	<a href="<?php echo base_url('billing/view')?>">Yes</a>|
	<a href="<?php echo base_url('account');?>">No</a></p>
	</div>
	<?php }?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<!--<?php echo form_input('keyword', $this->input->get('keyword'), 'class="form-control text-center" placeholder="Search Product"'); ?>-->
		<?php echo form_open('billing/view', array('method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'Search')); ?>
			<div class="form-group">
			   <?php echo form_input('keyword', $this->input->get('keyword'), 'class="form-control text-center" placeholder="Search Product"'); ?>
			</div>		
		<?php echo form_close(); ?>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 adjust">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<button type="button" class="btn btn-block" onClick="window.location.href='<?php echo base_url('brands/edit')?>';return false;">Update</button>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<button type="button" class="btn btn-block" onClick="window.location.href='<?php echo base_url('brands/create')?>';return false;">Add</button>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
			<button type="button" class="btn btn-block" onClick="window.location.href='<?php echo base_url('brands/delete_view')?>';return false;">Remove</button>
		</div>
	</div>	
	</br></br>
		<hr style="border: none; border-bottom: 1px solid #999999;">
		<div class="panel-heading">Results</div>
	<div style="bgcolor: #fff">
		<div class="panel panel-success">
		<!--<div class="alert alert-success" v-bind:class="{hidden:hideAlert}" role="alert">
			<strong>Success!</strong> A new record was successfully created.
		</div>-->

			<?php echo form_open('brands/updated_status',array('class'=>'form-horizontal'));?>
			
			<table class="table table-hover text-center">
				<tr>
				<!--<td>
					Option<br>
				<input type="checkbox" id='selecctall' />Select all &nbsp
				<input type="radio" name="status" value="Active" checked/>Active &nbsp
				<input type="radio" name="status" value="In-active"/>In-active
				</td>-->
				
				<td>#</td>
				<td>Name</td>
				<td>Status</td>
				<td>Action</td>
				</tr>

		<!--  <?php foreach ($results as $data) {?>
			 -->
				<tr>
				<!--<td><input type="checkbox" class="checkbox1" name="brand_check[]" id="brand_check[]" value="<?php echo $data->id;?>"/></td>-->
				<td><?php echo $data->id;?></td>
				<td><?php echo $data->brand_name;?></td>
				<td>
					<?php if($data->status == 'Active'){?>
						<span class="label label-success"><?php echo $data->status;?></span>
					<?php }else{ ?>
						<span class="label label-danger"><?php echo $data->status;?></span>
					<?php } ?>
				</td>
				<td>
				<a href="<?php echo base_url('brands/edit/'.$data->id);?>" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-2x"></i></a>&nbsp;
				</tr>
			<?php 
			 }?>
			<!--<tr>
				<td><input type="submit" class="btn btn-info btn-sm" value="Submit"/></td>
					
				
				<td>#</td>
				<td>Name</td>
				<td>Status</td>
				<?php if($position=='Administrator'){?>
				<td>Action</td>
				<?php }?>
				</tr>-->

			</table>
			<?php echo form_close();?>
			<!--<p><?php echo $links;?></p>-->
		</div>
	</div>
</div>
