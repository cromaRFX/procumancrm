
{if strlen($fields.number.value) <= 0}
{assign var="value" value=$fields.number.default_value }
{else}
{assign var="value" value=$fields.number.value }
{/if}  
<input type='text' name='{$fields.number.name}' 
id='{$fields.number.name}' size='30' maxlength='11' value='{$value}' title='' tabindex='1'    >