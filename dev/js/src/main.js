(function(){

  'use strict';

  //Code tabs
  B('.code-tabs').each(function(el){

    var nav = el.getElementsByTagName('nav')[0],
        tabs = el.getElementsByClassName('tabs')[0];

    B(nav).click(function(e){
      var target = e.target;

      if(target.tagName === 'A' && target.hasAttribute('data-tab-id')){
        //clean
        B(nav.getElementsByClassName('is-active')[0]).removeClass('is-active');
        B(tabs.getElementsByClassName('is-active')[0]).removeClass('is-active');

        //switch to new tab
        var tabEl = tabs.getElementsByClassName(target.getAttribute('data-tab-id'))[0];
        B(tabEl).addClass('is-active');
        B(target).addClass('is-active');
      }
    });

  });

}());