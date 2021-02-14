<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="login-box">
      	<?php echo form_open("login",'class="login-form"');?>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i><?php echo lang('login_heading');?></h3>
          <div class="form-group">
            <label class="control-label"><?php echo lang('login_identity_label', 'identity');?></label>
             <?php echo form_input($identity,null,'class="form-control" placeholder="Email" autofocus');?>
          </div>
          <div class="form-group">
            <label class="control-label"><?php echo lang('login_password_label', 'password');?></label>
            <?php echo form_input($password,null,'class="form-control" placeholder="Password"');?>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                	 <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                     <span class="label-text"><?php echo lang('login_remember_label', 'remember');?></span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip"><?php echo lang('login_forgot_password');?></a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i><?php echo lang('login_submit_btn');?></button>
          </div>
         <?php echo form_close();?>
        <?php echo form_open("users/login",'class="forget-form"');?>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        <?php echo form_close();?>
      </div>
    </section>