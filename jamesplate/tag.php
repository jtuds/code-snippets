<?php include ('inc/global/head.php'); ?>
<?php include ('inc/global/header.php'); ?>

				<h1><?php
					printf( __( 'Tag Archives: %s', 'boilerplate' ), '' . single_tag_title( '', false ) . '' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>

<?php include ('inc/global/footer.php'); ?>