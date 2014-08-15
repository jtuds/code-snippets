<?php include ('inc/global/head.php'); ?>
<?php include ('inc/global/header.php'); ?>

	<main role="main">
		<h1><?php _e( 'Not Found', 'boilerplate' ); ?></h1>
		<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'boilerplate' ); ?></p>
		<?php
			get_search_form();
			// add focus to search <input>
			echo '<script>document.getElementById(\'s\') && document.getElementById(\'s\').focus();</script>'.PHP_EOL;
		?>
	</main>

<?php include ('inc/global/footer.php'); ?>
