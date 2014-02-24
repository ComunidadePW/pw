(function(window, document, undefined) {
    /*global jQuery: false*/
    'use strict';

    var $external = document.querySelectorAll('a[rel*="external"]'),
        $pre = document.querySelectorAll('.post-content > pre'),
        $single = document.querySelectorAll('.single-post'),
        $menu = document.getElementById('anchor-header-sidebar'),
        $headerMenu = document.getElementById('wrap-header-menu'),
        $menuLabel = document.getElementById('header-menu-label'),
        $searchLabel = document.getElementById('header-search-label'),
        $searchInput = document.getElementById('header-search-input'),
        $arroba = document.getElementById('advertising');

    function loop($elements, cb) {
        var i = $elements.length;

        while (i--) {
            cb($elements[i]);
        };
    }

    function openHeaderAction(e) {
        e.preventDefault();
        var action = this.getAttribute('data-action'),
            re = new RegExp('is-opened-' + action, 'g');


        if ($headerMenu.className.match(re) === null) {
            $headerMenu.classList.add('is-opened-' + action);
        } else {
            $headerMenu.classList.remove('is-opened-' + action);
        }
    }

    // Share Buttons
    if($single.length){
        Social.init();
    }

    $arroba.addEventListener('click', function () {
        var href = 'https://www.eventials.com/?utm_source=pinceladas-da-web&utm_medium=site-link&utm_campaign=animated-banner';

        window.open(href, '_blank', '');
    });

    $menuLabel.addEventListener('click', openHeaderAction);
    $searchLabel.addEventListener('click', openHeaderAction);
    $searchLabel.addEventListener('click', function () {
        $searchInput.focus();
    });

    // Sintax Highlight do Google Prettify
    loop($pre, function ($element) {
        $element.classList.add('prettyprint');
        $element.classList.add('linenums');
    });
    prettyPrint();

}(document, document, undefined));//function