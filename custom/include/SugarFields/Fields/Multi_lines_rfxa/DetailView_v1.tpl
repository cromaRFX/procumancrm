{literal}
<script type="text/javascript" src="cache/include/javascript/sugar_grp_yui_widgets.js"></script>
{/literal}
 {assign var=multi_lines value="^|^"|explode:{{sugarvar key='value' string=true}}}
{assign var=multi_lines_count value=0}
{literal}
		<script>
		$( document ).ready(function() {
			YAHOO.util.Connect.asyncRequest('POST','index.php',{'success':getCurrenciesData,'failure':ajxFail},'module=rfxa_RFX_Answer&action=getCurrenciesData&sugar_body_only=true');
			
			/*
				converting unit keys to dropdown text
			*/
			var unitText = SUGAR.language.get('app_list_strings', 'unit_of_measure_list');
			$('input[id^="rfxa_RFX_Answer__line_item_unit_of_measure_id__"]').each(function () {
				var resultText=unitText[$(this).val()];
				var lineRow = this.id.split("rfxa_RFX_Answer__line_item_unit_of_measure_id__");
				rowNum=lineRow['1'];
				$('#rfxa_RFX_Answer__line_item_unit_of_measure__'+rowNum).text(resultText);
			});
		});
		function getCurrenciesData (data){
			var ddArray=jQuery.parseJSON(data.responseText);	
			var recordID=$("input[name=record]")[0].value;
			$('input[id^="rfxa_RFX_Answer__line_item_currency_id__"]').each(function () {
				var selectedVal=$(this).val();
				var resultText = searchText(selectedVal, ddArray);
				var lineRow = this.id.split("rfxa_RFX_Answer__line_item_currency_id__");
				rowNum=lineRow['1'];
				$('#rfxa_RFX_Answer__line_item_currency__'+rowNum).text(resultText);
			});
		}
		function ajxFail (){}
		function searchText(nameKey, myArray){
			for (var i=0; i < myArray.length; i++) {
				if ($.trim(myArray[i]['id']) == $.trim(nameKey)) {
					return myArray[i]['name'];
				}
			}
		}
		function copyToProducts(lineNo){
			$.ajax({
				url: 'TC/copyToProducts.php',
				type: "POST",
				data: { 
					codeC: $('#rfxa_RFX_Answer__line_item_code__'+lineNo).val(),
					brandC: $('#rfxa_RFX_Answer__line_item_brand__'+lineNo).val(),
					productNameC: $('#rfxa_RFX_Answer__line_item_product_name__'+lineNo).val(),
					descriptionC: $('#rfxa_RFX_Answer__line_item_description__'+lineNo).val(),
					unitC: $('#rfxa_RFX_Answer__line_item_unit_of_measure_id__'+lineNo).val(),
					priceC: $('#rfxa_RFX_Answer__line_item_price__'+lineNo).val(),
					qtyC: $('#rfxa_RFX_Answer__line_item_qty__'+lineNo).val(),
					costC: $('#rfxa_RFX_Answer__line_item_cost__'+lineNo).val(),
					currencyC: $('#rfxa_RFX_Answer__line_item_currency_id__'+lineNo).val(),
					minQtyC: $('#rfxa_RFX_Answer__line_item_min_order_qty__'+lineNo).val(),
					urlC: $('#rfxa_RFX_Answer__line_item_url__'+lineNo).val()
				},
				success:function(data){
					if(data){
						var objData = jQuery.parseJSON(data);
						if($.trim(objData['0'].status)==$.trim('success') &&  objData['0'].bean_id!=''){
							YAHOO.SUGAR.MessageBox.show({msg: "Product is copied successfully!", title: 'Success'} );
							window.location.href = objData['0'].site_url+"/?module=AOS_Products&return_module=AOS_Products&action=EditView&record="+objData['0'].bean_id;
						}
						else if ($.trim(objData['0'].status)==$.trim('failure') ){
							YAHOO.SUGAR.MessageBox.show({msg: "Error occured please try again!", title: 'Error'} );
						}
							
						else if($.trim(objData['0'].status)==$.trim('duplicate') ){
							YAHOO.SUGAR.MessageBox.show({msg: "Product with same information already exist!", title: 'Error'} );
						}
					}	
				},
				failure:function (){
					console.log('failure');
				}
			});	
		}
		</script>
	{/literal}
{foreach name=outer item=multi_line from=$multi_lines}
	{assign var=item value="^,^"|explode:$multi_line}
