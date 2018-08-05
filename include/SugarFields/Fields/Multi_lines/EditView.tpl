{assign var=multi_lines value="^|^"|explode:{{sugarvar key='value' string=true}}}
{assign var=multi_lines_count value=0}
{assign var=cur_count value=$multi_lines|@count } 
<script type="text/javascript" language="javascript">
	
	var cur_count = {$cur_count};
	var module    = '{$module}';
	var del_btn_src = '{sugar_getimagepath file="id-ff-remove-new.png"}';
	
	function {{sugarvar key='name'}}_sugarField()
	{ldelim}
		var {{sugarvar key='name'}} = '{{sugarvar key='name'}}';
		return {{sugarvar key='name'}};
	{rdelim}

	{literal}
	YAHOO.util.Event.onDOMReady(getDefaultCurrency);
	function getDefaultCurrency(){
		YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':getDefaultCurrencySuccess,'failure':null},'module=porq_Purchase_Request&action=getDefaultCurrency&sugar_body_only=true');
	}
	function getDefaultCurrencySuccess(data){
		defaultCurrency=data.responseText;
		if($("input[name=record]")[0].value=='')
			$('#porq_Purchase_Request__line_item_currency__0').val(defaultCurrency);
	}
	
	function addMultiLineRow()
	{
		//var table = document.getElementById(module+"multi_lines");
	  var $div  = jQuery('#'+module+'MultiLinesDiv');
	
	  var $table_template = jQuery('#'+module+'__table__0');
	  var $node       = $table_template.clone(true);
	  $node.find(':input').each(function (index, input) {
		$input  = $(input);
		$input.prop('id',   $input.prop('id').replace('__0', '__'+cur_count));
		$input.attr('index_num',   cur_count);
		if ($input.attr('type') == 'button') return;
		if ($input.is("[name]")) {
		  $input.prop('name', $input.prop('name').replace('[0]', '['+cur_count+']'));
		  if (
			$input.prop('type') != 'checkbox' 
			&& $input.prop('type') != 'radio' 
			&& ($input.prop('type') != 'hidden' && $input.val() != 0)
		  ) {
			$input.val('');
		}
		/* 
			if currency is empty set default 
		*/
		if( $input.prop('id').indexOf("__line_item_currency__") >= 0  && $input.val()=='' )
			$input.val(defaultCurrency);
		
		/*
			If quantity is null set 1
		*/
		if($input.prop('id').indexOf("__line_item_qty__") >= 0  ){
			$input.val('1');
		}
		if($input.attr("onchange"))
			$input.attr('onchange', $input.attr('onchange').replace(/__0/g, '__'+cur_count));
		} else {
		  $input.html('');
		}
	  });
	  $node.find('button[value="Select"]').each(function (index, button) {
		$button  = $(button);
		$button.attr('onclick', $button.attr('onclick').replace(/__0/g, '__'+cur_count));
	  });
	  $node.find('#'+module+'__line_item_index__'+cur_count).val($div.find('>table').length+1);
	  $node.attr('data-index_num', cur_count);
	  $node.prop('id', module+'__table__'+cur_count);
	  $node.find('tbody').append('<tr><td colspan="4">&nbsp;<img onclick="delMultiLineRow(this)" src="'+del_btn_src+'"></td></tr>');
	  $div.append($node).append('<br />');
	 
	  /*
		cost on price change from any where
	  */
		YAHOO.util.Event.addListener(module+'__line_item_price__'+cur_count, 'change', function(){
				var lineRow = this.id.split(module+'__line_item_price__');
				rowNum=lineRow['1'];
				var result =parseFloat($(this).val()).toFixed(2);
				if( !isNaN(parseFloat(result)) )
					$(this).val(parseFloat(result).toFixed(2));
				else
					$(this).val('0.00');
				var result2=parseFloat(this.value*$('#'+module+'__line_item_qty__'+rowNum).val() ).toFixed(2);
				if( !isNaN(parseFloat(result)) )
					$('#'+module+'__line_item_cost__'+rowNum).val(parseFloat(result2).toFixed(2));
				else
					$('#'+module+'__line_item_cost__'+rowNum).val('0.00');
				calculateRequestedTotal();
		});
		// on product change poulate currency
		YAHOO.util.Event.addListener(module+'__line_item_product_id__'+cur_count, 'change', function(){
			var lineRow = this.id.split(module+'__line_item_product_id__');
			rowNum=lineRow['1']; 
			getProductCurrency(this.value,rowNum);
		});
	  cur_count += 1;
	  /*
		Making fields 2decimal on new row add
	  */
	  making2decimalFields();
	}

	function delMultiLineRow(obj)
	{
	  var $table  = $(obj).closest('table');
	  $table.next('br').remove();
	  $table.remove();
	}
	$( document ).ready(function() {
		making2decimalFields();
		//cost on price change from any where
		var idc=module+'__line_item_price__';
		$('input[id^='+idc+']').each(function () {
			YAHOO.util.Event.addListener(this, 'change', function(){
				var result=parseFloat($(this).val()).toFixed(2);
				if( !isNaN(parseFloat(result)) )
					$(this).val(parseFloat(result).toFixed(2));
				else
					$(this).val('0.00');
				var lineRow = this.id.split(module+"__line_item_price__");
				rowNum=lineRow['1']; 
				var result2=parseFloat(this.value*$('#'+module+'__line_item_qty__'+rowNum).val() ).toFixed(2);
				if( !isNaN(parseFloat(result2)) )
					$('#'+module+'__line_item_cost__'+rowNum).val(parseFloat(result2).toFixed(2));
				else
					$('#'+module+'__line_item_cost__'+rowNum).val('0.00');
				calculateRequestedTotal();
			});
		});
		// on product change poulate currency
		var idc=module+'__line_item_product_id__';
		$('input[id^='+idc+']').each(function () {
			YAHOO.util.Event.addListener(this, 'change', function(){
				var lineRow = this.id.split(module+"__line_item_product_id__");
				rowNum=lineRow['1']; 
				getProductCurrency(this.value,rowNum);
			});
		});
	});
	/*
		making2decimalFields custom function
	*/
	function making2decimalFields(){
		var idc1=module+'__line_item_price__';	
		var idc2=module+'__line_item_cost__';	
		 $('input[id^='+idc1+']','input[id^='+idc2+']').each(function () {
			var result=parseFloat(this.value).toFixed(2);
			if( !isNaN(parseFloat(result)) )
				$(this).val(parseFloat(result).toFixed(2));
			else
				$(this).val('0.00');
			$(this).bind('blur', function () {
				var result2=parseFloat($(this).val()).toFixed(2);
				if( !isNaN(parseFloat(result2)) )
					$(this).val(parseFloat(result2).toFixed(2));
				else
					$(this).val('0.00');
			});
		});
		$('#total_cost').bind('blur', function () {
			var result=parseFloat(this.value).toFixed(2);
			if( !isNaN(parseFloat(result)) )
				$(this).val(parseFloat(result).toFixed(2));
			else
				$(this).val('0.00');
		});
	}
	/*
		calculateRequestedTotal custom function
	*/
	function calculateRequestedTotal(){
		var reqSum=0;
		var idc=module+'__line_item_cost__';		
		$('input[id^='+idc+']:visible').each(function () {
			if( !isNaN(parseFloat(this.value)) )
				reqSum=parseFloat(reqSum)+parseFloat(this.value);
			else
				reqSum='0.00';
		});
		// if any of line item currency is not default currency set trquested total sum to 0.00
		var idc2=module+'__line_item_currency__';	
		$('input[id^='+idc2+']:visible').each(function () {
			if(this.value!=defaultCurrency){
				reqSum='0.00';
			}
		});
		
		var result =parseFloat(reqSum).toFixed(2);
		if( !isNaN(parseFloat(result)) && $( "#total_cost" ).length ){
			$('#total_cost').val(parseFloat(result).toFixed(2));
		}		
			
		else{
			if( $( "#total_cost" ).length )
				$('#total_cost').val('0.00');
		}
	}
	/*
		getting currency label by currency id
	*/
	function getProductCurrency(proId,rowN){
		YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':getProductCurrencySuccess,'failure':null},'module=porq_Purchase_Request&action=getProductCurrency&ID='+proId+'&rowN='+rowN+'&sugar_body_only=true');
	}
	function getProductCurrencySuccess(data){
		var ddArray=jQuery.parseJSON(data.responseText);
		$('#'+module+'__line_item_currency__'+ddArray['0']['rowN']).val(ddArray['0']['currencyName']);
		
		// if any of line item currency is not default currency set trquested total sum to 0.00
		if(ddArray['0']['currencyName']!=defaultCurrency && $( "#total_cost" ).length){
			$('#total_cost').val('0.00');
		}	
		else if(ddArray['0']['currencyName']==defaultCurrency){
			calculateRequestedTotal();
		}
	}
{/literal}
</script>
<div id="{$module}MultiLinesDiv"> <span class="id-ff multiple ownline">
  <button value="Add" onclick="javascript:addMultiLineRow()" type="button" class="button"> <img src="{sugar_getimagepath file="id-ff-add-new.png"}" title="Add New Line"> </button>
  </span> 
 
 {foreach name=outer item=multi_line from=$multi_lines}
  {assign var=item value="^,^"|explode:$multi_line}
  
  <table width="100%" border="0" cellspacing="1" cellpadding="0" id="{$module}__table__{$multi_lines_count}" class="edit" data-index_num="0">
    <tbody>
      <tr>
        <td valign="top" id="{$module}__line_item_index__{$multi_lines_count}_label" width="12.5%" scope="col"> {$APP.LBL_MULTI_LINES_INDEX}: </td>
        <td valign="top" width="37.5%"><input type="text" name="{$module}__line_item_index[{$multi_lines_count}]" id="{$module}__line_item_index__{$multi_lines_count}" title="" tabindex="0" value="{if $item.0}{$item.0}{else}1{/if}" readonly="readonly" size="2" style="background-color:#eee" /></td>
        <td valign="top" id="{$module}__line_item_name__{$multi_lines_count}_label" width="12.5%" scope="col"> Catalog Item: </td>
          <td valign="top"><input type="text" name="{$module}__line_item_product_name[{$multi_lines_count}]" class="sqsEnabled yui-ac-input" tabindex="0" id="{$module}__line_item_product_name__{$multi_lines_count}" size="18" value="{$item.7}" title="" autocomplete="off" readonly="readonly" style="background-color:#eee" >
          <div id="EditView_{$module}__line_item_product_name__{$multi_lines_count}_results" class="yui-ac-container"></div>
          <input type="hidden" name="{$module}__line_item_product_id[{$multi_lines_count}]" id="{$module}__line_item_product_id__{$multi_lines_count}" value="{$item.8}">
          <span class="id-ff multiple">
          <button type="button" name="btn_{$module}__line_item_product_name__{$multi_lines_count}" id="btn_{$module}__line_item_product_name__{$multi_lines_count}" tabindex="0" title="Select Product" class="button firstChild" value="Select" onclick="open_popup(
