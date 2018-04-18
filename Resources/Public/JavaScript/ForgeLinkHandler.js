/**
 * Module: TYPO3/CMS/ForgeLinks/ForgeLinkHandler
 * Forge Issue Number link interaction
 */
define(['jquery', 'TYPO3/CMS/Recordlist/LinkBrowser'], function ($, LinkBrowser) {
    'use strict';

    /**
     *
     * @type {{}}
     * @exports TYPO3/CMS/ForgeLinks/ForgeLinkHandler
     */
    var ForgeLinkHandler = {};

    $(function () {
        $('#lforgeform').on('submit', function (event) {
            event.preventDefault();

            var value = $(this).find('[name="lforge"]').val();
            if (value === 'forge:') {
                return;
            }

            while (value.substr(0, 6) === 'forge:') {
                value = value.substr(6);
            }

            value = value.replace('#', '');
            value = value.replace(/\s/g, '');

            LinkBrowser.finalizeFunction('forge:' + value);
        });
    });

    return ForgeLinkHandler;
});