<table width="100%" border="0" cellspacing="1" cellpadding="0" id="{$module}__table__{$multi_lines_count}" class="yui3-skin-sam edit view panelContainer" data-index_num="0">
  <tbody>
    <tr>
		<td valign="top" > 
			<input title="Copy to Products" accesskey="i" class="button primary" onclick="copyToProducts({$multi_lines_count})" type="button" name="lineItem_{$multi_lines_count}" id="lineItem__{$multi_lines_count}" value="Copy to Products">
		</td>
    </tr>
    <tr>
      <td valign="top" id="{$module}__line_item_index__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_INDEX}: </td>
      <td valign="top" width="21.33%"> {$item.0} </td>
      
      <td valign="top" id="{$module}__line_item_code__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRODUCT_CODE}: </td>
      <td valign="top" width="21.33%">{$item.1}<input type="hidden" id="{$module}__line_item_code__{$multi_lines_count}" name="{$module}__line_item_code__{$multi_lines_count}" value="{$item.1}"></input> </td>
	  
      <td valign="top" id="{$module}__line_item_brand__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRODUCT_BRAND}: </td>
      <td valign="top" width="21.33%">{$item.2}<input type="hidden" id="{$module}__line_item_brand__{$multi_lines_count}" name="{$module}__line_item_brand__{$multi_lines_count}" value="{$item.2}"></input></td>
    </tr>
	
    <tr>
      <td valign="top" id="{$module}__line_item_product_name__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRODUCT_NAME}: </td>
      <td valign="top" width="21.33%"> {$item.3} <input type="hidden" id="{$module}__line_item_product_name__{$multi_lines_count}" name="{$module}__line_item_product_name__{$multi_lines_count}" value="{$item.3}"></input></td>
	  
      <td valign="top" id="{$module}__line_item_description__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_DESCRIPTION}: </td>
      <td valign="top" width="21.33%"> {$item.4} <input type="hidden" id="{$module}__line_item_description__{$multi_lines_count}" name="{$module}__line_item_description__{$multi_lines_count}" value="{$item.4}"></input></td>
	  
      <td valign="top" id="{$module}__line_item_unit_of_measure__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_UNIT_OF_MEASURE}: </td>
      <td valign="top" width="21.33%"><span id="{$module}__line_item_unit_of_measure__{$multi_lines_count}" name="{$module}__line_item_unit_of_measure__{$multi_lines_count}"></span><input type="hidden" id="{$module}__line_item_unit_of_measure_id__{$multi_lines_count}" name="{$module}__line_item_unit_of_measure_id__{$multi_lines_count}" value="{$item.5}"></input></td>
    </tr>
	
    <tr>
      <td valign="top" id="{$module}__line_item_price__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_PRICE}: </td>
      <td valign="top" width="21.33%"> {$item.6} <input type="hidden" id="{$module}__line_item_price__{$multi_lines_count}" name="{$module}__line_item_price__{$multi_lines_count}" value="{$item.6}"></input></td>
	  
      <td valign="top" id="{$module}__line_item_qty__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_QUANTITY}: </td>
      <td valign="top" width="21.33%"> {$item.7} <input type="hidden" id="{$module}__line_item_qty__{$multi_lines_count}" name="{$module}__line_item_qty__{$multi_lines_count}" value="{$item.7}"></input></td>
	  
      <td valign="top" id="{$module}__line_item_cost__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_TOTAL_COST}: </td>
      <td valign="top" width="21.33%"> {$item.8} <input type="hidden" id="{$module}__line_item_cost__{$multi_lines_count}" name="{$module}__line_item_cost__{$multi_lines_count}" value="{$item.7}"></input></td>
    </tr>
    <tr>
     <td valign="top" id="{$module}__line_item_currency__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_CURRENCY}:</td>
     <td valign="top" width="21.33%"> <span id="{$module}__line_item_currency__{$multi_lines_count}" name="{$module}__line_item_currency__{$multi_lines_count}"></span> <input type="hidden" id="{$module}__line_item_currency_id__{$multi_lines_count}" name="{$module}__line_item_currency_id__{$multi_lines_count}" value="{$item.9}"></td>
	 
     <td valign="top" id="{$module}__line_item_min_order_qty__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_MIN_ORDER_QTY}: </td>
     <td valign="top" width="21.33%"> {$item.10} <input type="hidden" id="{$module}__line_item_min_order_qty__{$multi_lines_count}" name="{$module}__line_item_min_order_qty__{$multi_lines_count}" value="{$item.10}"></input></td>
	 
     <td valign="top" id="{$module}__line_item_url__{$multi_lines_count}_label" width="12%" scope="col"> {$APP.LBL_MULTI_LINES_URL}: </td>
     <td valign="top" width="21.33%"> {$item.11} <input type="hidden" id="{$module}__line_item_url__{$multi_lines_count}" name="{$module}__line_item_url__{$multi_lines_count}" value="{$item.11}"></input></td>
    </tr>
    </tbody>
</table>
    <br />
{assign var=multi_lines_count value=$multi_lines_count+1}
{/foreach} 