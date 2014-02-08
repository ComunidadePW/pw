(function() {
    /*global jQuery: false*/
    'use strict';

    var $external = document.querySelectorAll('a[rel*="external"]'),
        $pre = document.querySelectorAll('.post-content > pre'),
        $menu = document.getElementById('anchor-header-sidebar'),
        $headerMenu = document.getElementById('wrap-header-menu'),
        $menuLabel = document.getElementById('header-menu-label'),
        $searchLabel = document.getElementById('header-search-label');

    function loop($elements, cb) {
        var i = $elements.length;

        while (i--) {
            cb($elements[i]);
        };
    }
    
    function openHeaderAction(e) {
        e.preventDefault();
        var $parent = $headerMenu;

        if ($parent.className.match(/is-opened/g)) {
            $parent.classList.remove('is-opened');
        } else {
            $parent.classList.add('is-opened');
        }
    }

    $menuLabel.addEventListener('click', openHeaderAction);
    $searchLabel.addEventListener('click', openHeaderAction);


    // Sintax Highlight do Google Prettify
    loop($pre, function ($element) {
        $element.classList.add('prettyprint');
        $element.classList.add('linenums');
    });
    prettyPrint();

}());//function