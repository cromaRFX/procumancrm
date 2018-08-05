function checkStatus(){
	if($('#status').val()!=2){
		YAHOO.SUGAR.MessageBox.show({msg: 'Purchase Requisition must be approved first !', title: 'Error'} );
		return false;
	}
	else{
		var _form = document.getElementById('formDetailView');_form.action.value='createPO';_form.submit();
		return true;
	}
}

function createRFXRequest(){
	if($('#status').val()!=2){
		YAHOO.SUGAR.MessageBox.show({msg: 'Purchase Requisition must be approved first !', title: 'Error'} );
		return false;
	}
	else{
		var ID = document.getElementsByName('record')[0].value;
		YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':successRfxCreate,'failure':null},'module=porq_Purchase_Request&action=createRFXRequest&ID='+ID+'&sugar_body_only=true');
	}
}
function successRfxCreate(data){
	if(data.responseText)
		window.open(data.responseText,'_self');
	else
		YAHOO.SUGAR.MessageBox.show({msg: 'Server error!', title: 'Error'} );
}