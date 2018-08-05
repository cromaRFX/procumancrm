$( document ).ready(function() {
	// making price,cost field to 2 decimal on load 
    making2decimalFields();
	
	$('button[value="Add"]').click(function() {
		//making price,cost field to 2 decimal on add button click 
		making2decimalFields(); 
		
		//Calculate Requested Total Cost on price,quantity,line item cost change.
		$('#porq_Purchase_Request__line_item_cost__'+cur_count).bind('change', function () {
			calculateRequestedTotal();
		});
		$('#porq_Purchase_Request__line_item_price__'+cur_count).bind('change', function () {
			setTimeout(function(){ calculateRequestedTotal(); }, 1000);
			// $('#porq_Purchase_Request__line_item_price__'+cur_count).setAttribute("onchange", "calculateRequestedTotal()");
			
		});
		$('#porq_Purchase_Request__line_item_qty__'+cur_count).bind('change', function () {
			setTimeout(function(){ calculateRequestedTotal(); }, 1000);
			// $('#porq_Purchase_Request__line_item_qty__'+cur_count).setAttribute("onchange", "calculateRequestedTotal()");
		});
	});
	
	//Calculate Requested Total Cost on price,quantity,line item cost change.
	$('input[id^="porq_Purchase_Request__line_item_cost__"]:visible').each(function () {
		$(this).bind('change', function () {
			calculateRequestedTotal();
		});
	});	
	$('input[id^="porq_Purchase_Request__line_item_price__"]:visible').each(function () {
		// $('#'+this.id).setAttribute("onchange", "calculateRequestedTotal()");
		$(this).bind('change', function () {
			setTimeout(function(){ calculateRequestedTotal(); }, 1000);
		});
	});	
	$('input[id^="porq_Purchase_Request__line_item_qty__"]:visible').each(function () {
		// $('#'+this.id).setAttribute("onchange", "calculateRequestedTotal()");
		$(this).bind('change', function () {
			setTimeout(function(){ calculateRequestedTotal(); }, 1000);
		});
	});
	setInterval(function(){ 
		$('input[id^="porq_Purchase_Request__line_item_price__"]:visible').each(function () {
			if(CountDecimalDigits(this.value)>3){
				$(this).val(Number($(this).val()).toFixed(2));
				$(this).bind('blur', function () {
					$(this).val(Number($(this).val()).toFixed(2));
				});
			}
		});	
	}, 500);
	
});
function CountDecimalDigits(number)
{
  var char_array = number.toString().split(""); // split every single char
  var not_decimal = char_array.lastIndexOf(".");
  return (not_decimal<0)?0:char_array.length - not_decimal;
}

function calculateRequestedTotal(){
	var reqSum=0;
	$('input[id^="porq_Purchase_Request__line_item_cost__"]:visible').each(function () {
		if(this.value){
			reqSum=Number(reqSum)+Number(this.value);
		}	
	});		
	$('#total_cost').val(reqSum.toFixed(2));
}
function making2decimalFields(){
	 $('input[id^="porq_Purchase_Request__line_item_price__"]:visible,input[id^="porq_Purchase_Request__line_item_cost__"]:visible').each(function () {	
		$(this).val(Number($(this).val()).toFixed(2));
		$(this).bind('blur', function () {
			$(this).val(Number($(this).val()).toFixed(2));
		});
	});
	
	$('#total_cost').bind('blur', function () {
		$(this).val(Number($(this).val()).toFixed(2));
	});
}