<?php
/**
 * File: header.php
 *
 * Basic HTML5 Markup
 * Apart from that zero design!
 * @package: WordPress
 * @subpackage: petj-mvp
 * 
 * Normally this file would be separated into header, footer, etc.
 */
?>

<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- don't use a title tag, see functions.php "Title tag" -->          
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

				<?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?> 
  </head>
<body <?php body_class(); ?>>

<div id="wrap">

<header>
  <!-- header link to "home" -->
  <a href="<?php echo esc_url( home_url() ) ?>">

		<?php
			// add the costum logo (see functions.php)
			if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
			}
		?>

    <!-- site name -->
    <h1><?php bloginfo( 'name' ); ?></h1>

    <!-- site description -->
    <h2><?php bloginfo( 'description' ); ?></h2>
  </a>

			<!-- costum header image -->
			<img src="<?php header_image(); ?>" 
				height="<?php echo get_custom_header()->height; ?>" 
				width="<?php echo get_custom_header()->width; ?>" 
				alt="header image"
				id="headerImage">

</header> 

