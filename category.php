<?php get_header(); ?>
<div class="row">
  <div class="col-lg-1">
  </div>
  <div class="col-lg-7">
    <h2><?php single_cat_title(); ?></h2>
    <p><?php $catID = get_the_category(); ?>
    <p><?php echo category_description($catID[0]); ?></p>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
      <div style="margin-left: 15px;" >
        <div style="padding-bottom: 10px;" >
          <h3><?php echo '<a href=' . get_post_permalink() . '>' . get_the_title() . '</a>'; ?></h3>
          <p class="blog-post-meta"><?php the_date(); ?>, <?php _e( 'by', 'donquichote' ); ?> <?php the_author_posts_link(); ?></p>
        </div>
        <?php the_content( '[...]' ); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
