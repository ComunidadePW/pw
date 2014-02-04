(function() {
    /*global jQuery: false*/
    'use strict';

    var $external = document.querySelectorAll('a[rel*="external"]'),
        $pre      = document.querySelectorAll('.post-content > pre'),
        $menu     = document.getElementById('anchor-header-sidebar');

    function loop($elements, cb) {
        var i = $elements.length;

        while (i--) {
            cb($elements[i]);
        };
    };//loop

    /* a rel="external" */
    loop($external, function ($element) {
        $element.onclick = function () {
            window.open(this.href);

            return false;
        };
    });

    // Sintax Highlight do Google Prettify
    loop($pre, function ($element) {
        $element.classList.add('prettyprint');
        $element.classList.add('linenums');
    });
    prettyPrint();

})();//function