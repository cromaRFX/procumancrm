 {assign var=multi_lines value="^|^"|explode:{{sugarvar key='value' string=true}}}
{assign var=multi_lines_count value=0}

{foreach name=outer item=multi_line from=$multi_lines}
	{assign var=item value="^,^"|explode:$multi_line}
    <table width="100%" border="0" cellspacing="1" cellpadding="0" id="{$module}__table__{$multi_lines_count}" class="yui3-skin-sam edit view panelContainer" data-index_num="0">
  <tbody>
        <tr>
      <td valign="top" id="{$module}__line_item_index__{$multi_lines_count}_label" width="12.5%" scope="col"> Line No: </td>
      <td valign="top" width="37.5%"> {$item.0} </td>
      
      <td valign="top" id="{$module}__line_item_product_name__{$multi_lines_count}_label" width="12.5%" scope="col"> Product: </td>
       <td valign="top" width="37.5%"><a href="index.php?module=AOS_Products&action=DetailView&record={$item.8}">{$item.7}</a></td>
      
    </tr>
        <tr>
      <td valign="top" id="{$module}__line_item_qty__{$multi_lines_count}_label" width="12.5%" scope="col"> Quantity: </td>
      <td valign="top" width="37.5%"> {$item.2} </td>
      <td valign="top" id="{$module}__line_item_price__{$multi_lines_count}_label" width="12.5%" scope="col"> Price: </td>
      <td valign="top" width="37.5%"> {$item.3} </td>
    </tr>
        <tr>
      <td valign="top" id="{$module}__line_item_cost__{$multi_lines_count}_label" width="12.5%" scope="col"> Total Cost: </td>
      <td valign="top" width="37.5%"> {$item.4} </td>
      <td valign="top" id="{$module}__line_item_supplier_name__{$multi_lines_count}_label" width="12.5%" scope="col"> Supplier: </td>
      <td valign="top" width="37.5%"><a href="index.php?module=Accounts&action=DetailView&record={$item.6}">{$item.5}</a></td>
    </tr>
    <tr>
     <td valign="top" id="{$module}__line_item_newname__{$multi_lines_count}_label" width="12.5%" scope="col"> Product Name: </td>
      <td valign="top" width="37.5%"> {$item.10} </td>
      <td valign="top" id="{$module}__line_item_currency__{$multi_lines_count}_label" width="12.5%" scope="col"> Currency: </td>
      <td valign="top" width="37.5%"> {$item.9} </td>
    </tr>
	<tr>
     <td valign="top" id="{$module}__line_item_name__{$multi_lines_count}_label" width="12.5%" scope="col"> Product Description: </td>
      <td valign="top" width="87.5%" colspan="4"> {$item.1} </td>
    </tr>
      </tbody>
</table>
    <br />
{assign var=multi_lines_count value=$multi_lines_count+1}
{/foreach} 