// DATA_TEMPLATE: empty_table
oTest.fnStart( "oLanguage.sInfo" );

$(document).ready( function () {
	/* Check the default */
	var oTable = $('#example').dataTable( {
		"bServerSide": true,
		"sAjaxSource": "../../../examples/server_side/scripts/server_processing.php"
	} );
	var oSettings = oTable.fnSettings();
	
	oTest.fnWaitTest( 
		"Info language is 'Showing _START_ to _END_ of _TOTAL_ entries' by default",
		null,
		function () { return oSettings.oLanguage.sInfo == "Showing _START_ to _END_ of _TOTAL_ entries"; }
	);
	
	oTest.fnTest( 
		"Info language default is in the DOM",
		null,
		function () { return document.getElementById('example_info').innerHTML = "Showing 1 to 10 of 57 entries"; }
	);
	
	
	oTest.fnWaitTest( 
		"Info language can be defined - without any macros",
		function () {
			oSession.fnRestore();
			oTable = $('#example').dataTable( {
				"bServerSide": true,
		"sAjaxSource": "../../../examples/server_side/scripts/server_processing.php",
				"oLanguage": {
					"sInfo": "date test"
				}
			} );
			oSettings = oTable.fnSettings();
		},
		function () { return oSettings.oLanguage.sInfo == "date test"; }
	);
	
	oTest.fnTest( 
		"Info language definition is in the DOM",
		null,
		function () { return document.getElementById('example_info').innerHTML = "date test"; }
	);
	
	oTest.fnWaitTest( 
		"Info language can be defined - with macro _START_ only",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"bServerSide": true,
		"sAjaxSource": "../../../examples/server_side/scripts/server_processing.php",
				"oLanguage": {
					"sInfo": "date _START_ test"
				}
			} );
		},
		function () { return document.getElementById('example_info').innerHTML = "date 1 test"; }
	);
	
	oTest.fnWaitTest( 
		"Info language can be defined - with macro _END_ only",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"bServerSide": true,
		"sAjaxSource": "../../../examples/server_side/scripts/server_processing.php",
				"oLanguage": {
					"sInfo": "date _END_ test"
				}
			} );
		},
		function () { return document.getElementById('example_info').innerHTML = "date 10 test"; }
	);
	
	oTest.fnWaitTest( 
		"Info language can be defined - with macro _TOTAL_ only",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"bServerSide": true,
		"sAjaxSource": "../../../examples/server_side/scripts/server_processing.php",
				"oLanguage": {
					"sInfo": "date _END_ test"
				}
			} );
		},
		function () { return document.getElementById('example_info').innerHTML = "date 57 test"; }
	);
	
	oTest.fnWaitTest( 
		"Info language can be defined - with macros _START_ and _END_",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"bServerSide": true,
		"sAjaxSource": "../../../examples/server_side/scripts/server_processing.php",
				"oLanguage": {
					"sInfo": "date _START_ _END_ test"
				}
			} );
		},
		function () { return document.getElementById('example_info').innerHTML = "date 1 10 test"; }
	);
	
	oTest.fnWaitTest( 
		"Info language can be defined - with macros _START_, _END_ and _TOTAL_",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"bServerSide": true,
		"sAjaxSource": "../../../examples/server_side/scripts/server_processing.php",
				"oLanguage": {
					"sInfo": "date _START_ _END_ _TOTAL_ test"
				}
			} );
		},
		function () { return document.getElementById('example_info').innerHTML = "date 1 10 57 test"; }
	);
	
	
	oTest.fnComplete();
} );