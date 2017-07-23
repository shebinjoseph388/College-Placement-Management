function submitForm(taskname) {
	var form = document.theForm;
	
	if (trim(taskname) == '') {
		alert('No task to execute!');
		return
	}
	
	switch(taskname) {
		case 'copy':
		case 'edit':
		case 'delete':
		case 'view':
			if (!countCheckedItems()) {
				alert( _app_js_messages[1] );
				return;
			}

			if (taskname == 'delete') {
				var ans = confirm( _app_js_messages[2] );
				if (!ans) return;
			}
		break;
	}

	if (typeof _app_onsubmit == "function" && taskname != 'cancel') {	
		var result = _app_onsubmit();
		if(!result) return;
	}

	form.task.value = taskname;
	form.submit();
	return true;
}

function checkItem() {
	var form = document.theForm;
	var checkboxes = document.getElementsByName("cid[]");
	
	if (checkboxes.length) {
		/*Checking if there are items checked, then update checkAll checkbox*/
		var stillChecked = true;
		for (var x=0; x<checkboxes.length; x++) {
			if (checkboxes[x].checked == false) {
				stillChecked = false;
				break;
			}
		}
		form.checkAll.checked = stillChecked;

	} else {
		form.checkAll.checked = checkboxes.checked;
	}
}

function checkAllItems(obj) {
	var form = document.theForm;
	
	var chkbx = document.getElementsByName("cid[]");
	
	if (chkbx.length == 0) return;
	
	if (chkbx.length) {
		for (var x=0; x<chkbx.length; x++) {
			chkbx[x].checked = obj.checked;
		}
	} else {
		chkbx.checked = obj.checked;
	}
}

function countCheckedItems() {
	var form = document.theForm;
	var chkbx = document.getElementsByName("cid[]");
	var checkCount = 0;
	
	if (chkbx.length) {
		for (var x=0; x<chkbx.length; x++) {
			if (chkbx[x].checked) {
				checkCount ++;
			}
		}
	}

	return checkCount;
}

function getObj(id){
	if (document.all)
		return document.all[id];
	return document.getElementById (id);
}

function trim(inputString) {

   if (typeof inputString != "string") { return inputString; }
   var retValue = inputString;
   var ch = retValue.substring(0, 1);
   while (ch == " ") { 
   	  /* Check for spaces at the beginning of the string*/
	  retValue = retValue.substring(1, retValue.length);
	  ch = retValue.substring(0, 1);
   }
   ch = retValue.substring(retValue.length-1, retValue.length);
   while (ch == " ") { 
   	  /* Check for spaces at the end of the string*/
	  retValue = retValue.substring(0, retValue.length-1);
	  ch = retValue.substring(retValue.length-1, retValue.length);
   }
   while (retValue.indexOf("  ") != -1) { 
   	  /* Note that there are two spaces in the string - look for multiple spaces within the string*/
	  retValue = retValue.substring(0, retValue.indexOf("  ")) + retValue.substring(retValue.indexOf("  ")+1, retValue.length);
   }
   return retValue;
} 

/*
 *	criteria: Function that checks if input field is empty and throw message if empty
 *	Author:	     Alrex Consus
 */
function isEmpty(obj,msg) {
	if (trim(obj.value) == '') {
		if (msg) {
			alert(msg);
			obj.focus();
		}
		return true;
	}
	return false;
}

/*
 *	criteria: Function that checks if inputted email is valid
 */
function isValidEmail(obj,msg) {
	var email = obj.value;
	var regEx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var isValid = regEx.test(email);
	if (!isValid) {
		alert(msg);
		obj.focus();
		obj.select();
		return false;
	}

	return true;
}