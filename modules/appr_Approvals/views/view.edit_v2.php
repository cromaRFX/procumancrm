<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class appr_ApprovalsViewEdit extends ViewEdit
{
 	public function __construct()
 	{
		parent::ViewEdit();
 		$this->useForSubpanel = true;
 		$this->useModuleQuickCreateTemplate = true;
	}
	
	public function display()
 	{
		global $current_user;
		
		$this->ev->process();
		
		if ( isset($_REQUEST['parent_id']) && $_REQUEST['parent_id'] != '' 
		  && isset($_REQUEST['parent_type']) &&  $_REQUEST['parent_type'] == 'porq_Purchase_Request')
			{
				global $current_user;
				
				$this->ev->fieldDefs['assigned_user_name']['value'] = $current_user->reports_to_name;
            	$this->ev->fieldDefs['assigned_user_id']['value'] 	= $current_user->reports_to_id;
				
				$purchaseRequest = new porq_Purchase_Request();
				$purchaseRequest->retrieve($_REQUEST['parent_id']);
				//Approved Cost
				$this->ev->fieldDefs['approved_amount']['value']	= $purchaseRequest->total_cost;
				//User Limit 
				$_REQUEST['user_limit'] = $current_user->approval_limit_c;
				$this->ev->fieldDefs['user_limit']['value']	= $_REQUEST['user_limit'];
        }
		
		/*if($this->ev->isDuplicate) {
		 foreach($this->ev->fieldDefs as $name=>$defs) {
			 if(!empty($defs['auto_increment'])) {
				$this->ev->fieldDefs[$name]['value'] = '';
			 }
		   }
		}*/
		
        //$this->ev->defs['templateMeta']['form']['buttons'] 	= array('SUBPANELSAVE', 'SUBPANELCANCEL');
		
		echo $this->ev->display($this->showTitle);

	
	// This is javascript code that I save in a variable:
		$js = <<<EOT
<script type="text/javascript" language="JavaScript">
function customJavascriptValidation(view){
		
		console.log(" Custom Validation " );
		$('#approved_amount').next().remove();
		
		var is_valid = true;
		// Do custom validation
		var status 			= $('input[name=approval_status]:checked').val() 
		var approval_amount = parseFloat($('#approved_amount').val().replace(',',''));
		var user_limit 		= parseFloat($('#user_limit').val().replace(',',''));
		
		console.log("approval_amount :"+approval_amount+" user_limit :"+user_limit );	
		console.log("status :"+status);
		
		if($('input[name=approval_status]:checked').length <= 0)
		{
		 alert("Please select approval status");
		 is_valid = false;
		}
		else if(approval_amount == '' ){
			$('#approved_amount').effect("highlight", {color: 'red'}, 3000);
			$('#approved_amount').after('<div class="required validation-message">Enter amount.</div>');
			is_valid = false;
		}
		else if( (approval_amount != '' ) && ( user_limit == '' ) ) {
			$('#approved_amount').effect("highlight", {color: 'red'}, 3000);
			$('#approved_amount').after('<div class="required validation-message">User Amount limit not set.</div>');
			is_valid = false;
		}
		else if(  (approval_amount != '') && (user_limit != '') ) {

			if( (approval_amount > user_limit) && (status ==1) ) 
			{
				$('#approved_amount').effect("highlight", {color: 'red'}, 3000);
				$('#approved_amount').after('<div class="required validation-message">Amount greater than user limit</div>');
				is_valid = false;
				console.log("User Approval more than Limit");
			}
		}
		  
		  if(is_valid)
		  {//If our validation is done, continue with default validation
			console.log("Is Valid Check Form Reutrn ");
			return check_form('form_SubpanelQuickCreate_appr_Approvals'); // This will call the default function that sugar use
		  }
		  else 
		 	return is_valid;
	}
</script>
EOT;

// now I output the javascript
        echo $js;

	
	}
	
}

