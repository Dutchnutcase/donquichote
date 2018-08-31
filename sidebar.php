<div class="col-lg-3">
<div class="side" style="margin-top: 40px;">
<?php echo wpb_list_child_pages(); ?>
<?php dynamic_sidebar('smartslider_area_1'); ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar area") ) : ?>
<?php endif;?>
</div>

<div class="col-lg-1">
</div>
