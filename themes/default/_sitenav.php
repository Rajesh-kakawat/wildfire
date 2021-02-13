<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><?php e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><a href="<?php echo site_url(); ?>"><?php e(lang('bf_home')); ?></a></a>
      </li>
      <?php if (empty($current_user)) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(LOGIN_URL); ?>">Sign In</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('logout'); ?>"><?php e(lang('bf_action_logout')); ?></a>
          </li>
        <li <?php echo check_method('profile'); ?>><a href="<?php echo site_url('users/profile'); ?>"><?php e(lang('bf_user_settings')); ?></a></li>
        <?php endif; ?>
    </ul>
  </div>
</nav>
<hr />