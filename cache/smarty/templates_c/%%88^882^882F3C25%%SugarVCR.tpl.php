<?php /* Smarty version 2.6.31, created on 2018-08-05 17:13:44
         compiled from themes/SuiteP/include/EditView/SugarVCR.tpl */ ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td nowrap class="paginationWrapper">
            <script>
                SUGAR.saveAndContinue = function (elem)
                    {
                        elem.form.action.value='Save';
                        if(check_form('EditView'))
                        {
                            sendAndRedirect('EditView', '<?php echo $this->_tpl_vars['app_strings']['LBL_SAVING']; ?>
 <?php echo $this->_tpl_vars['module']; ?>
...', '<?php echo $this->_tpl_vars['list_link']; ?>
');
                        }
                    }
            </script>
            <?php if (empty ( $this->_tpl_vars['list_link'] )): ?>
                                <?php echo '
                    <script>
                        $(document).ready(function () {
                          $(\'#save_and_continue\').remove();
                        })
                    </script>
                '; ?>

            <?php endif; ?>
            <span class="pagination">
                <?php if (! empty ( $this->_tpl_vars['previous_link'] )): ?>
                <button type="button" class="button btn-pagination" title="<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_PREVIOUS']; ?>
" onClick="document.location.href='<?php echo $this->_tpl_vars['previous_link']; ?>
';">
                                        <span class="suitepicon suitepicon-action-left"> </span><span class="pagination-label"><?php echo $this->_tpl_vars['app_strings']['LNK_LIST_PREVIOUS']; ?>
</span>
                </button>
                <?php else: ?>
                <button type="button" class="button btn-pagination" title="<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_PREVIOUS']; ?>
" disabled='true'>
                                        <span class="suitepicon suitepicon-action-left"> </span><span class="pagination-label"><?php echo $this->_tpl_vars['app_strings']['LNK_LIST_PREVIOUS']; ?>
</span>
                </button>
                <?php endif; ?>
                &nbsp;&nbsp;
                <span class="pagination-range-label">(<?php echo $this->_tpl_vars['offset']; ?>
<?php if (! empty ( $this->_tpl_vars['total'] )): ?> <?php echo $this->_tpl_vars['app_strings']['LBL_LIST_OF']; ?>
 <?php echo $this->_tpl_vars['total']; ?>
<?php echo $this->_tpl_vars['plus']; ?>
<?php endif; ?>)</span>
                &nbsp;&nbsp;
                <?php if (! empty ( $this->_tpl_vars['next_link'] )): ?>
                <button type="button" class="button btn-pagination" title="<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_NEXT']; ?>
" onClick="document.location.href='<?php echo $this->_tpl_vars['next_link']; ?>
';">
                                        <span class="pagination-label"><?php echo $this->_tpl_vars['app_strings']['LNK_LIST_NEXT']; ?>
</span><span class="suitepicon suitepicon-action-right"> </span>
                </button>
                <?php else: ?>
                <button type="button" class="button btn-pagination" title="<?php echo $this->_tpl_vars['app_strings']['LNK_LIST_NEXT']; ?>
" disabled="true">
                                        <span class="pagination-label"><?php echo $this->_tpl_vars['app_strings']['LNK_LIST_NEXT']; ?>
</span><span class="suitepicon suitepicon-action-right"> </span>
                </button>
                <?php endif; ?>
            </span>
            &nbsp;&nbsp;
        </td>
    </tr>
</table>