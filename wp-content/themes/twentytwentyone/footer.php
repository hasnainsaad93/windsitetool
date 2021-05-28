<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php 
	wp_footer(); 
	wp_enqueue_script( 'customscript', get_template_directory_uri() . '/assets/js/script.js', '1.1');
	echo('<script src="'. get_template_directory_uri() .'/assets/js/script.js"></script>')
?>


<!-- <script src="assets/js/script.js"></script> -->

</body>
</html>
