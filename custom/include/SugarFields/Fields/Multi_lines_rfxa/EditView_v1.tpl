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
	function getOptionHTML(optionArray, selectedValue){
		var optionHTML = '';
		for(key in optionArray){
			if(key==selectedValue)
				optionHTML += '<option value="'+key+'" selected="selected">'+optionArray[key]+'</option>';
			else
				optionHTML += '<option value="'+key+'">'+optionArray[key]+'</option>';
		}
		return optionHTML;
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
	  $('select[id^="rfxa_RFX_Answer__line_item_unit_of_measure__"]').each(function () {
			var unitList = SUGAR.language.get('app_list_strings', 'unit_of_measure_list');
			var unitOptions = getOptionHTML(unitList, this.value); 
			$(this).html(unitOptions);
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
		YAHOO.util.Event.addListener('rfxa_RFX_Answer__line_item_price__'+cur_count, 'change', function(){
				var lineRow = this.id.split("rfxa_RFX_Answer__line_item_price__");
				rowNum=lineRow['1'];
				var result =parseFloat($(this).val()).toFixed(2);
				if( !isNaN(parseFloat(result)) )
					$(this).val(parseFloat(result).toFixed(2));
				else
					$(this).val('0.00');
				var result2=parseFloat(this.value*$('#rfxa_RFX_Answer__line_item_qty__'+rowNum).val() ).toFixed(2);
				if( !isNaN(parseFloat(result)) )
					$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val(parseFloat(result2).toFixed(2));
				else
					$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val('0.00');
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
	function makeCurrenciesDD(){
		var recordID = $("input[name=record]")[0].value;
		recordID= '';
		YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':getCurrenciesData,'failure':ajxFail},'module=rfxa_RFX_Answer&action=getCurrenciesData&recordID='+recordID+'&sugar_body_only=true');
	}
	function getCurrenciesData (data){
		var ddArray=jQuery.parseJSON(data.responseText);	
		var recordID=$("input[name=record]")[0].value;
		$('select[id^="rfxa_RFX_Answer__line_item_currency__"]').each(function () {
			var selectedVal=$(this).val();
			$(this).html('');
			for(i=0; i < ddArray.length; i++){
				$(this).append('<option value="'+ddArray[i]['id']+'">'+ddArray[i]['name']+'</option>');
			}
			if(selectedVal!=''){
				$('#'+this.id+' option[value=' + selectedVal +']').attr('selected','selected');
			}
		});
	}
	function ajxFail (){}
	$( document ).ready(function() {
		// making currency fields
		makeCurrenciesDD();

		making2decimalFields();
		//cost on price change from any where
		$('input[id^="rfxa_RFX_Answer__line_item_price__"]').each(function () {
			YAHOO.util.Event.addListener(this, 'change', function(){
				var result=parseFloat($(this).val()).toFixed(2);
				if( !isNaN(parseFloat(result)) )
					$(this).val(parseFloat(result).toFixed(2));
				else
					$(this).val('0.00');
				var lineRow = this.id.split("rfxa_RFX_Answer__line_item_price__");
				rowNum=lineRow['1']; 
				var result2=parseFloat(this.value*$('#rfxa_RFX_Answer__line_item_qty__'+rowNum).val() ).toFixed(2);
				if( !isNaN(parseFloat(result2)) )
					$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val(parseFloat(result2).toFixed(2));
				else
					$('#rfxa_RFX_Answer__line_item_cost__'+rowNum).val('0.00');
			});
		});
		$('select[id^="rfxa_RFX_Answer__line_item_unit_of_measure__"]').each(function () {
			var aaa=this.value;
			var unitList = SUGAR.language.get('app_list_strings','unit_of_measure_list');
			var unitOptions = getOptionHTML(unitList,this.value); 
			$(this).html(unitOptions);
		});
	});
	/*
		making2decimalFields custom function
	*/
	function making2decimalFields(){
		 $('input[id^="rfxa_RFX_Answer__line_item_price__"],input[id^="rfxa_RFX_Answer__line_item_cost__"]').each(function () {
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
	  <!-- Line:  -->
		<td valign="top" id="{$module}__line_item_index__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_INDEX}: </td>
        <td valign="top" width="21.33%"><input type="text" name="{$module}__line_item_index[{$multi_lines_count}]" id="{$module}__line_item_index__{$multi_lines_count}" title="" tabindex="0" value="{if $item.0}{$item.0}{else}1{/if}" readonly="readonly" size="2" style="background-color:#eee" /></td>
		<!-- Product Code:  -->
        <td valign="top" id="{$module}__line_item_code__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRODUCT_CODE}: </td>
        <td valign="top" width="21.33%"><input type="text" name="{$module}__line_item_code[{$multi_lines_count}]" id="{$module}__line_item_code__{$multi_lines_count}" size="30" maxlength="255" value="{$item.1}" title=""></td>
		 <!-- Product Brand:  -->
		<td valign="top" id="{$module}__line_item_brand__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRODUCT_BRAND}: </td>
        <td valign="top" width="21.33%"><input type="text" name="{$module}__line_item_brand[{$multi_lines_count}]" id="{$module}__line_item_brand__{$multi_lines_count}" size="30" maxlength="255" value="{$item.2}" title=""></td>
      </tr>
      <tr>
		<!-- Product Name:  -->
		 <td valign="top" id="{$module}__line_item_product_name__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRODUCT_NAME}: </td>
         <td valign="top" width="21.33%"><input type="text" name="{$module}__line_item_product_name[{$multi_lines_count}]" id="{$module}__line_item_product_name__{$multi_lines_count}" size="30" maxlength="255" value="{$item.3}" title=""></td>
		 
		<!--  Product Description: -->
		 <td valign="top" id="{$module}__line_item_description__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_DESCRIPTION}: </td>
         <td valign="top" width="21.33%"><input type="text" name="{$module}__line_item_description[{$multi_lines_count}]" id="{$module}__line_item_description__{$multi_lines_count}" size="30" maxlength="255" value="{$item.4}" title=""></td>
		 
		 <!--  Unit of measure: -->
		  <td valign="top" id="{$module}__line_item_unit_of_measure__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_UNIT_OF_MEASURE}: </td>
         <td valign="top" width="21.33%"><!-- <input type="text" name="{$module}__line_item_unit_of_measure[{$multi_lines_count}]" id="{$module}__line_item_unit_of_measure__{$multi_lines_count}" size="30" maxlength="255" value="{$item.5}" title=""> -->
		{if $item.5!=''}
			<select  name="{$module}__line_item_unit_of_measure[{$multi_lines_count}]" id="{$module}__line_item_unit_of_measure__{$multi_lines_count}" > <option value="{$item.5}" selected></option></select></td>
		{else}	
			<select  name="{$module}__line_item_unit_of_measure[{$multi_lines_count}]" id="{$module}__line_item_unit_of_measure__{$multi_lines_count}" > </select></td>	
		{/if}
      </tr>
	  
      <tr>
		<!--  Unit Price: -->
		<td valign="top" id="{$module}__line_item_price__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRICE}: </td>
        <td valign="top"><input type="text" name="{$module}__line_item_price[{$multi_lines_count}]" id="{$module}__line_item_price__{$multi_lines_count}" size="30" maxlength="12" value="{$item.6}" title="" tabindex="0" onchange="$('#{$module}__line_item_cost__{$multi_lines_count}').val(parseFloat($('#{$module}__line_item_price__{$multi_lines_count}').val() * $('#{$module}__line_item_qty__{$multi_lines_count}').val()).toFixed(2));"></td>
		
		<!-- Offered Quantity: -->
		<td valign="top" id="{$module}__line_item_qty__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_QUANTITY}: </td>
        <td valign="top"><input type="text" name="{$module}__line_item_qty[{$multi_lines_count}]" id="{$module}__line_item_qty__{$multi_lines_count}" size="30" maxlength="255" value="{if !empty($item.7)}{$item.7}{else}1{/if}" title="" tabindex="0" onchange="$('#{$module}__line_item_cost__{$multi_lines_count}').val(parseFloat($('#{$module}__line_item_price__{$multi_lines_count}').val() * $('#{$module}__line_item_qty__{$multi_lines_count}').val()).toFixed(2));"></td>
		
		<!-- Total Cost: -->
		<td valign="top" id="{$module}__line_item_cost__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_TOTAL_COST}: </td>
        <td valign="top"><input type="text" name="{$module}__line_item_cost[{$multi_lines_count}]" id="{$module}__line_item_cost__{$multi_lines_count}" size="30" maxlength="12" value="{$item.8}" title="" tabindex="0" ></td>
      </tr>
      <tr>
		<!-- Currency: -->
		<td valign="top" id="{$module}__line_item_currency__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_CURRENCY}: </td>
		<td valign="top" width="21.33%"><select  name="{$module}__line_item_currency[{$multi_lines_count}]" id="{$module}__line_item_currency__{$multi_lines_count}" > <option value="{$item.9}" selected></option></select></td>
		<!-- Min Order Qty: -->
		<td valign="top" id="{$module}__line_item_min_order_qty__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_MIN_ORDER_QTY}: </td>
		<td valign="top" width="21.33%"><input type="text" name="{$module}__line_item_min_order_qty[{$multi_lines_count}]" id="{$module}__line_item_min_order_qty__{$multi_lines_count}" size="30" maxlength="255" value="{$item.10}" title=""></td>
		<!-- Product URL: -->
		<td valign="top" id="{$module}__line_item_url__{$multi_lines_count}_label"  width="12%" scope="col"> {$APP.LBL_MULTI_LINES_URL}: </td>
		<td valign="top" width="21.33%"><input type="text" name="{$module}__line_item_url[{$multi_lines_count}]" id="{$module}__line_item_url__{$multi_lines_count}" size="30" maxlength="255" value="{$item.11}" title=""></td>
      </tr>
    {if $multi_lines_count neq 0}
    <tr>
      <td colspan="5">&nbsp;<img onclick="delMultiLineRow(this)" id="{$module}__removeButton__{$multi_lines_count}" class="id-ff-remove" name="{$module}__removeButton__{$multi_lines_count}" src="{sugar_getimagepath file="id-ff-remove-new.png"}"></td>
    </tr>
    {/if}
      </tbody>
    
  </table>
  {assign var=multi_lines_count value=$multi_lines_count+1}
  {/foreach} 
</div>
