<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">
        <h1><?php // echo lang('edit_group_heading');?></h1>
        <p><?php // echo lang('edit_group_subheading');?></p>
		</h3>
        <div class="tile-body">
			<?php echo form_open(current_url(),array('class="form-horizontal"'));?>
				<div class="form-group row">
                     <label class="control-label col-md-3">
			            <?php echo lang('edit_group_name_label', 'group_name');?>
                  	 </label>
                  	 <div class="col-sm-8">
                	 	<?php echo form_input(array('name'=>'group_name','id'=>'group_name','value' =>$group->name,'class'=>empty(form_error('group_name'))?'form-control':'form-control is-invalid'));?>
	 				    <?php echo form_error('group_name','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>
				<div class="form-group row">
                     <label class="control-label col-md-3">
            			<?php echo lang('edit_group_desc_label', 'description');?> <br />
                  	 </label>
                  	 <div class="col-sm-8">
					 	<?php echo form_input(array('name'=>'group_description','id'=>'group_description','value' =>$group->description,'class'=>empty(form_error('group_description'))?'form-control':'form-control is-invalid'));?>
	 				    <?php echo form_error('group_description','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>
			    <div class="tile-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><?php echo lang('edit_group_submit_btn');?></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?php echo base_url('users/list')?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
					</div>
                  </div>
                </div>
			<?php echo form_close();?>		
		</div>
	  </div>
	</div>
</div>	  	
