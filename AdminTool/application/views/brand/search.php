<div class="container">
	<div class="well">
		<div class="row">
		<?php echo form_open('brand/search', array('method' => 'GET', 'role' => 'Search')); ?>
			<div class="col-md-4">
					<p>Please input Brand Name</p>
			   </div>
			
				<div class="col-md-8">
			   		<?php echo form_input('keyword', $this->input->get('keyword'), 'class="form-control" placeholder="Search"'); ?>
			   	</div>
		<?php echo form_close(); ?>
			<!------$account---->
		<?php if($brand):?>
			<table class="table table-hover text-center">
					<tr>
						<td>ID</td>
						<td>Brand Name</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				<?php foreach($brand as $pbrand):?>
					<tr>
						<td><?php echo $pbrand->id?></td>
						<td><?php echo $pbrand->pbrand_name?></td>
						<td>
							<?php if($pbrand->status == 'Active'){?>
								<span class="label label-success"><?php echo $emp->status;?></span>
							<?php }else{ ?>
								<span class="label label-danger"><?php echo $emp->status;?></span>
							<?php } ?>

						</td>
						<td><a href="<?php echo base_url('payroll/view/'.$emp->id)?>">View</a></td>

					</tr>

				<?php endforeach;?>
			</table>
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