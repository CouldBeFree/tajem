<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>

	<header class="page-header">
        <div class="container-main">
            <nav class="main-nav" role="navigation">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home"><img src="<?php echo get_theme_mod('logo'); ?>" alt=""></a>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
            <div id="popup"></div>
        </div>
	</header>