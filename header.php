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
        <?php wp_head(); ?>
 
  </head>
<body <?php body_class(); ?>>

<div id="wrap">

<header>
  <!-- header link to "home" -->
  <a href="<?php echo esc_url( home_url() ) ?>">

    <!-- site name -->
    <h1><?php bloginfo( 'name' ); ?></h1>

    <!-- site description -->
    <h2><?php bloginfo( 'description' ); ?></h2>
  </a>
</header> 

