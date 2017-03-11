	<footer class="aligncenter">
		The minimum viable theme: "<?php echo wp_get_theme(); ?>".
		&copy; by Per T. Jensen <?php echo date('Y'); ?>.<br>
		Powered by WordPress.
	</footer>

</div><!-- /wrapper -->


<!-- JavaScript sample -->
	<script>
		/* <![CDATA[ */

		/**
		 * CDATA: Character Data ... the data in between 
		 * these strings includes data that could be interpreted as XML markup, 
		 * but should not be.
		 * @url: http://stackoverflow.com/questions/2784183/what-does-cdata-in-xml-mean
		 */

		// content of your Javascript goes here
			console.log('Here\'s Vanilla JavaScript. Alert level: green.');

		/* ]]> */
	</script>

<!-- Jquery menu sample -->
	<script>
		/* <![CDATA[ */

		( function( $ ) {

			// code goes here
			console.log('Here\'s Jquery.');

			// hide the children
			$('.children').toggle();
	
			// Based on @url: http://callmenick.com/post/slide-down-menu-with-jquery-and-css
			$( '.page_item_has_children' ).hover(
						  function(){
						      $(this).children('.children').slideDown(500);
						  },
						  function(){
						      $(this).children('.children').slideUp(500);
						  }
					);

		} )( jQuery ); // jquery end


		/* ]]> */
	</script>

	<?php wp_footer(); // load this after your scripts ?>

</body>
</html>
