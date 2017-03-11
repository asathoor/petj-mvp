<?php
/**
 * File: search.php
 * @package: WordPress
 * @sub-package: petj-mvp
 */
?>

<?php get_header(); ?>

<main>
  <article>
		<!-- search form -->
			<?php get_search_form(); ?>

			<!-- the loop from here -->
				<?php get_template_part('loopHeadlines'); ?>
			<!-- loop end -->
  </article>

	<?php get_sidebar(); ?>

</main><!-- end main content -->

<?php get_footer(); ?>


