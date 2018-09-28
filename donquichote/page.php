<?php get_header(); ?>

<div class="row">
	<div class="col-lg-1">
	</div>
    <div class="col-lg-7">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; endif; ?>
	</div>
		
<?php get_sidebar(); ?>
		
		
</div>       
<?php get_footer(); ?>
