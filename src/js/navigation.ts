/**
 * Theme Navigation
 *
 * @since 1.0.0
 */
import $ from 'jquery';

export default function navigation(): void {
    const masthead = $('.wp-site-blocks .site-header');
    const menuToggle = masthead.find('.menu-toggle');
    const siteNavContain = masthead.find('.main-navigation');
    // const siteNavigation = masthead.find('.main-navigation >' +
    //     ' ul.wp-block-navigation__container');

    // Enable menuToggle.
    (function () {

        // Return early if menuToggle is missing.
        if (!menuToggle.length) {
            return;
        }

        // Add an initial value for the attribute.
        menuToggle.attr('aria-expanded', 'false');

        menuToggle.on('click.nkaccelerate', function () {
            siteNavContain.toggleClass('toggled-on');

            $(this).attr('aria-expanded', (siteNavContain.hasClass('toggled-on') ? 1 : 0));
        });
    })();

}
