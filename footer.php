	<footer class="aligncenter">
		 &copy; GPLv3 Per T. Jensen <?php echo date('Y'); ?>
	</footer>

</div><!-- /wrapper -->


<!-- JavaScript sample -->
	<script type="text/javascript">
	/* <![CDATA[ */
	// content of your Javascript goes here
		console.log('Vanilla JavaScript = ok. Alert level: green.');
	/* ]]> */
	</script>


<!-- Jquery: how to ... -->
	<script>

	( function( $ ) {

		// code goes here
		console.log('Jquery: all systems up and running. Alert level: green.');

		// hide the children
		$('.children').toggle();
	
		// Based on @url: http://callmenick.com/post/slide-down-menu-with-jquery-and-css
		$( '.page_item_has_children' ).hover(
				    function(){
				        $(this).children('.children').slideDown(200);
				    },
				    function(){
				        $(this).children('.children').slideUp(200);
				    }
				);


	} )( jQuery ); // jquery end

	</script>

	<?php wp_footer(); // load this after your scripts ?>

</body>
</html>
