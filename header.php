<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_url       = ( empty( $custom_logo_id ) ) ? get_stylesheet_directory_uri() . '/assets/icons/site_logo.svg' : wp_get_attachment_image_url( $custom_logo_id, 'full' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="description"
          content="A front-end developer example for 10up by Xristopher Anderton">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cousine:wght@700&family=Montserrat:wght@500;700&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site-wrapper">
    <header id="header">
        <div class="header-wrapper">
            <div class="header-content">
                <picture id="logo">
                    <a href="<?php get_home_url(); ?>">
                        <img src="<?php echo $logo_url ?>"
                             alt="<?php bloginfo( 'name' ) ?>">
                    </a>
                </picture>
                <div class="nav-wrapper">
                    <?php get_template_part( 'template-parts/nav', 'primary' ); ?>
                </div>
            </div>
        </div>
        <?php ?>
    </header>
    <div class="content-wrapper">
        <main id="content">
