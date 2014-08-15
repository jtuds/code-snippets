<?php include ('inc/global/head.php'); ?>
<?php include ('inc/global/header.php'); ?>

	<main role="main">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php if (is_singular(array('post')) && has_post_thumbnail($post->ID)){ ?>
                <?php echo get_the_post_thumbnail($post->ID,array(150,150),array('alt'=>$post->post_name,'title'=>$post->post_name,'class'=>'blog-post__img')); ?>
            <?php } ?>
            <?php the_content(); ?>
            <nav id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . '</span> %title' ); ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '</span>' ); ?></div>
			</nav><!-- #nav-below -->
		<?php endwhile; // end of the loop. ?>

	</main>
	
<?php include ('inc/global/footer.php'); ?>
