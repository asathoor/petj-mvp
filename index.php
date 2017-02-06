<?php
/**
 * File: index.php
 * @package: WordPress
 * @sub-package: petj-mvp
 */
?>

<?php get_header(); ?>

<main>
  <article>
		<!-- the loop from here -->
			<?php get_template_part('loopSimple'); ?>
		<!-- loop end -->
  </article>

<?php get_sidebar(); ?>

</main><!-- end main content -->

<?php get_footer(); ?>
