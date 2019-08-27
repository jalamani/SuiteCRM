
{if strlen($fields.ethnicity_c.value) <= 0}
{assign var="value" value=$fields.ethnicity_c.default_value }
{else}
{assign var="value" value=$fields.ethnicity_c.value }
{/if} 
<span class="sugar_field" id="{$fields.ethnicity_c.name}">{$fields.ethnicity_c.value}</span>
