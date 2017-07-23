// DATA_TEMPLATE: dom_data
oTest.fnStart( "aoColumns.sClass" );

$(document).ready( function () {
	/* Check the default */
	var oTable = $('#example').dataTable();
	var oSettings = oTable.fnSettings();
	
	oTest.fnTest( 
		"By default the test class hasn't been applied to the column (sanity!)",
		null,
		function () { return $('#example tbody tr:eq(0) td:eq(2)').hasClass('datetest') == false; }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - first row",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"aoColumns": [
					null,
					null,
					{ "sClass": 'datetest' },
					null,
					null
				]
			} );
		},
		function () { return $('#example tbody tr:eq(1) td:eq(2)').hasClass('datetest'); }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - third row",
		null,
		function () { return $('#example tbody tr:eq(3) td:eq(2)').hasClass('datetest'); }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - last row",
		null,
		function () { return $('#example tbody tr:eq(9) td:eq(2)').hasClass('datetest'); }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - has not applied to other columns - 1st",
		null,
		function () { return $('#example tbody tr:eq(3) td:eq(0)').hasClass('datetest') == false; }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - has not applied to other columns - 5th",
		null,
		function () { return $('#example tbody tr:eq(3) td:eq(4)').hasClass('datetest') == false; }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - seventh row - second page",
		function () { $('#example_next').click(); },
		function () { return $('#example tbody tr:eq(6) td:eq(2)').hasClass('datetest'); }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - has not applied to header",
		null,
		function () { return $('#example thead tr:eq(3) th:eq(4)').hasClass('datetest') == false; }
	);
	
	oTest.fnTest( 
		"Add a class to a single column - has not applied to footer",
		null,
		function () { return $('#example thead tr:eq(3) th:eq(4)').hasClass('datetest') == false; }
	);
	
	
	oTest.fnTest( 
		"Class defined for multiple columns - first row",
		function () {
			oSession.fnRestore();
			$('#example').dataTable( {
				"aoColumns": [
					{ "sClass": 'datetest2' },
					null,
					null,
					{ "sClass": 'datetest1' },
					null
				]
			} );
		},
		function () {
			var bReturn = 
				$('#example tbody tr:eq(3) td:eq(0)').hasClass('datetest2') &&
				$('#example tbody tr:eq(8) td:eq(3)').hasClass('datetest1');
			return bReturn;
		}
	);
	
	oTest.fnTest( 
		"Class defined for multiple columns - has not applied to other columns - 5th 1",
		null,
		function () { return $('#example tbody tr:eq(0) td:eq(4)').hasClass('datetest1') == false; }
	);
	
	oTest.fnTest( 
		"Class defined for multiple columns - has not applied to other columns - 5th 2",
		null,
		function () { return $('#example tbody tr:eq(6) td:eq(4)').hasClass('datetest2') == false; }
	);
	
	
	oTest.fnComplete();
} );