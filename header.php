<?php
/**
 * Created by PhpStorm.
 * User: gregbueno
 * Date: 11/10/14
 * Time: 7:45 AM
 */

namespace ObservantRecords\WordPress\Themes\PenziasAndWilson;

?>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div id="container" class="container">
		<header>
			<h1 id="logo">Penzias and Wilson</h1>
		</header>
