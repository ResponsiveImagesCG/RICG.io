/*! Project Name - v - 2014-10-09
* Copyright (c) 2014 Authored by Filament Group, Inc. *//* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransforms3d-inlinesvg-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes
 */
;



window.Modernizr = (function( window, document, undefined ) {

    var version = '2.6.2',

    Modernizr = {},

    enableClasses = true,

    docElement = document.documentElement,

    mod = 'modernizr',
    modElem = document.createElement(mod),
    mStyle = modElem.style,

    inputElem  ,


    toString = {}.toString,

    prefixes = ' -webkit- -moz- -o- -ms- '.split(' '),



    omPrefixes = 'Webkit Moz O ms',

    cssomPrefixes = omPrefixes.split(' '),

    domPrefixes = omPrefixes.toLowerCase().split(' '),

    ns = {'svg': 'http://www.w3.org/2000/svg'},

    tests = {},
    inputs = {},
    attrs = {},

    classes = [],

    slice = classes.slice,

    featureName, 


    injectElementWithStyles = function( rule, callback, nodes, testnames ) {

      var style, ret, node, docOverflow,
          div = document.createElement('div'),
                body = document.body,
                fakeBody = body || document.createElement('body');

      if ( parseInt(nodes, 10) ) {
                      while ( nodes-- ) {
              node = document.createElement('div');
              node.id = testnames ? testnames[nodes] : mod + (nodes + 1);
              div.appendChild(node);
          }
      }

                style = ['&#173;','<style id="s', mod, '">', rule, '</style>'].join('');
      div.id = mod;
          (body ? div : fakeBody).innerHTML += style;
      fakeBody.appendChild(div);
      if ( !body ) {
                fakeBody.style.background = '';
                fakeBody.style.overflow = 'hidden';
          docOverflow = docElement.style.overflow;
          docElement.style.overflow = 'hidden';
          docElement.appendChild(fakeBody);
      }

      ret = callback(div, rule);
        if ( !body ) {
          fakeBody.parentNode.removeChild(fakeBody);
          docElement.style.overflow = docOverflow;
      } else {
          div.parentNode.removeChild(div);
      }

      return !!ret;

    },
    _hasOwnProperty = ({}).hasOwnProperty, hasOwnProp;

    if ( !is(_hasOwnProperty, 'undefined') && !is(_hasOwnProperty.call, 'undefined') ) {
      hasOwnProp = function (object, property) {
        return _hasOwnProperty.call(object, property);
      };
    }
    else {
      hasOwnProp = function (object, property) { 
        return ((property in object) && is(object.constructor.prototype[property], 'undefined'));
      };
    }


    if (!Function.prototype.bind) {
      Function.prototype.bind = function bind(that) {

        var target = this;

        if (typeof target != "function") {
            throw new TypeError();
        }

        var args = slice.call(arguments, 1),
            bound = function () {

            if (this instanceof bound) {

              var F = function(){};
              F.prototype = target.prototype;
              var self = new F();

              var result = target.apply(
                  self,
                  args.concat(slice.call(arguments))
              );
              if (Object(result) === result) {
                  return result;
              }
              return self;

            } else {

              return target.apply(
                  that,
                  args.concat(slice.call(arguments))
              );

            }

        };

        return bound;
      };
    }

    function setCss( str ) {
        mStyle.cssText = str;
    }

    function setCssAll( str1, str2 ) {
        return setCss(prefixes.join(str1 + ';') + ( str2 || '' ));
    }

    function is( obj, type ) {
        return typeof obj === type;
    }

    function contains( str, substr ) {
        return !!~('' + str).indexOf(substr);
    }

    function testProps( props, prefixed ) {
        for ( var i in props ) {
            var prop = props[i];
            if ( !contains(prop, "-") && mStyle[prop] !== undefined ) {
                return prefixed == 'pfx' ? prop : true;
            }
        }
        return false;
    }

    function testDOMProps( props, obj, elem ) {
        for ( var i in props ) {
            var item = obj[props[i]];
            if ( item !== undefined) {

                            if (elem === false) return props[i];

                            if (is(item, 'function')){
                                return item.bind(elem || obj);
                }

                            return item;
            }
        }
        return false;
    }

    function testPropsAll( prop, prefixed, elem ) {

        var ucProp  = prop.charAt(0).toUpperCase() + prop.slice(1),
            props   = (prop + ' ' + cssomPrefixes.join(ucProp + ' ') + ucProp).split(' ');

            if(is(prefixed, "string") || is(prefixed, "undefined")) {
          return testProps(props, prefixed);

            } else {
          props = (prop + ' ' + (domPrefixes).join(ucProp + ' ') + ucProp).split(' ');
          return testDOMProps(props, prefixed, elem);
        }
    }    tests['csstransforms3d'] = function() {

        var ret = !!testPropsAll('perspective');

                        if ( ret && 'webkitPerspective' in docElement.style ) {

                      injectElementWithStyles('@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}', function( node, rule ) {
            ret = node.offsetLeft === 9 && node.offsetHeight === 3;
          });
        }
        return ret;
    };

    tests['inlinesvg'] = function() {
      var div = document.createElement('div');
      div.innerHTML = '<svg/>';
      return (div.firstChild && div.firstChild.namespaceURI) == ns.svg;
    };    for ( var feature in tests ) {
        if ( hasOwnProp(tests, feature) ) {
                                    featureName  = feature.toLowerCase();
            Modernizr[featureName] = tests[feature]();

            classes.push((Modernizr[featureName] ? '' : 'no-') + featureName);
        }
    }



     Modernizr.addTest = function ( feature, test ) {
       if ( typeof feature == 'object' ) {
         for ( var key in feature ) {
           if ( hasOwnProp( feature, key ) ) {
             Modernizr.addTest( key, feature[ key ] );
           }
         }
       } else {

         feature = feature.toLowerCase();

         if ( Modernizr[feature] !== undefined ) {
                                              return Modernizr;
         }

         test = typeof test == 'function' ? test() : test;

         if (typeof enableClasses !== "undefined" && enableClasses) {
           docElement.className += ' ' + (test ? '' : 'no-') + feature;
         }
         Modernizr[feature] = test;

       }

       return Modernizr; 
     };


    setCss('');
    modElem = inputElem = null;


    Modernizr._version      = version;

    Modernizr._prefixes     = prefixes;
    Modernizr._domPrefixes  = domPrefixes;
    Modernizr._cssomPrefixes  = cssomPrefixes;



    Modernizr.testProp      = function(prop){
        return testProps([prop]);
    };

    Modernizr.testAllProps  = testPropsAll;


    Modernizr.testStyles    = injectElementWithStyles;    docElement.className = docElement.className.replace(/(^|\s)no-js(\s|$)/, '$1$2') +

                                                    (enableClasses ? ' js ' + classes.join(' ') : '');

    return Modernizr;

})(this, this.document);
;
/* app globals scripting */
(function( window ){
	window.projectName = {};
}(this));

