
{if strlen($fields.quantity.value) <= 0}
{assign var="value" value=$fields.quantity.default_value }
{else}
{assign var="value" value=$fields.quantity.value }
{/if}  
<input type='text' name='{$fields.quantity.name}'
id='{$fields.quantity.name}'
size='30'
maxlength='8'value='{sugar_number_format var=$value  }'
title=''
tabindex='1'
 
>