<?php
    Assets::add_js(array('bootstrap.min.js', 'jwerty.js'), 'external', true);    
    echo theme_view('header');
    echo theme_view('_sitenav');
?>
<main class="app-content">
    <div class="app-title">
            <div>
              <h1><i class="fa fa-th-list"></i> <?php echo lang('create_user_heading');?></h1>
              <p><?php echo lang('create_user_subheading');?></p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
    </div>
    <?php
        echo Template::message();
        echo isset($content) ? $content : Template::content();
    ?>
</main>
<?php echo theme_view('footer'); ?>