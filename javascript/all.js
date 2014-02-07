(function() {
    /*global jQuery: false*/
    'use strict';

    var $external = document.querySelectorAll('a[rel*="external"]'),
        $pre      = document.querySelectorAll('.post-content > pre'),
        $menu     = document.getElementById('anchor-header-sidebar'),
        $menuLabel = document.getElementById('header-menu-label');

    function loop($elements, cb) {
        var i = $elements.length;

        while (i--) {
            cb($elements[i]);
        };
    };//loop

    $menuLabel.addEventListener('click', function(e){
        e.preventDefault();
        var $parent = this.parentNode;

        if ($parent.className.match(/is-opened/g)) {
            $parent.classList.remove('is-opened');
        } else {
            $parent.classList.add('is-opened');
        }
    });

    /* a rel="external" */
    loop($external, function ($element) {
        $element.addEventListener('click', function(e){
            window.open(this.href);

            return false;
        });
    });

    // Sintax Highlight do Google Prettify
    loop($pre, function ($element) {
        $element.classList.add('prettyprint');
        $element.classList.add('linenums');
    });
    prettyPrint();

})();//function