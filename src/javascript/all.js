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
        $searchInput = document.getElementById('header-search-input');

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

    function externalLinks () {
        if (!document.getElementsByTagName) return;
        var anchors = document.getElementsByTagName("a");
        for (var i=0; i<anchors.length; i++) {
            var anchor = anchors[i];
            if (
                anchor.getAttribute("href") && (
                anchor.getAttribute("rel") == "external" ||
                anchor.getAttribute("rel") == "external nofollow" ||
                anchor.getAttribute("rel") == "nofollow external" )
                )
            anchor.target = "_blank";
        }
    }

    // Share Buttons
    if($single.length){
        Social.init();
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

    externalLinks();

}(document, document, undefined));//function