<!doctype html>
<html lang="en-IN">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<link href="https://fonts.cdnfonts.com/css/roboto" rel="stylesheet">

        <meta name="viewport" content="width=device-width,initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<header>
		<div id="navbar" class="navbar">
			<a class="navbar__header-logo" href="<?= get_home_url() ?>">
				<img src="<?= get_template_directory_uri() ?>/images/logo.jpg" alt="logo" />
			</a>
			<div class="navbar-menu">
				<?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'depth' => '1',
                        'menu_class' => 'main-navbar'
                    ]);
                 ?>
				<button class="menu-search" aria-controls="primary-menu">
					<?php get_search_form(); ?>
					<img class="search-icon" src="<?= get_template_directory_uri() ?>/assets/icons/search-icon.png" alt="navbar search form">
					<img class="close-icon" src="<?= get_template_directory_uri() ?>/assets/icons/close-icon.png" alt="navbar search form">
				</button>
				<img class="navbar-menu__burger-icon" src="<?= get_template_directory_uri(); ?>/assets/icons/burger.png" alt="burger menu">
				<img class="navbar-menu__x-icon display-none" src="<?= get_template_directory_uri(); ?>/assets/icons/x.png" alt="burger menu">
			</div>
		</div>
	</header>
<body>
