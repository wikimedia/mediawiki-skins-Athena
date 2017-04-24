var Athena = {

	init: function () {

		// First hide all actions
		//$( '#actions, .mw-editsection' ).hide();

		// Bind events
		//$( 'h1, h2, h3, h4, h5, h6' ).mouseover( Athena.showActions ).mouseout( Athena.hideActions );
	},

	showActions: function ( event ) {
		$( '#actions, .mw-editsection', this ).show();
	},
	hideActions: function ( event ) {
		$( '#actions, .mw-editsection', this ).hide();
	}
}

$( Athena.init );