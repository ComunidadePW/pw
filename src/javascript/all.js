(function(window, document, undefined) {
    'use strict';
    /*global Social: false, prettyPrint: false */

    var $external = document.querySelectorAll('a[rel*="external"]'),
        $pre = document.querySelectorAll('.post-content > pre'),
        $single = document.querySelectorAll('.single-post'),
        $headerNav = document.getElementById('header-nav'),
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
        var re = new RegExp('is-opened-' + this.getAttribute('data-action'), 'g');

        e.preventDefault();

        if ($headerNav.className.match(re) === null) {
            $headerNav.classList.add('is-opened-' + this.getAttribute('data-action'));
        } else {
            $headerNav.classList.remove('is-opened-' + this.getAttribute('data-action'));
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