<?php
$icon_menu_url  = get_stylesheet_directory_uri() . '/assets/icons/Icon:Menu.svg';
$icon_close_url = get_stylesheet_directory_uri() . '/assets/icons/Icon:Close.svg';
?>
<nav class="nav-primary">
    <!--  Javascript will update the aria-label when the state changes.  -->
    <button class="nav-toggle" aria-label="Open the Menu">
        <div class="ends"></div>
        <div class="middle"></div>
    </button>
    <div class="nav-content">
        <?php wp_nav_menu(array('theme_location' => 'primary-nav')) ?>
    </div>
</nav>
