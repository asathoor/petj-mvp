<?php
/**
 * file: loopHeadlines.php
 * purpose: partial for search results 
 *
 * @package: WordPress
 * @sub-package: petj-mvp
 * 
 * @link: https://codex.wordpress.org/The_Loop
 */
?>

<h3> <?php _e( 'Search Results' ); ?> </h3>

<ol class="searchResults">

	<?php
	/**
	 * A very simple loop
	 * Minimal markup and theme tags
	 * Will loop out titles and content
	 */

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			?>
			<li>
				<a href="<?php the_permalink(); ?>" 
				  rel="bookmark" 
				  title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
				</a>
			</li>
			<?php
			//
		} // end while
	} // end if
	?>

</ol>
