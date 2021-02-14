<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">
			<div id="infoMessage"><?php echo $message;?></div>
		</h3>
        <div class="tile-body">
    		<?php echo form_open(uri_string(),array('class="form-horizontal"'));?>
                  <div class="form-group row">
                        <label class="control-label col-md-3">
                        	<?php echo lang('edit_user_fname_label', 'first_name');?>
                       </label>
                       <div class="col-sm-8">
                       <?php echo form_input($first_name);?>
		               </div> 	
                  </div>
                <div class="form-group row">
                        <label class="control-label col-md-3">
                	        <?php echo lang('edit_user_lname_label', 'last_name');?>
                    	</label>
                       <div class="col-sm-8">
                        <?php echo form_input($last_name);?>
                		</div>
                </div>
                 <div class="form-group row"> 
                        <label class="control-label col-md-3">
                	    	<?php echo lang('edit_user_company_label', 'company');?>
                        </label>
                       <div class="col-sm-8">
                        <?php echo form_input($company);?>
                 		</div>
                  </div>
                  <div class="form-group row">
                       <label class="control-label col-md-3">
                	    <?php echo lang('edit_user_phone_label', 'phone');?>
                        </label>
                       <div class="col-sm-8">
                        <?php echo form_input($phone);?>
                       </div> 
                  </div>
                  <div class="form-group row">
                      <label class="control-label col-md-3">
                	    <?php echo lang('edit_user_password_label', 'password');?>
                        </label>
                       <div class="col-sm-8">
                        <?php echo form_input($password);?>
                       </div> 
                  </div>
				 <div class="form-group row">
                       <label class="control-label col-md-3">
                	    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
                	    </label>
                       <div class="col-sm-8">
                        <?php echo form_input($password_confirm);?>
                       </div> 
                  </div>
                  <?php if ($this->ion_auth->is_admin()): ?>
                     <div class="form-group row">
                       		<label class="control-label col-md-3">
                      			<?php echo lang('edit_user_groups_heading');?>
                      		</label>
                          <div class="col-md-8 col-md-offset-3">
                      <?php foreach ($groups as $group):?>
                            <div class="form-check">
                              <label class="form-check-label">
                                 <input class="form-check-input" type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>>                          <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                               </label>
                            </div>
                      <?php endforeach?>
                        </div>
                    </div>       
                  <?php endif ?>
                  <?php echo form_hidden('id', $user->id);?>
                  <?php echo form_hidden($csrf); ?>
                    <div class="tile-footer">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                          <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><?php echo lang('edit_user_submit_btn');?></button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?php echo base_url('users/list')?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
						</div>
                      </div>
                    </div>
                  	
            <?php echo form_close();?>
    	</div>
      </div>
    </div>
</div>      	  	
































