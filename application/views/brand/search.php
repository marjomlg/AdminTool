<div class="container">
	<div class="well">
		<?php echo form_open('brand/search', array('method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'Search','style'=>'float:right;')); ?>
			<div class="form-group">
			   <	?php echo form_input('keyword', $this->input->get('keyword'), 'class="form-control" placeholder="Search Product"'); ?>
			</div>		
	<?php echo form_close(); ?>
		<table class="table table-hover text-center">
		
					<tr>
						<td>ID</td>
						<td>Brand Name</td>
						<td>Status</td>
						<td>Action</td>
					</tr>

				<?php foreach ($results as $data) {?>
				
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
		<!--<?php if($products):?>
					
							<?php foreach ($products as $data){?>
						<tr>
							<td><?php echo $data->brand_name;?></td>
							<td><?php echo date("M / d / Y",strtotime($data->date));?></td>
							<td><?php echo $data->payment;?></td>
							<td><a href="<?php echo base_url('billing/view_id/'.$data->oid);?>"><i class="fa fa-cart-plus fa-2x"></i></a> &nbsp 
							<a href="<?php echo base_url('print_pdf/reciept_pdf/'.$data->oid)?>" name="download"><i class="fa fa-download fa-2x"></i></a></td>
						</tr>
		
					
					<?php }?>
			</table>-->
				<?php echo $links;?>
		<?php else:?>
					<?php if ($this->input->get('keyword')): ?>
						Your search - <b><?php echo $this->input->get('keyword')?></b> - did not match.
					<?php else: ?>
						Use the search box above to display a listing of employees.
					<?php endif; ?>
		<?php endif;?>

		<div>
	</div>
</div>