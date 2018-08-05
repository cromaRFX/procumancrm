<?php /* Smarty version 2.6.31, created on 2018-08-05 17:13:44
         compiled from themes/SuiteP/include/EditView/tab_panel_content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'themes/SuiteP/include/EditView/tab_panel_content.tpl', 5, false),array('function', 'sugar_field', 'themes/SuiteP/include/EditView/tab_panel_content.tpl', 101, false),array('function', 'sugar_evalcolumn', 'themes/SuiteP/include/EditView/tab_panel_content.tpl', 106, false),)), $this); ?>
    <!-- tab_panel_content.tpl -->
    <div class="row edit-view-row">
        <?php $_from = $this->_tpl_vars['panel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
            {*row*}
            <?php echo smarty_function_counter(array('name' => 'columnCount','start' => 0,'print' => false,'assign' => 'columnCount'), $this);?>

            <?php $_from = $this->_tpl_vars['rowData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['colData']):
        $this->_foreach['colIteration']['iteration']++;
?>
                {*column*}
                {*<!-- COLUMN -->*}
                <?php if ($this->_foreach['colIteration']['total'] > 1 && $this->_tpl_vars['colData']['colspan'] != 3): ?>
                    <div class="col-xs-12 col-sm-6 edit-view-row-item">
                <?php else: ?>
                    <div class="col-xs-12 col-sm-12 edit-view-row-item">
                <?php endif; ?>

                <?php echo smarty_function_counter(array('name' => 'fieldCount','start' => 0,'print' => false,'assign' => 'fieldCount'), $this);?>

                <?php echo smarty_function_counter(array('name' => 'addressCount','start' => 0,'print' => false,'assign' => 'addressCount'), $this);?>

                <?php $_from = $this->_tpl_vars['colData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fieldIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fieldIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['subField']):
        $this->_foreach['fieldIteration']['iteration']++;
?>

                    <?php if (! ( ! isset ( $this->_tpl_vars['subField']['name'] ) || ! $this->_tpl_vars['subField']['name'] )): ?>
                        {*<!-- [hide!!] -->*}

                    <?php if ($this->_tpl_vars['fieldCount'] < $this->_foreach['colIteration']['total'] && $this->_tpl_vars['addressCount'] < 1 && ! empty ( $this->_tpl_vars['colData']['field']['name'] ) && empty ( $this->_tpl_vars['colData']['field']['hideIf'] )): ?>
                        <?php if (! empty ( $this->_tpl_vars['colData']['field']['hideLabel'] ) && $this->_tpl_vars['colData']['field']['hideLabel'] == true): ?>
                        {*hide label*}
                        <?php else: ?>

                        {*<!-- LABEL -->*}
                        <?php if ($this->_foreach['colIteration']['total'] > 1 && $this->_tpl_vars['colData']['colspan'] != 3): ?>
                            <div class="col-xs-12 col-sm-4 label" data-label="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
">
                        <?php else: ?>
                             <div class="col-xs-12 col-sm-2 label" data-label="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
">
                        <?php endif; ?>

                                {*label*}
                                {minify}
                                <?php if (isset ( $this->_tpl_vars['colData']['field']['customLabel'] )): ?>
                                <label for="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
"><?php echo $this->_tpl_vars['colData']['field']['customLabel']; ?>
</label>
                                <?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>
                                    {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
                                    {$label|strip_semicolon}:
                                <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
                                    {capture name="label" assign="label"}{sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}{/capture}
                                    {$label|strip_semicolon}:
                                <?php else: ?>
                                    &nbsp;
                                <?php endif; ?>
                                {* Show the required symbol if field is required, but override not set.  Or show if override is set *}
                                <?php if (( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['required'] && ( ! isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) || $this->_tpl_vars['colData']['field']['displayParams']['required'] ) ) || ( isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) && $this->_tpl_vars['colData']['field']['displayParams']['required'] )): ?>
                                    <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
                                <?php endif; ?>
                                <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] ) || isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] ) && isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
                                    <?php if (isset ( $this->_tpl_vars['colData']['field']['popupHelp'] )): ?>
                                        <?php ob_start(); ?>
                                            {sugar_translate label="{$colData.field.popupHelp}" module='<?php echo $this->_tpl_vars['module']; ?>
'}
                                        <?php $this->_smarty_vars['capture']['popupText'] = ob_get_contents();  $this->assign('popupText', ob_get_contents());ob_end_clean(); ?>
                                    <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp'] )): ?>
                                        {capture name="popupText" assign="popupText"}
                                            {sugar_translate label="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['popupHelp']; ?>
" module='<?php echo $this->_tpl_vars['module']; ?>
'}
                                        {/capture}
                                    <?php endif; ?>
                                    {sugar_help text=$popupText WIDTH=-1}
                                <?php endif; ?>
                                {/minify}
                            </div>
                        <?php endif; ?>

                        {*<!-- VALUE -->*}
                        <?php if (! empty ( $this->_tpl_vars['colData']['field']['hideLabel'] ) && $this->_tpl_vars['colData']['field']['hideLabel'] == true && $this->_tpl_vars['colData']['colspan'] != 3): ?>
                            <?php $this->assign('fieldClasses', "col-xs-12 col-sm-12"); ?>
                        <?php else: ?>
                            <?php $this->assign('fieldClasses', "col-xs-12 col-sm-8"); ?>
                        <?php endif; ?>

                        <div class="<?php echo $this->_tpl_vars['fieldClasses']; ?>
 edit-view-field <?php if ($this->_tpl_vars['inline_edit'] && ! empty ( $this->_tpl_vars['colData']['field']['name'] ) && ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] == 1 || ! isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] ) )): ?>inlineEdit<?php endif; ?>" type="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type']; ?>
" field="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
" <?php if ($this->_tpl_vars['colData']['colspan']): ?>colspan='<?php echo $this->_tpl_vars['colData']['colspan']; ?>
'<?php endif; ?> <?php if (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] ) && $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['type'] == 'phone'): ?>class="phone"<?php endif; ?>>
                            <?php if (! empty ( $this->_tpl_vars['def']['templateMeta']['labelsOnTop'] )): ?>
                                <?php if (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>
                                    <?php if (! empty ( $this->_tpl_vars['colData']['field']['label'] )): ?>
                                        <label for="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
">{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
                                    <?php endif; ?>
                                <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
                                    <label for="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['name']; ?>
">{sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}:</label>
                                <?php endif; ?>

                                {* Show the required symbol if field is required, but override not set.  Or show if override is set *}
                                <?php if (( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['required'] && ( ! isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) || $this->_tpl_vars['colData']['field']['displayParams']['required'] ) ) || ( isset ( $this->_tpl_vars['colData']['field']['displayParams']['required'] ) && $this->_tpl_vars['colData']['field']['displayParams']['required'] )): ?>
                                    <span class="required" title="<?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_TITLE']; ?>
"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
                                <?php endif; ?>

                                <?php if (! isset ( $this->_tpl_vars['colData']['field']['label'] ) || ! empty ( $this->_tpl_vars['colData']['field']['label'] )): ?>
                                    <br>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php echo $this->_tpl_vars['colData']['field']['prefix']; ?>


                            <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] && ! empty ( $this->_tpl_vars['colData']['field']['fields'] )): ?>
                                <?php $_from = $this->_tpl_vars['colData']['field']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subField']):
?>
                                    <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['subField']['name']]): ?>
                                        {counter name="panelFieldCount" print=false}
                                        <?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','accesskey' => $this->_tpl_vars['ACCKEY'],'tabindex' => $this->_tpl_vars['subfields']['tabindex'],'vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['subField']['name']],'displayType' => 'EditView','displayParams' => $this->_tpl_vars['subField']['displayParams'],'formName' => $this->_tpl_vars['form_name'],'module' => $this->_tpl_vars['module']), $this);?>
&nbsp;
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            <?php elseif (! empty ( $this->_tpl_vars['colData']['field']['customCode'] ) && empty ( $this->_tpl_vars['colData']['field']['customCodeRenderField'] )): ?>
                                {counter name="panelFieldCount"  print=false}
                                <?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field']['customCode'],'colData' => $this->_tpl_vars['colData'],'accesskey' => $this->_tpl_vars['ACCKEY'],'tabindex' => $this->_tpl_vars['colData']['field']['tabindex']), $this);?>

                            <?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]): ?>
                                {counter name="panelFieldCount" print=false}
                                <?php echo $this->_tpl_vars['colData']['displayParams']; ?>

                                <?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','accesskey' => $this->_tpl_vars['ACCKEY'],'tabindex' => $this->_tpl_vars['colData']['field']['tabindex'],'vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']],'displayType' => 'EditView','displayParams' => $this->_tpl_vars['colData']['field']['displayParams'],'typeOverride' => $this->_tpl_vars['colData']['field']['type'],'formName' => $this->_tpl_vars['form_name'],'module' => $this->_tpl_vars['module']), $this);?>

                            <?php endif; ?>

                            <?php if (! empty ( $this->_tpl_vars['colData']['field']['customCode'] ) && ! empty ( $this->_tpl_vars['colData']['field']['customCodeRenderField'] )): ?>
                                {counter name="panelFieldCount"}
                                <?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field']['customCode'],'colData' => $this->_tpl_vars['colData'],'tabindex' => $this->_tpl_vars['colData']['field']['tabindex']), $this);?>

                            <?php endif; ?>
                            </div>
                    <?php else: ?>

                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['inline_edit'] && ! empty ( $this->_tpl_vars['colData']['field']['name'] ) && ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] == 1 || ! isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['inline_edit'] ) )): ?><div class="inlineEditIcon col-xs-1">
                        {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
                        </div>
                    <?php endif; ?>

                    {*Field Exceptions*}
                    <?php if (! empty ( $this->_tpl_vars['colData']['field']['type'] )): ?>
                        <?php if ($this->_tpl_vars['colData']['field']['type'] == 'address'): ?>
                             <?php echo smarty_function_counter(array('name' => 'addressCount','print' => false), $this);?>

                        <?php endif; ?>
                    <?php endif; ?>

                        <!-- [/hide] -->
                    <?php endif; ?>

                    <?php echo smarty_function_counter(array('name' => 'fieldCount','print' => false), $this);?>

                <?php endforeach; endif; unset($_from); ?>
                </div>
                <?php if ($this->_tpl_vars['col']%2 == 1): ?>
                <div class="clear"></div>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <?php if ($this->_tpl_vars['columnCount'] == 0): ?>
            <div class="clear"></div>
            <?php endif; ?>
            <?php echo smarty_function_counter(array('name' => 'columnCount','print' => false), $this);?>

        <?php endforeach; endif; unset($_from); ?>
    </div>