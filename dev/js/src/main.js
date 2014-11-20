(function(){

    'use strict';

    var bind;
    if(window.addEventListener){
        bind = function(type, el, listener){
            el.addEventListener(type, listener, false);
        };
    } else {
        bind = function(type, el, listener){
            el.attachEvent(type, listener);
        };
    }

    //Main nav
    (function(){

        var nav = document.getElementById('main-nav'),
            navTrigger = document.getElementById('main-nav-trigger');

        new FastButton(navTrigger, function(e){
            e.preventDefault();
            if(nav.className.indexOf('hidden') !== -1){
                nav.className = nav.className.replace('hidden','');
            } else {
                nav.className += ' hidden';
            }
        });

    })();

}());