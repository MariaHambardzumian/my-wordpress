<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
<link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Kaushan+Script|Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><br>
	<div class="container">
		<header class="site-header">

			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>
			
			<h1>
				<a  id="h1a" href="<?php echo home_url(); ?>">
					<?php bloginfo('name'); ?>
				</a>			
			</h1>

			<h5><?php bloginfo('description') ?></h5>

			<nav class="site-nav">
				<?php 
				$args = array(
					"theme_location" => "top_menu"
				);

				wp_nav_menu($args); 
				?>
			</nav>
		</header>

		