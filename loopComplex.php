<?php 
/**
 * file: loopComplex.php
 * The Loop & comments
 * @link: https://codex.wordpress.org/The_Loop
 */
?>

 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>

    <!-- add the id and class for each post -->
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 	
 	<?php endif; ?>


 	<!-- Display the Title as a link to the Post's permalink. -->
 	<h2>
    <a href="<?php the_permalink(); ?>" 
      rel="bookmark" 
      title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
    </a>
  </h2>

  <!-- the avatar -->
  <?php echo get_avatar( 'email', '55' ); ?> 

 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
 	<small>
    <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?>
  </small>


 	<!-- Display the Post's content in a div box. -->
 	<div class="entry">
 		<?php the_content(); ?>
 	</div>


 	<!-- Display a comma separated list of the Post's Categories. -->
 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
 	</div> <!-- closes the first div box -->

  <!-- display the tags --> 
  <div class="tags">
    <?php the_tags( 'Tags: ', ', ', '' ); ?> 
  </div>

  <!-- post navigation -->
  <div class="previousNext">
    <?php posts_nav_link(); ?>
  </div>

  <!-- Comments -->
  <?php comments_template(); // (in loop) ?>

  <div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
	    <h2 class="comments-title">
		    <?php
			    printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'maat-or-the-improved-bootstrap' ),
				    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
		    ?>
	    </h2>

	    <ol class="comment-list">
		    <?php
			    wp_list_comments( array(
				    'style'       => 'ol',
				    'short_ping'  => true,
				    'avatar_size' => 74,
			    ) );
		    ?>
	    </ol><!-- .comment-list -->

	    <?php
		    // Are there comments to navigate through?
		    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	    ?>
	    <nav class="navigation comment-navigation" role="navigation">
		    <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'maat-or-the-improved-bootstrap' ); ?></h1>
		    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'maat-or-the-improved-bootstrap' ) ); ?></div>
		    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'maat-or-the-improved-bootstrap' ) ); ?></div>
	    </nav><!-- .comment-navigation -->
	    <?php endif; // Check for comment navigation ?>

	    <?php if ( ! comments_open() && get_comments_number() ) : ?>
	    <p class="no-comments"><?php _e( 'Comments are closed.' , 'maat-or-the-improved-bootstrap' ); ?></p>
	    <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php comment_form(); ?>

  </div><!-- #comments --> 


 	<!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else : ?>

 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->

 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>

<?php /* ------- the loop end ------- */ ?>
