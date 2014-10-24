(function( window ) {
  var trigger = document.querySelectorAll( ".head" ),
      toggle = function( e ) {
        var collapse = this.parentNode,
            body = collapse.querySelector( ".body" ),
            curr = collapse.className.indexOf( "open") > -1;

        collapse.setAttribute( "class", curr ? collapse.className.replace( "open", "" ) : collapse.className + " open" );
      };

  for( i = 0, l = trigger.length; i < l; i++ ) {
    var el = trigger[ i ];
    el.addEventListener( "click", toggle );

    el.parentNode.setAttribute( "class", el.parentNode.className + " heading" + i );
  }
}());