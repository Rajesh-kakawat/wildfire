<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">
		</h3>
        <div class="tile-body">
			<?php echo form_open(base_url('admin/users/create_user'),array('class="form-horizontal"'));?>
				<div class="form-group row">
                     <label class="control-label col-md-3">
		            <?php echo lang('create_user_fname_label', 'first_name');?>
                  	 </label>
                  	 <div class="col-sm-8">
	 				    <?php echo form_input(array('name'=>'first_name','id'=>'first_name','type' => 'text','value' =>set_value('first_name'),'class'=>empty(form_error('first_name'))?'form-control':'form-control is-invalid'));?>
	 				    <?php echo form_error('first_name','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>
				<div class="form-group row">
                     <label class="control-label col-md-3">
			            <?php echo lang('create_user_lname_label', 'last_name');?>
                  	 </label>
                  	 <div class="col-sm-8">
						<?php echo form_input(array('name'=>'last_name','id'=>'last_name','type' => 'text','value' =>set_value('last_name'),'class'=>empty(form_error('last_name'))?'form-control':'form-control is-invalid'));?>
	 				    <?php echo form_error('last_name','<small class="invalid-feedback">', '</small>');?>
					 </div>
				</div>
				<div class="form-group row">
                      <?php
                      if($identity_column!=='email')
                      {?>
                     <label class="control-label col-md-3">
                  	 	<?php echo lang('create_user_identity_label', 'identity');?>
                  	 </label>
                  	 <div class="col-sm-8">
                       <?php 
                           echo form_input($identity);
                           echo form_error('identity','<small class="invalid-feedback">', '</small>');
                          }
                          ?>
					 </div>
				</div>
				<div class="form-group row">
                     <label class="control-label col-md-3">
			            <?php echo lang('create_user_company_label', 'company');?>
                  	 </label>
                  	 <div class="col-sm-8">
						<?php echo form_input(array('name'=>'company','id'=>'company','type' => 'text','value' =>set_value('company'),'class'=>empty(form_error('company'))?'form-control':'form-control is-invalid'));?>
	 					 <?php echo form_error('company','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>
				<div class="form-group row">
                     <label class="control-label col-md-3">
            			<?php echo lang('create_user_email_label', 'email');?>
                  	 </label>
                  	 <div class="col-sm-8">
			        	<?php echo form_input(array('name'=>'email','id'=>'email','type' => 'text','value' =>set_value('email'),'class'=>empty(form_error('email'))?'form-control':'form-control is-invalid'));?>
	 				    <?php echo form_error('email','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>
				<div class="form-group row">
                     <label class="control-label col-md-3">
			            <?php echo lang('create_user_phone_label', 'phone');?>
                  	 </label>
                  	 <div class="col-sm-8">
						<?php echo form_input(array('name'=>'phone','id'=>'phone','value' =>set_value('phone'),'class'=>empty(form_error('phone'))?'form-control':'form-control is-invalid'));?>
	 				    <?php echo form_error('phone','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>
				<div class="form-group row">
                     <label class="control-label col-md-3">
			            <?php echo lang('create_user_password_label', 'password');?> 
                  	 </label>
                  	 <div class="col-sm-8">
						<?php echo form_input(array('name'=>'password','id'=>'password','value' =>set_value('password'),'class'=>empty(form_error('password'))?'form-control':'form-control is-invalid'));?>
	 					  <?php echo form_error('password','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>
				<div class="form-group row">
                     <label class="control-label col-md-3">
			            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
                  	 </label>
                  	 <div class="col-sm-8">
	                  	<?php echo form_input(array('name'=>'password_confirm','id'=>'password_confirm','value' =>set_value('password_confirm'),'class'=>empty(form_error('password_confirm'))?'form-control':'form-control is-invalid'));?>
	 					<?php echo form_error('password_confirm','<small class="invalid-feedback">', '</small>');?>
	 				 </div>
				</div>	 
					<div class="tile-footer">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                          <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><?php echo lang('create_user_submit_btn');?></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?php echo base_url('users/list')?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
						</div>
                      </div>
                    </div>
<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>
