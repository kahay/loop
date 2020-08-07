/*!
 * classie v1.0.1
 * class helper functions
 * from bonzo https://github.com/ded/bonzo
 * MIT license
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true, unused: true */
/*global define: false, module: false */

( function( window ) {

    'use strict';
    
    // class helper functions from bonzo https://github.com/ded/bonzo
    
    function classReg( className ) {
      return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
    }
    
    // classList support for class management
    // altho to be fair, the api sucks because it won't accept multiple classes at once
    var hasClass, addClass, removeClass;
    
    if ( 'classList' in document.documentElement ) {
      hasClass = function( elem, c ) {
        return elem.classList.contains( c );
      };
      addClass = function( elem, c ) {
        elem.classList.add( c );
      };
      removeClass = function( elem, c ) {
        elem.classList.remove( c );
      };
    }
    else {
      hasClass = function( elem, c ) {
        return classReg( c ).test( elem.className );
      };
      addClass = function( elem, c ) {
        if ( !hasClass( elem, c ) ) {
          elem.className = elem.className + ' ' + c;
        }
      };
      removeClass = function( elem, c ) {
        elem.className = elem.className.replace( classReg( c ), ' ' );
      };
    }
    
    function toggleClass( elem, c ) {
      var fn = hasClass( elem, c ) ? removeClass : addClass;
      fn( elem, c );
    }
    
    var classie = {
      // full names
      hasClass: hasClass,
      addClass: addClass,
      removeClass: removeClass,
      toggleClass: toggleClass,
      // short names
      has: hasClass,
      add: addClass,
      remove: removeClass,
      toggle: toggleClass
    };
    
    // transport
    if ( typeof define === 'function' && define.amd ) {
      // AMD
      define( classie );
    } else if ( typeof exports === 'object' ) {
      // CommonJS
      module.exports = classie;
    } else {
      // browser global
      window.classie = classie;
    }
    
    })( window );


(function() {
    var menuEl = document.getElementById('ml-menu'),
    mlmenu = new MLMenu(menuEl, {
      // breadcrumbsCtrl : true, // show breadcrumbs
      // initialBreadcrumb : 'all', // initial breadcrumb text
      backCtrl : false, // show back button
      // itemsDelayInterval : 60, // delay between each menu item sliding animation
      onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
    });
  
    // mobile menu toggle
    var openMenuCtrl = document.querySelector('.action--open'),
    closeMenuCtrl = document.querySelector('.action--close');
  
    openMenuCtrl.addEventListener('click', openMenu);
    closeMenuCtrl.addEventListener('click', closeMenu);
  
    function openMenu() {
    classie.add(menuEl, 'menu--open');
    closeMenuCtrl.focus();
    }
  
    function closeMenu() {
    classie.remove(menuEl, 'menu--open');
    openMenuCtrl.focus();
    }
  
    // simulate grid content loading
    var gridWrapper = document.querySelector('.content');
  
    function loadDummyData(ev, itemName) {
    ev.preventDefault();
  
    closeMenu();
    gridWrapper.innerHTML = '';
    classie.add(gridWrapper, 'content--loading');
    setTimeout(function() {
      classie.remove(gridWrapper, 'content--loading');
      gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
    }, 700);
    }
  })();

