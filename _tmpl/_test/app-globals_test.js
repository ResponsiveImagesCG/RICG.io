(function( window ) {
	module( "Methods" , {
		setup: function(){
		},
		teardown: function(){
		}
	});

	test( "Global", function(){
		equal( typeof window.projectName, "object", "The window.projectName should be defined" );
	});

})( this );
