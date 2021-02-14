<div class="row">
	<div class="col-sm-12">
    	<div class="tile">
            <div class="tile-body">
    			<?php echo anchor('admin/users/create_user', lang('index_create_user_link'))?> <?php echo anchor('admin/users/create_group', lang('index_create_group_link'))?>
    		</div>
    	</div>
    </div>	
</div>	
<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
              	<tr>
            		<th><?php echo lang('index_fname_th');?></th>
            		<th><?php echo lang('index_lname_th');?></th>
            		<th><?php echo lang('index_email_th');?></th>
            		<th><?php echo lang('index_groups_th');?></th>
            		<th><?php echo lang('index_status_th');?></th>
            		<th><?php echo lang('index_action_th');?></th>
            	</tr>
              </thead>
              <tbody>
              	<?php foreach ($users as $user):?>
            		<tr>
                        <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                        <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                        <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
            			<td>
            				<?php foreach ($user->groups as $group):?>
            					<?php echo anchor(SITE_AREA."/users/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                            <?php endforeach?>
            			</td>
            			<td><?php echo ($user->active) ? anchor(SITE_AREA."/users/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
            			<td><?php echo anchor(SITE_AREA."/users/edit_user/".$user->id, 'Edit') ;?></td>
            		</tr>
            	<?php endforeach;?>
              </tbody>
            </table> 
          </div>
        </div><!-- tile-body -->
       </div><!-- tile -->
    </div><!-- col-sm-12 -->
</div><!-- row -->             