&quot;AOS_Products&quot;, 
600, 
400, 
&quot;&quot;, 
true, 
true, 
{ldelim}&quot;call_back_function&quot;:&quot;set_return&quot;,
&quot;form_name&quot;:&quot;EditView&quot;,
&quot;field_to_name_array&quot;:{ldelim}&quot;id&quot;:&quot;{$module}__line_item_product_id__{$multi_lines_count}&quot;,
&quot;name&quot;:&quot;{$module}__line_item_product_name__{$multi_lines_count}&quot;,
&quot;accounts_aos_products_1accounts_ida&quot;:&quot;{$module}__line_item_supplier_id__{$multi_lines_count}&quot;,
&quot;accounts_aos_products_1_name&quot;:&quot;{$module}__line_item_supplier_name__{$multi_lines_count}&quot;,
&quot;price&quot;:&quot;{$module}__line_item_price__{$multi_lines_count}&quot;{rdelim}{rdelim}, 
&quot;single&quot;, 
true
);"><img src="themes/default/images/id-ff-select.png"></button>
          <button type="button" name="btn_clr_{$module}__line_item_product_name__{$multi_lines_count}" id="btn_clr_{$module}__line_item_product_name__{$multi_lines_count}" tabindex="0" title="Clear Product" class="button lastChild" onclick="SUGAR.clearRelateField(this.form, '{$module}__line_item_product_name__{$multi_lines_count}', '{$module}__line_item_product_id__{$multi_lines_count}');" value="Clear Product"><img src="themes/default/images/id-ff-clear.png"></button>
          </span> 
          <script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['EditView_{$module}__line_item_product_name__{$multi_lines_count}']) != 'undefined'",
		enableQS(false)
);
</script></td>
      </tr>
      <tr>
        <td valign="top" id="{$module}__line_item_qty__{$multi_lines_count}_label" scope="col"> {$APP.LBL_MULTI_LINES_QUANTITY}: </td>
        <td valign="top"><input type="text" name="{$module}__line_item_qty[{$multi_lines_count}]" id="{$module}__line_item_qty__{$multi_lines_count}" size="30" maxlength="255" value="{if !empty($item.2)}{$item.2}{else}1{/if}" title="" tabindex="0" onchange="$('#{$module}__line_item_cost__{$multi_lines_count}').val(parseFloat($('#{$module}__line_item_price__{$multi_lines_count}').val() * $('#{$module}__line_item_qty__{$multi_lines_count}').val()).toFixed(2));calculateRequestedTotal();"></td>
        <td valign="top" id="{$module}__line_item_price__{$multi_lines_count}_label" scope="col"> {$APP.LBL_MULTI_LINES_PRICE}: </td>
        <td valign="top"><input type="text" name="{$module}__line_item_price[{$multi_lines_count}]" id="{$module}__line_item_price__{$multi_lines_count}" size="30" maxlength="12" value="{$item.3}" title="" tabindex="0" onchange="$('#{$module}__line_item_cost__{$multi_lines_count}').val(parseFloat($('#{$module}__line_item_price__{$multi_lines_count}').val() * $('#{$module}__line_item_qty__{$multi_lines_count}').val()).toFixed(2));"></td>
      </tr>
      <tr>
        <td valign="top" id="{$module}__line_item_cost__{$multi_lines_count}_label" scope="col"> {$APP.LBL_MULTI_LINES_COST_SUM}: </td>
        <td valign="top"><input type="text" name="{$module}__line_item_cost[{$multi_lines_count}]" id="{$module}__line_item_cost__{$multi_lines_count}" size="30" maxlength="12" value="{$item.4}" title="" tabindex="0" onchange="calculateRequestedTotal();"></td>
        <td valign="top" id="{$module}__line_item_supplier_name__{$multi_lines_count}_label" scope="col"> {$APP.LBL_MULTI_LINES_SUPPLIER}: </td>
        <td valign="top"><input type="text" name="{$module}__line_item_supplier_name[{$multi_lines_count}]" class="sqsEnabled yui-ac-input" tabindex="0" id="{$module}__line_item_supplier_name__{$multi_lines_count}" size="18" value="{$item.5}" title="" autocomplete="off" readonly="readonly" style="background-color:#eee" >
          <div id="EditView_{$module}__line_item_supplier_name__{$multi_lines_count}_results" class="yui-ac-container"></div>
          <input type="hidden" name="{$module}__line_item_supplier_id[{$multi_lines_count}]" id="{$module}__line_item_supplier_id__{$multi_lines_count}" value="{$item.6}">
          <span class="id-ff multiple">
          <button type="button" name="btn_{$module}__line_item_supplier_name__{$multi_lines_count}" id="btn_{$module}__line_item_supplier_name__{$multi_lines_count}" tabindex="0" title="Select Account" class="button firstChild" value="Select" onclick="open_popup(
