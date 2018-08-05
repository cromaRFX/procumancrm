
{if strlen($fields.request_id_c.value) <= 0}
{assign var="value" value=$fields.request_id_c.default_value }
{else}
{assign var="value" value=$fields.request_id_c.value }
{/if}  
<input type='text' name='{$fields.request_id_c.name}' 
    id='{$fields.request_id_c.name}' size='30' 
    maxlength='80' 
    value='{$value}' title=''  tabindex='1'      >