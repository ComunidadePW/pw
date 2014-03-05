(function(window, document, undefined) {
    'use strict';
    /*global console: false, Social: false, prettyPrint: false */

    var $external = document.querySelectorAll('a[rel*="external"]'),
        $pre = document.querySelectorAll('.post-content > pre'),
        $single = document.querySelectorAll('.single-post'),
        $headerMenu = document.getElementById('wrap-header-menu'),
        $menuLabel = document.getElementById('header-menu-label'),
        $searchLabel = document.getElementById('header-search-label'),
        $searchInput = document.getElementById('header-search-input'),
        $listThumb = document.querySelectorAll('.attachment-list-thumb');

    function loop($elements, cb) {
        var i = $elements.length;
        while (i--) {
            cb($elements[i]);
        }
    }

    function openHeaderAction(e) {
        var action = this.getAttribute('data-action'),
            re = new RegExp('is-opened-' + action, 'g');

        e.preventDefault();

        if ($headerMenu.className.match(re) === null) {
            $headerMenu.classList.add('is-opened-' + action);
        } else {
            $headerMenu.classList.remove('is-opened-' + action);
        }
    }

    // Assync list thumb images
    $listThumb = [].slice.call($listThumb);
    $listThumb.forEach(function($thumb){
        $thumb.setAttribute('src', $thumb.getAttribute('data-src'));
        $thumb.removeAttribute('data-src');
    });


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

    // External links
    loop($external, function ($element) {
        $element.setAttribute('target', '_blank');
    });

}(document, document));//function