<?php
/**
 * file: loopSimple.php
 * @package: WordPress
 * @sub-package: petj-mvp
 * 
 * @link: https://codex.wordpress.org/The_Loop
 */
?>

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
		the_title('<h3 class="title">','</h3>');

		echo '<p class="content">';

			the_content();

		echo '</p>';
		//
	} // end while
} // end if
?>
