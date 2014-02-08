(function(window, document, undefined) {
    /*global jQuery: false*/
    'use strict';

    var $external = document.querySelectorAll('a[rel*="external"]'),
        $pre = document.querySelectorAll('.post-content > pre'),
        $menu = document.getElementById('anchor-header-sidebar'),
        $headerMenu = document.getElementById('wrap-header-menu'),
        $menuLabel = document.getElementById('header-menu-label'),
        $searchLabel = document.getElementById('header-search-label'),
        $searchInput = document.getElementById('header-search-input');

    function loop($elements, cb) {
        var i = $elements.length;

        while (i--) {
            cb($elements[i]);
        };
    }
    
    function openHeaderAction(e) {
        e.preventDefault();
        var action = this.getAttribute('data-action');

        if ($headerMenu.className.match(/is-opened/g) === null) {
            $headerMenu.classList.add('is-opened-' + action);
        } else {
            $headerMenu.classList.remove('is-opened-menu');
            $headerMenu.classList.remove('is-opened-search');
        }
    }

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