&quot;Accounts&quot;, 
600, 
400, 
&quot;&quot;, 
true, 
false, 
{ldelim}&quot;call_back_function&quot;:&quot;set_return&quot;,&quot;form_name&quot;:&quot;EditView&quot;,&quot;field_to_name_array&quot;:{ldelim}&quot;id&quot;:&quot;{$module}__line_item_supplier_id__{$multi_lines_count}&quot;,&quot;name&quot;:&quot;{$module}__line_item_supplier_name__{$multi_lines_count}&quot;{rdelim}{rdelim}, 
&quot;single&quot;, 
true
);"><img src="themes/default/images/id-ff-select.png"></button>
          <button type="button" name="btn_clr_{$module}__line_item_supplier_name__{$multi_lines_count}" id="btn_clr_{$module}__line_item_supplier_name__{$multi_lines_count}" tabindex="0" title="Clear Account" class="button lastChild" onclick="SUGAR.clearRelateField(this.form, '{$module}__line_item_supplier_name__{$multi_lines_count}', '{$module}__line_item_supplier_id__{$multi_lines_count}');" value="Clear Account"><img src="themes/default/images/id-ff-clear.png"></button>
          </span> 
          <script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['EditView_{$module}__line_item_supplier_name__{$multi_lines_count}']) != 'undefined'",
		enableQS
);
</script></td>
      </tr>
      <tr>
	  <td valign="top" id="{$module}__line_item_newname__{$multi_lines_count}_label" scope="col"> Product Name: </td>
         <td valign="top" width="37.5%"><input type="text" name="{$module}__line_item_newname[{$multi_lines_count}]" id="{$module}__line_item_newname__{$multi_lines_count}" size="30" maxlength="255" value="{$item.10}" title=""></td>
      
        <td valign="top" id="{$module}__line_item_currency__{$multi_lines_count}_label" scope="col"> Currency: </td>
         <td valign="top" width="37.5%"><input type="text" name="{$module}__line_item_currency[{$multi_lines_count}]" id="{$module}__line_item_currency__{$multi_lines_count}" size="30" maxlength="255" value="{$item.9}" title=""></td>	 
		 
      </tr>
	  <tr>
	    <td valign="top" id="{$module}__line_item_description__{$multi_lines_count}_label" scope="col"> Product Description: </td>
         <td valign="top" width="100%" colspan="4"><input type="text" name="{$module}__line_item_description[{$multi_lines_count}]" id="{$module}__line_item_description__{$multi_lines_count}" size="120" maxlength="255" value="{$item.1}" title=""></td>
	  </tr>
    {if $multi_lines_count neq 0}
    <tr>
      <td colspan="4">&nbsp;<img onclick="delMultiLineRow(this)" id="{$module}__removeButton__{$multi_lines_count}" class="id-ff-remove" name="{$module}__removeButton__{$multi_lines_count}" src="{sugar_getimagepath file="id-ff-remove-new.png"}"></td>
    </tr>
    {/if}
      </tbody>
    
  </table>
  {assign var=multi_lines_count value=$multi_lines_count+1}
  {/foreach} 
</div>
