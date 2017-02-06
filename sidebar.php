<?php
/**
 * sidebar.php
 * @package: WordPress
 * @sub-package: petj-mvp
 */
?>

  <!-- the sidebar --> 
  <aside id="sidebar">
    <!-- search form -->
    <?php get_search_form( ); ?>

    <!-- Menu: "list style" -->  
    <h3> <?php _e('Sidebar Menu','petj-mvp'); ?> </h3>
    <?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); ?>

    <!-- widget areas here -->
    <h3> <?php _e('Widget area','petj-mvp'); ?> </h3>
    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'home_right_1' ); // here the widget is printed  ?>
	    </div><!-- #primary-sidebar -->

      <!-- List all pages -->
      <h3><?php _e('Page List', 'petj-mvp'); ?></h3>
        <ul>
          <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
        </ul>

    <?php endif; ?>
  </aside>

