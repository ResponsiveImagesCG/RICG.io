/*! Project Name - v - 2014-10-09
* Copyright (c) 2014 Authored by Filament Group, Inc. */// DOM-ready auto-init of plugins.
// Many plugins bind to an "enhance" event to init themselves on dom ready, or when new markup is inserted into the DOM
(function( $ ){
	$( function(){
		$( document ).trigger( "enhance" );
	});
}( jQuery ));
