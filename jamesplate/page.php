<?php include ('inc/global/head.php'); ?>
<?php include ('inc/global/header.php'); ?>

<main role="main">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	    <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>

</main>

<?php include ('inc/global/footer.php'); ?>