<?php
/**
 * @package: WordPress
 * @subpackage: petj-mvp
 */
?>
<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>" />
           
            <title><?php wp_title(); ?></title>
          
            <link rel="profile" href="http://gmpg.org/xfn/11" />
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
            <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
            <?php wp_head(); ?>
            
            <!-- add the stylesheet -->
            <?php
            /**
             * Add the stylesheet 
             */
            wp_enqueue_style( 'style', get_stylesheet_uri() ); // loop for style.css and add it
            ?>

        </head>
<body <?php body_class(); ?>>

<!-- site header -->
  <h1><?php bloginfo( 'name' ); ?></h1>
  <h1><?php bloginfo( 'description' ); ?></h1>
  <hr>
<!-- site header -->

<!-- navigation -->

<!-- /navigation -->

<!-- some navigation (list pages, no menu) -->
  <h3><?php _e('List pages (no menu)', 'petj-mvp'); ?></h3>
  <hr>

  <ul>
    <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
  </ul>
<!-- /navigation -->

<!-- loop -->
<h3><?php _e('Loop Out All Pages (no paginaiton here)', 'petj-mvp'); ?></h3>
<hr>

<?php
/**
 * A very basic loop ...
 */
if ( have_posts() ) {
	while ( have_posts() ) {
	   the_post();
  // (all content looped out)
	//
	the_content();
	//
	} // end while
} // end if
?>
<!-- /loop -->

<?php wp_footer(); ?>

<!-- JavaScript sample -->
<script type="text/javascript">
/* <![CDATA[ */
// content of your Javascript goes here
/* ]]> */
</script>

</body>
</html>
