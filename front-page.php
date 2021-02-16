<?php get_header(); ?>
    <!-- I started a block for this but it needs more refining so in the
    interest of delivering in a timely manner this is hardcoded. -->
    <div class="entry-content">
        <div class="wp-block-xa10up-hero is-hero-engage-brand is-dark is-style-default">
            <!-- Images should be called through WordPress' media library to
            call the correct size at page load. -->
            <figure class="wp-block-xa10up-hero__media"
                    data-url="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Ipad.png' ); ?>">
                <img loading="lazy" width="742" height="931"
                     src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Ipad.png' ); ?>"
                     alt="" class="wp-image-8 size-full"
                     srcset="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Ipad.png' ); ?> 742w, <?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Ipad-239x300.png' ); ?> 239w"
                     sizes="(max-width: 742px) 100vw, 742px"/></figure>

            <div class="wp-block-xa10up-hero__content-wrapper">
                <div class="wp-block-xa10up-hero__content">
                    <p class="wp-block-xa10up-hero__eyebrow">
                        Who we are</p>


                    <h2 class="wp-block-xa10up-hero__title">
                        Engage brand and increase
                        viewability.</h2>


                    <p class="wp-block-xa10up-hero__body">
                        Elementum sagittis vitae et leo
                        duis ut. Eu feugiat pretium nibh ipsum
                        consequat.</p>


                    <div class="wp-block-columns">
                        <div class="wp-block-column">
                            <div class="wp-block-buttons">
                                <div class="wp-block-button is-style-outline"><a
                                            tabindex="0"
                                            class="wp-block-button__link">Download
                                        Now</a></div>


                                <div class="wp-block-button is-style-text">
                                    <a tabindex="0"
                                       class="wp-block-button__link">Learn
                                        More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wp-block-xa10up-hero is-style-right">
            <div class="wp-block-xa10up-hero__eyebrow"></div>
            <figure class="wp-block-xa10up-hero__media"
                    data-url="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Mobile.png' ); ?>">
                <img loading="lazy" width="619" height="596"
                     src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Mobile.png' ); ?>"
                     alt="" class="wp-image-9 size-full"
                     srcset="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Mobile.png' ); ?> 619w, <?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Device_Mobile-300x289.png' ); ?> 300w"
                     sizes="(max-width: 619px) 100vw, 619px"/></figure>
            <div class="wp-block-xa10up-hero__content-wrapper">
                <div class="wp-block-xa10up-hero__content">
                    <p class="wp-block-xa10up-hero__eyebrow">
                        Eyebrow</p>


                    <h2 class="wp-block-xa10up-hero__title">
                        Generating relevant &amp; engaging content.</h2>


                    <p class="wp-block-xa10up-hero__body">
                        Non diam phasellus vestibulum lorem sed. Massa enim nec
                        dui nunc mattis enim. Quisque egestas diam in arcu
                        cursus euismod quis viverra. Eget arcu dictum varius
                        duis et consectetur lorem donec massa.</p>


                    <div class="wp-block-columns">
                        <div class="wp-block-column">
                            <div class="wp-block-buttons"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wp-block-xa10up-hero is-dark is-media-background is-style-center">
            <div class="wp-block-xa10up-hero__eyebrow"></div>
            <!-- This image was much too large so was optimized in Photoshop before adding -->
            <figure class="wp-block-xa10up-hero__media"
                    data-url="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Phone-1024x340.jpg' ); ?>">
                <img loading="lazy" width="1024" height="340"
                     src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Phone-1024x340.jpg' ); ?>"
                     alt="" class="wp-image-7 size-full"
                     srcset="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Phone-1024x340.jpg' ); ?> 1024w, <?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Phone-300x100.jpg' ); ?> 300w, <?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Phone-768x255.jpg' ); ?> 768w, <?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/Phone.jpg' ); ?> 1281w"
                     sizes="(max-width: 1024px) 100vw, 1024px"/></figure>
            <div class="wp-block-xa10up-hero__content-wrapper">
                <div class="wp-block-xa10up-hero__content">
                    <p class="wp-block-xa10up-hero__eyebrow">
                        Eyebrow</p>


                    <h2 class="wp-block-xa10up-hero__title">
                        Integrated tech</h2>


                    <p class="wp-block-xa10up-hero__body">Create custom
                        solutions with the aim to improve overall outcomes.</p>


                    <div class="wp-block-columns">
                        <div class="wp-block-column">
                            <div class="wp-block-buttons">
                                <div class="wp-block-button is-style-outline"><a
                                            tabindex="0"
                                            class="wp-block-button__link">Contact
                                        Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>