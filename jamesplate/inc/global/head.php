<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 ie7 ie8 ie9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 ie8 ie9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 ie9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9"><![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right') ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link rel="stylesheet" href="<?php echo getThemePath(); ?>/css/global.css" media="all" />
<link rel="stylesheet" href="<?php echo getThemePath(); ?>/css/layout.css" media="all and (max-width: 60em)">

<!--[if lte IE 9]>
<link rel="stylesheet" href="<?php echo getThemePath(); ?>/css/ie.css"/>
<![endif]-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo getBasePath(); ?>/favicon.ico"/>

<?php wp_head(); ?>

</head>