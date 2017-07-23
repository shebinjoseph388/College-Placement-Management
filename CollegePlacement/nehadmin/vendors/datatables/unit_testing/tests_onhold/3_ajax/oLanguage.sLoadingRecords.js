// DATA_TEMPLATE: empty_table
oTest.fnStart( "oLanguage.sLoadingRecords" );

$(document).ready( function () {
	var tmp = false;
	oTest.fnTest( 
		"Default loading text is 'Loading...'",
		function () {
			$('#example').dataTable( {
				"sAjaxSource": "../../../examples/ajax/sources/arrays.txt"
			} );
			tmp = $('#example tbody tr td')[0].innerHTML == "Loading...";
		},
		function () { return tmp; }
	);
	
	oTest.fnTest(
		"Text can be overriden",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"oLanguage": {
					"sLoadingRecords": "dateest"
				},
				"sAjaxSource": "../../../examples/ajax/sources/arrays.txt"
			} );
			tmp = $('#example tbody tr td')[0].innerHTML == "dateest";
		},
		function () { return tmp; }
	);
	
	oTest.fnTest(
		"When sZeroRecords is given but sLoadingRecords is not, sZeroRecords is used",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"oLanguage": {
					"sZeroRecords": "dateest_sZeroRecords"
				},
				"sAjaxSource": "../../../examples/ajax/sources/arrays.txt"
			} );
			tmp = $('#example tbody tr td')[0].innerHTML == "dateest_sZeroRecords";
		},
		function () { return tmp; }
	);
	
	oTest.fnTest(
		"sLoadingRecords and sZeroRecords both given",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"oLanguage": {
					"sZeroRecords": "dateest_sZeroRecords2",
					"sLoadingRecords": "dateest2"
				},
				"sAjaxSource": "../../../examples/ajax/sources/arrays.txt"
			} );
			tmp = $('#example tbody tr td')[0].innerHTML == "dateest2";
		},
		function () { return tmp; }
	);
	
	
	oTest.fnComplete();
} );