/*
	this file:
		* determines whether a browser is qualified for enhancements at all, and if so,
		* finds available CSS and JS assets that may be loaded
		* check the template via meta[name='template']
		* test features and device conditions and environment to determine which files to load
		* load files as needed
*/
(function( win, undefined ){
	"use strict";

	// Are we allowing web fonts?
	var allowType = true;

	// test for font-face version to load via Data URI'd CSS
	// Basically, load WOFF unless it's android's default browser, which needs TTF
	var fontSrcRef = null, ua;
	/**
	if ( allowType ) {
		fontSrcRef = win.document.getElementById( "fontsProximaWOFF" );
		ua = win.navigator.userAgent;

		if( ua.indexOf( "Android" ) > -1 && ua.indexOf( "like Gecko" ) > -1 && ua.indexOf( "Chrome" ) === -1 ){
			fontSrcRef = win.document.getElementById( "fontsProximaTTF" );
		}
	}
 */

	var initialJS = win.document.getElementById( "initialjs" ),
		docClasses = [ "enhancing enhanced" ],
		grunticonPath = win.document.getElementById( "grunticon" ),
		iconsDataSVG = "icons.data.svg.css",
		iconsDataPNG = "icons.data.png.css",
		iconsPNG = "icons.fallback.css";

	// simple load CSS function
	function loadCSS( href ){
		if( initialJS && initialJS.parentNode ) {
			var link = win.document.createElement( "link" );
			link.rel = "stylesheet";
			link.href= href;
			initialJS.parentNode.insertBefore( link, initialJS );
		} else {
			win.setTimeout(function() {
				loadCSS( href );
			}, 15);
		}
	}

	if( fontSrcRef ) {
		// if fontSrcRef defined, grab its content attr for the font url
		loadCSS( fontSrcRef.content );
	}


	// simple load JS function
	function loadJS( src ){
		if( initialJS && initialJS.parentNode ) {
			var script = win.document.createElement( "script" );
			script.src= src;
			initialJS.parentNode.insertBefore( script, initialJS );
		} else {
			win.setTimeout(function() {
				loadJS( src );
			}, 15);
		}
	}

	// modified grunticon loader -
	// use yepnope's loader to fetch our backgrounds and icons css
	function grunticon( css ){

		var svg = !!win.document.createElementNS && !!win.document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect && !!win.document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1") && !(win.opera && win.navigator.userAgent.indexOf('Chrome') === -1),
			load = function( data ){
				loadCSS( css[ data && svg ? 0 : data ? 1 : 2 ] );
			},

			// Thanks Modernizr
			img = new win.Image();

		img.onerror = function(){
			load( false );
		};

		img.onload = function(){
			load( img.width === 1 && img.height === 1 );
		};

		img.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
	}


	// NOTE: Load grunticon icons without any broad qualification

	// get Grunticon icon paths, if defined
	if( grunticonPath && grunticonPath.content){
		var path = grunticonPath.content;

		// load 'em
		grunticon([ path + iconsDataSVG, path + iconsDataPNG, path + iconsPNG ]);
	}


	// Broad qualification starts here.


	// Add your qualifications for major browser experience divisions here.
	// For example, you might choose to only enhance browsers that support document.querySelector (IE8+, etc).
	// Use case will vary, but basic browsers: last stop here!
	if( !( "querySelector" in win.document ) ){
		return;
	}

	// Add scoping classes to HTML element
	win.document.documentElement.className += " " + docClasses.join(" ");

	// Get scripts to load, if defined
	if( initialJS ){
		var enhancedScripting = initialJS.getAttribute( "data-enhance" );
		// Load JS files
		if( enhancedScripting ){
			loadJS( enhancedScripting );
		}
	}

}( this ));
