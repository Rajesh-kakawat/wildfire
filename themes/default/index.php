<?php echo theme_view('header'); ?>
<?php echo theme_view('_sitenav');?>
<main role="main">
	<div class="container">
    <?php
        echo Template::message();
        echo isset($content) ? $content : Template::content();
    ?>
    </div>
</main>
<?php echo theme_view('footer');?>