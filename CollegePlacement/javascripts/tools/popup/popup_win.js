// JavaScript Document

var popup_defaults = {
				savedTarget:null,
				savedParent :null,
				orgCursor:null,
				dragOK:false,
				dragXoffset:0,
				dragYoffset:0
				};
				
				
function PopupWin() {
	this.create = function(containerObj, title, url, param_func, w, h, popup_ctype) {
		var winObj = getObj(containerObj);
		
		if (!winObj) {
			document.body.innerHTML += '<div id="' + containerObj + '" class="draggable"></div>';
			winObj = getObj(containerObj);		
		}
		
		winObj.style.width = w + 'px';
		winObj.style.height = h + 'px';
		
		var winObj_innerWidth = w - 10;
		/* 
		 * Minus 35 because, titlebar is 25px and the bottom margin of the titlebar is 5px and the 
		 * bottom margin of the body is also 5px
		 */
		var winObj_innerHeight = h - 35;
		
		var screenW = screen.width;
		
		var hw_sub = 0;
		if (window.innerHeight) {
			hw_sub = 4;
			toppos = window.pageYOffset;
		} else if (document.documentElement && document.documentElement.scrollTop) {
			
			toppos = document.documentElement.scrollTop;
		} else if (document.body) {
				
			  toppos = document.body.scrollTop;
		}
		
		if ( popup_ctype ) {
			url += '&content_type=popup';
		}
		
		//Getting other popup parameters using the given function name <param_func>
		if (param_func != '') {
			var other_param_str = 'if (typeof ' + param_func + ' == "function") var other_param = ' + param_func + '();';
			
			eval(other_param_str);
			
			url += other_param;
		}
		
		winObj.innerHTML = '<div class="drag_handle">'
							+ title
							+ '<div class="close_button" onclick="_AppPopupWindow._close(\''+containerObj+'\');" class="close_button" />&nbsp;</div>'
							+ '</div>'
							 
		winObj.innerHTML += '<div class="drag_body" style="width: ' + winObj_innerWidth + 'px; height: ' + winObj_innerHeight + 'px;">' 
						 + '<iframe src="'+ url +'" style="width: ' + (winObj_innerWidth - hw_sub) + 'px; height: ' + (winObj_innerHeight - hw_sub) + 'px;"></iframe>'
						 + '</div>';
		
		
		
		winObj.style.left = ((screenW/2) - (winObj.offsetWidth/2)) + 'px';
		winObj.style.top = (toppos + 40) + 'px';
		
		hideSelectBoxes();
		
		winObj.style.visibility = 'visible';
	};
	
	this._close = function(containerObj) {
		var winObj =getObj(containerObj);
		if (!winObj) return false;
			
		winObj.style.visibility='hidden';
		winObj.innerHTML = ''; 
		showSelectBoxes();
	}
}

function popupDragHandler(e) {
	var cursor_type = '-moz-grabbing';
	
	if (e == null) { 
		e = window.event; 
		cursor_type = 'move';
	} 
	
	var target = e.target != null ? e.target : e.srcElement;
	
	if (target.className == "drag_handle") {
		popup_defaults.orgCursor = target.style.cursor;
		target.style.cursor = cursor_type;
		popup_defaults.savedTarget = target;
		
		var parentBox = target.parentNode;
		
		parentBox.style.filter = 'alpha(opacity=50)';
		parentBox.style.opacity = '0.5';
		
		//hiding the iframe when dragging to avoid drag-stop problem when cursor reaches the iframe boundary
		for ( var x=0; x<parentBox.childNodes.length; x++ ) {
			if ( parentBox.childNodes[x].className == 'drag_body' ) {
				parentBox.childNodes[x].style.visibility = 'hidden';
			}
		}
		
		if (parentBox.className == "draggable") {
			popup_defaults.savedParent = parentBox;
			popup_defaults.dragOK = true;
			popup_defaults.dragXoffset = e.clientX - parseInt(parentBox.style.left);
			popup_defaults.dragYoffset = e.clientY - parseInt(parentBox.style.top);

			document.onmousemove = function(e) {
										if (e == null) { e = window.event } 
										if ((e.button <= 1) && popup_defaults.dragOK) {
											popup_defaults.savedParent.style.left = e.clientX - popup_defaults.dragXoffset + 'px';
											popup_defaults.savedParent.style.top = e.clientY - popup_defaults.dragYoffset + 'px';
											return false;
										}
									};
			document.onmouseup = function(e) {
									document.onmousemove = null;
									document.onmouseup = null;
									popup_defaults.savedTarget.style.cursor = popup_defaults.orgCursor; 	
									popup_defaults.dragOK = false;
									
									//showing the iframe
									for ( var x=0; x<parentBox.childNodes.length; x++ ) {
										if ( parentBox.childNodes[x].className == 'drag_body' ) {
											parentBox.childNodes[x].style.visibility = 'visible';
										}
									}
									
									//parentBox.style.filter = 'alpha(opacity=100)';
									
									//setting back shadow (only available in IE)
									parentBox.style.filter = 'progid:DXImageTransform.Microsoft.Shadow(color=#333333, Direction=135, Strength=3)';
									parentBox.style.opacity = '1';
								};
			
			return false;
		}
	}
}

function hideSelectBoxes() {
	var objs = document.getElementsByTagName('SELECT');
	for (var x=0; x<objs.length; x++) {
		
		if (objs[x].style.visibility != 'hidden') {
			objs[x].style.visibility = 'hidden';
		}
	}
}

function showSelectBoxes() {
	var objs = document.getElementsByTagName('SELECT');
	for (var x=0; x<objs.length; x++) {
		
		if (objs[x].style.visibility == 'hidden') {
			objs[x].style.visibility = 'visible';
		}
	}
}

function closePopup(id) {
	_AppPopupWindow._close(id);
}

var _AppPopupWindow = new PopupWin;

document.onmousedown = popupDragHandler;