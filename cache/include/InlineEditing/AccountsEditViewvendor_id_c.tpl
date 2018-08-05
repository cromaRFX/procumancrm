
{if strlen($fields.vendor_id_c.value) <= 0}
{assign var="value" value=$fields.vendor_id_c.default_value }
{else}
{assign var="value" value=$fields.vendor_id_c.value }
{/if}  
<input type='text' name='{$fields.vendor_id_c.name}' 
    id='{$fields.vendor_id_c.name}' size='30' 
    maxlength='80' 
    value='{$value}' title=''  tabindex='1'      >