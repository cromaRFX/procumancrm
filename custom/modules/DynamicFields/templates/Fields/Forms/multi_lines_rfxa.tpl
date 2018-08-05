
{include file="modules/DynamicFields/templates/Fields/Forms/coreTop.tpl"}

<tr >
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_REQUIRED_OPTION"}:</td>
    <td>
        <input type="checkbox" name="required" value="0" disabled/>
    </td>
</tr>

<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_DEFAULT_VALUE"}:</td><td>
	    {sugar_translate module="DynamicFields" label="MULTILINESRFXA_IS_BY_DEFAULT"}
	</td>
</tr>

{if !$hideReportable}
<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_REPORTABLE"}:</td>
    <td>
    	{sugar_translate module="DynamicFields" label="MULTILINESRFXA_IS_NOT_REPORTABLE"}
    	<input type="hidden" name="reportable" value="0">
    </td>
</tr>
{/if}

<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_AUDIT"}:</td>
    <td>
        <input type="checkbox" name="audited" value="1" {if !empty($vardef.audited) }CHECKED{/if} {if $hideLevel > 5}disabled{/if}/>{if $hideLevel > 5}<input type="hidden" name="audited" value="{$vardef.audited}">{/if}
    </td>
</tr>

<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_IMPORTABLE"}:</td>
    <td>
       {sugar_translate module="DynamicFields" label="MULTILINESRFXA_IS_NOT_IMPORTABLE"}
    </td>
</tr>

<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_DUPLICATE_MERGE"}:</td>
    <td>
        {sugar_translate module="DynamicFields" label="MULTILINESRFXA_IS_NOT_MERGEABLE"}
    </td>
</tr>
</table>