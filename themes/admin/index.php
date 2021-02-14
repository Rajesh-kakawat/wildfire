<?php
    Assets::add_js(array('bootstrap.min.js', 'jwerty.js'), 'external', true);    
    echo theme_view('header');
    echo theme_view('_sitenav');
?>
<main class="app-content">
    <?php
        echo Template::message();
        echo isset($content) ? $content : Template::content();
    ?>
</main>
<?php echo theme_view('footer'); ?>