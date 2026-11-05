/**
 * Sticky Header Plugin (ADOPTED)
 *
 * Description: Simple plugin for fixing elements on scroll
 *
 * Author: Angel Petkov
 * Author Website: https://quiztion.bg/
 *
 *
 * Options:
 *	- position (string): 'top', 'right', 'bottom', 'left' - top by default
 *  - animationDuration (numeric): in seconds - '0.4', '0.8', '1' and etc. - 0.4 by default
 *  - reverse (boolean): true to hide element on scroll down and show in scroll up, false to fix the element - false by default
 *  - width (string): in pixels or percentage - 100% by default
 *  - zIndex (numeric): option to control the z-index - 9999 by default
 *  - offset (numeric): multiplier of the element's height before the sticky behavior is activated.
 *
 */

(function($) {

    $.fn.stickify = function(options) {

        var $selector = this;

        // Set default options
        var defaultOptions = {
            position: 'top',
            animationDuration: '0.4',
            reverse: false,
            width: '100%',
            zIndex: '9999',
            offset: 2
        };

        var opts = $.extend({}, defaultOptions, options);

        if (!opts.reverse) {
            return this;
        }

        var lastScrollTop = $(window).scrollTop();
        var index = 5;

        var $clone = null;
        var cloneCreated = false;
        var cloneVisible = false;

        function getShowOffset() {
            return $selector.outerHeight() * opts.offset;
        }

        function createClone() {

            if (cloneCreated) {
                return;
            }

            var height = $selector.outerHeight();

            $clone = $selector.clone(true, true);

            $clone
              .attr('id', $selector.attr('id') + '-clone')
              .addClass('sticky')
              .css({
                  position: 'fixed',
                  top: '-' + height + 'px',
                  // left: '0',
                  width: opts.width,
                  zIndex: opts.zIndex,
                  // transition:
                  //   opts.position + ' ' +
                  //   opts.animationDuration +
                  //   's ease-in-out'
                  animationDuration: opts.animationDuration + 's',
                  animationFillMode: 'both'
              });

            $selector.after($clone);

            cloneCreated = true;
        }

        function showClone() {

            createClone();

            if (cloneVisible) {
                return;
            }

            cloneVisible = true;

            // Force initial position to be rendered
            $clone[0].offsetHeight;

            // Smoothly slide into view
            $clone.css(opts.position, '0');
        }

        function hideClone() {

            if (!$clone || !cloneVisible) {
                return;
            }

            cloneVisible = false;

            $clone.css(
              opts.position,
              '-' + $selector.outerHeight() + 'px'
            );
        }

        function removeClone() {

            if (!$clone) {
                return;
            }

            $clone.remove();

            $clone = null;
            cloneCreated = false;
            cloneVisible = false;
        }

        $(window).on('scroll', function() {

            var scrollTop = $(window).scrollTop();

            /*
             * We reached the actual top of the page.
             * Only here do we remove the clone.
             */
            if (scrollTop <= 0) {

                removeClone();

                lastScrollTop = scrollTop;
                return;
            }

            /*
             * Ignore very small movements.
             */
            if (Math.abs(lastScrollTop - scrollTop) <= index) {
                return;
            }

            /*
             * SCROLL UP
             */
            if (scrollTop < lastScrollTop) {

                /*
                 * Clone can appear only after we have
                 * scrolled down far enough.
                 */
                if (scrollTop > getShowOffset()) {
                    showClone();
                }

                /*
                 * SCROLL DOWN
                 */
            } else {

                /*
                 * Once the clone exists, scrolling down
                 * hides it, but does not remove it.
                 */
                hideClone();
            }

            lastScrollTop = scrollTop;
        });

        return this;
    };

})(jQuery);