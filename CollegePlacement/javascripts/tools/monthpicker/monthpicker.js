/**
* YkMonthPicker [Month Picker Class]
* - criteria: A picker popup that only displays month and year.
* 				 Similar behavior with common datapickers.
* 				 Class designed for PHP Flex tool Frontend.
* - Author: Alrex Consus
* - Version: 1.0
*/

var YkMonthPicker = {
	"picker_cont_id" : "yk_monthpicker_container",
	"picker_cont_classname" : "monthpicker",
	"picker_year_cont" : "yk_monthpicker_year",
	"picker_cont_counter" : 0,
	"attach_doc_onclick" : false,
	"active_picker_id" : '',
	
	"_setup" : function( details ) {
		/*{
				"button" : "button object ID",
				"format" : "date format { [Y-m] [Y/m] [m/Y] [m-Y] }",
				"target" : "target object ID"
			}*/
		var but_obj = this._getObj( details.button );
		
		details.cont_id = this._createContainerID();
		details.year_cont_id = this.picker_year_cont + '_' + this.picker_cont_counter;
		
		this._attachEventListener( 
			but_obj, 
			'click', 
			function() {
				var DPicker = YkMonthPicker;
				var button_obj = but_obj;
				var container_id = details.cont_id;
				var year_cont_id = details.year_cont_id;
				
				var target_obj = DPicker._getObj( details.target );
				var def_value = DPicker._parseTargetValue( target_obj.value, details.format );
				
				var month_list = [
					{ "display" : "JAN", "value" : "01" },
					{ "display" : "FEB", "value" : "02" },
					{ "display" : "MAR", "value" : "03" },
					{ "display" : "APR", "value" : "04" },
					{ "display" : "MAY", "value" : "05" },
					{ "display" : "JUN", "value" : "06" },
					{ "display" : "JUL", "value" : "07" },
					{ "display" : "AUG", "value" : "08" },
					{ "display" : "SEP", "value" : "09" },
					{ "display" : "OCT", "value" : "10" },
					{ "display" : "NOV", "value" : "11" },
					{ "display" : "DEC", "value" : "12" }
				];
				
				
				var container_obj = DPicker._getObj( container_id );
				
				if ( !container_obj ) {
					DPicker._createContainer( container_id );
					
					container_obj = DPicker._getObj( container_id );
					
					var obj_pos = DPicker._getObjPos( button_obj );
					
					var top = obj_pos.y + button_obj.offsetHeight + 'px';
					var left = obj_pos.x + 'px';
					
					container_obj.style.top = top;
					container_obj.style.left = left;
				}
				
				var str = '<div class="mpicker_inner"><table class="mpicker_table">' 
				+ '<tr>'
				+ '<td colspan="3">'
				
				+ '<table class="mpicker_year"><tr>'
				+ '<td><a href="javascript: void(0);" class="mpicker_arrow" onclick="YkMonthPicker._moveYear( \'' + year_cont_id + '\', \'b\' );">&lsaquo;</a></td>'
				+ '<td align="center"><span id="' + year_cont_id  + '">' + def_value.year +  '</span></td>'
				+ '<td align="right"><a href="javascript: void(0);" class="mpicker_arrow" onclick="YkMonthPicker._moveYear( \'' + year_cont_id + '\', \'f\' );">&rsaquo;</a></td>'
				+ '</tr></table>'
				
				+ '</td>'
				+ '</tr>';
				var row_counter;
				var mselected_class_suf;
				
				row_counter = 1;
				for( var x=0; x<month_list.length; x++ ) {
					if ( row_counter == 1 ) {
						str += '<tr>';
					}
					//alert( eval( month_list[x].value ) + ' - ' + eval( def_value.month ) );
					mselected_class_suf = ( eval( month_list[x].value ) == eval( def_value.month ) )? '_selected' : '';
					str += '<td><a href="javascript: void(0);" class="mpicker_month' + mselected_class_suf  + '" onclick="YkMonthPicker._returnMonth( \'' + month_list[x].value  + '\', \'' + year_cont_id + '\', \'' + details.format + '\', \'' + details.target + '\', \'' + container_id + '\' );">' + month_list[x].display  + '</a></td>';
						
					if ( row_counter == 3 ) {
						str += '</tr>';
						row_counter = 1;
						
						continue;
					}
					
					row_counter++;
				}
				
				str += '</table></div>';
				
				container_obj.innerHTML = str;
				
				container_obj.style.display = 'inline'
				
				
				DPicker.active_picker_id = container_id;
			}, 
			false 
		);
		
		if ( !this.attach_doc_onclick ) {
			this._attachDocumentOnClickEvent();
			this.attach_doc_onclick = true;
		}
		
	}, 
	
	"_getObjPos" : function( obj ) {
		var left = 0; 
		var top  = 0; 
		
		while( obj.offsetParent ) { 
			left += obj.offsetLeft; 
			top  += obj.offsetTop; 
			obj   = obj.offsetParent; 
		} 
			
		left += obj.offsetLeft; 
		top  += obj.offsetTop; 
		
		//alert("x: "+left+", y: "+top);
		return { "x":left, "y":top }; 
	},
	
	"_parseTargetValue" : function( value, format ) {
		var re1 = /\d\d\d\d[\/-]\d\d/;
		var re2 = /\d\d[\/-]\d\d\d\d/;
		
		if ( !re1.test( this._trimString( value ) ) && !re2.test( this._trimString( value ) ) ) {
			value = '';
		}
		
		if ( this._trimString( value ) == '' ) {
			var d = new Date();
			return { "month" : d.getMonth() + 1, "year" : d.getFullYear() };
		}
		
		switch( format ) {
			case '%Y/%m':
				ym = value.split( "/" );
				return { "month" : ym[1], "year" : ym[0] };
			break;
			
			case '%m/%Y':
				ym = value.split( "/" );
				return { "month" : ym[0], "year" : ym[1] };
			break;
			
			case '%m-%Y':
				ym = value.split( "-" );
				return { "month" : ym[0], "year" : ym[1] };
			break;
			
			default: //%Y-%m
				ym = value.split( "-" );
				return { "month" : ym[1], "year" : ym[0] };
			break;
		}
	},
	
	"_createContainerID" : function() {
		this.picker_cont_counter++;
		
		return this.picker_cont_id + '_' + this.picker_cont_counter;
	},
	
	"_createContainer" : function( id ) {
		var obj = document.createElement( 'DIV' );
		
		obj.id = id;
		obj.className = this.picker_cont_classname;
		
		document.body.appendChild( obj );
	},
	
	"_attachDocumentOnClickEvent" : function() {
		this._attachEventListener( 
			document, 
			'click', 
			function( e ) {
				var target = e.target != null ? e.target : e.srcElement;
				var DPicker = YkMonthPicker;
				var _classname = '';
				
				var p = target;
				
				while( p ) {
					if ( p.className == DPicker.picker_cont_classname ) {
						_classname = p.className;
						break;
					}
					
					p = p.parentNode;
				}
				
				DPicker._hideAllPickers( _classname );
			},
			false
		);
	},
	
	"_hideAllPickers" : function( target ) {
		var id;
		var obj;
		
		for( var x=1; x<=this.picker_cont_counter; x++ ) {
			id = this.picker_cont_id + '_' + x;
			
			obj = this._getObj( id );
			
			if ( obj ) {
				if ( this.active_picker_id != '' ) {
					if ( id != this.active_picker_id ) {
						obj.style.display = 'none';
					}
				} else {
					if ( target != this.picker_cont_classname ) {
						obj.style.display = 'none';
					}
				}
			}
		}
		
		this.active_picker_id = '';
	},
	
	"_moveYear" : function( year_cont, dir ) {
		var year_cont = this._getObj( year_cont );
		var year = parseInt( year_cont.innerHTML );
		
		if ( dir == 'f' ) { //f - forward
			year_cont.innerHTML = year + 1;
		} else { //b - backward
			year_cont.innerHTML = year - 1;
		}
	},
	
	"_returnMonth" : function( month, year_cont, format, target, container ) {
		var year = this._getObj( year_cont ).innerHTML;
		var target_obj = this._getObj( target );
		var value;
		
		switch( format ) {
			case '%Y/%m':
				value = year + '/' + month;
			break;
			
			case '%m/%Y':
				value = month + '/' + year;
			break;
			
			case '%m-%Y':
				value = month + '-' + year;
			break;
			
			default: //%Y-%m
				value = year + '-' + month;
			break;
		}
		
		target_obj.value = value;
		
		this._getObj( container ).style.display = 'none';
	},
	
	"_getObj" : function( id ) {
		if ( typeof getObj == 'function' ) {
			return getObj( id );
		} else {
			if ( document.all ) {
				return document.all[id];
			}
			
			return document.getElementById( id );
		}
	},
	
	"_trimString" : function( inputString ) {
		
		if ( typeof trim == 'function' ) {
			return trim( inputString );
		}

		if ( typeof inputString != "string" ) { return inputString; }
		
		var retValue = inputString;
		var ch = retValue.substring(0, 1);
		while( ch == " " ) { 
			/* Check for spaces at the beginning of the string*/
			retValue = retValue.substring(1, retValue.length);
			ch = retValue.substring(0, 1);
		}
		
		ch = retValue.substring(retValue.length-1, retValue.length);
		
		while( ch == " " ) { 
			/* Check for spaces at the end of the string*/
			retValue = retValue.substring(0, retValue.length-1);
			ch = retValue.substring(retValue.length-1, retValue.length);
		}
		
		while (retValue.indexOf("  ") != -1) { 
		
			/* Note that there are two spaces in the string - look for multiple spaces within the string*/
			retValue = retValue.substring(0, retValue.indexOf("  ")) + retValue.substring(retValue.indexOf("  ")+1, retValue.length);
		}
		
		return retValue;
	},
	
	"_attachEventListener" : function( obj, _event, handler, _capture ) {
		if ( typeof attachEventListener == 'function' ) {
			attachEventListener( obj, _event, handler, _capture );
			return;
		}
		
		if ( window.addEventListener ) { //Netscape 6+ and Mozilla
			obj.addEventListener( _event, handler, _capture );
		} else if ( obj.attachEvent ) { //IE and Netscape 4.x
			obj.attachEvent( 'on' + _event, handler );
		}
	},
	
	"_detachEventListener" : function( obj, _event, handler, _capture ) {
		if ( typeof detachEventListener == 'function' ) {
			detachEventListener( obj, _event, handler, _capture );
			return;
		}
		
		if ( window.removeEventListener ) { //Netscape 6+ and Mozilla
			obj.removeEventListener( _event, handler, _capture );
		} else if ( obj.detachEvent ) { // and for IE and Opera 4.x
			obj.detachEvent( 'on' +_event, handler );
		}
	}
};