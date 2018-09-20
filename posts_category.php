<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Post Wrap Start-->
<div class="post hentry ivycat-post">
	<!-- 	This outputs the post TITLE -->
	<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<p class="blog-post-meta"><?php the_date(); ?>, by <?php the_author_posts_link(); ?></p>

	<!-- 	This outputs the post EXCERPT.  To display full content including images and html,
		replace the_excerpt(); with the_content();  below. -->
	<div class="entry-content">
		<?php the_content( '[...]' ); ?>
	</div>
</div>
<!-- // Post Wrap End -->
