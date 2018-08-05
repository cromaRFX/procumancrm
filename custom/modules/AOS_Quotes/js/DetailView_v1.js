/*  Receive Goods Function
	
*/

var module = 'gdrcp_Goods_Receipt';

function receiveGoods(PO_id){
	if(confirm("Are you sure you want to receive all line items ?"))
	{
		$.ajax({
				url: 'index.php?module='+module+'&action=receiveGoods',
				type: 'POST',
				contentType: 'application/x-www-form-urlencoded',
				dataType: 'json',
				data: 'sugar_body_only=1'+
					'&record='+PO_id, // ID of Purchase Order (AOS_Quotes) Record 		
				success: function(result)
				{	
					console.log("PO Number: "+result.purchase_order_number);
					
					if(result.good_received)
					{	
						// Redirect to Good Reveived Module with PO Number filter
						//window.location.href ="index.php?module=gdrcp_Goods_Receipt&action=index";
						console.log(result);
						
						var url = 'index.php?module=gdrcp_Goods_Receipt&action=index';
						var form = $('<form action="' + url + '" method="post" name="search_form" id="search_form">' +
							'<input type="text" name="po_number_c_basic" id="po_number_c_basic" value="'+result.purchase_order_number+'" />' +
							  '<input type="text" name="po_number_c" id="po_number_c" value="'+result.purchase_order_number+'" /> '+
							  '<input type="hidden" name="module" value="gdrcp_Goods_Receipt"> '+
							  '<input type="hidden" name="action" value="index"> '+
							  '<input type="hidden" name="query" value="true">'+
							'</form>');
									  
						$('body').append(form);
						form.submit();
						
					}
					else{
						console.log("An error occured while performing Receive Goods Action.");
					}
				}
			});
	}
	
}