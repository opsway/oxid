<?php /* Smarty version 2.6.28, created on 2017-02-07 20:24:33
         compiled from /var/www/application/views/flow/tpl/email/html/order_owner.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 35, false),array('modifier', 'cat', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 35, false),array('modifier', 'oxmultilangsal', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 61, false),array('modifier', 'strip_tags', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 132, false),array('modifier', 'replace', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 276, false),array('modifier', 'oxescape', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 460, false),array('function', 'oxcontent', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 40, false),array('function', 'oxmultilang', '/var/www/application/views/flow/tpl/email/html/order_owner.tpl', 58, false),)), $this); ?>
<?php $this->assign('shop', $this->_tpl_vars['oEmailView']->getShop()); ?>
<?php $this->assign('oViewConf', $this->_tpl_vars['oEmailView']->getViewConfig()); ?>
<?php $this->assign('oConf', $this->_tpl_vars['oViewConf']->getConfig()); ?>
<?php $this->assign('currency', $this->_tpl_vars['oEmailView']->getCurrency()); ?>
<?php $this->assign('user', $this->_tpl_vars['oEmailView']->getUser()); ?>
<?php $this->assign('basket', $this->_tpl_vars['order']->getBasket()); ?>
<?php $this->assign('oDelSet', $this->_tpl_vars['order']->getDelSet()); ?>
<?php $this->assign('payment', $this->_tpl_vars['order']->getPayment()); ?>

<?php ob_start(); ?>
    table.orderarticles th {
        white-space: nowrap;
    }

    table.orderarticles th, table.orderarticles td {
        border: 1px solid #d4d4d4;
        font-size: 13px;
        padding:5px;
    }

    table.orderarticles {
        border-collapse: collapse;
    }

    table.orderarticles thead th {
        background-color: #ebebeb;
    }

    table.orderarticles .odd {
        background-color: #ebebeb;
        white-space: nowrap;
    }
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('style', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/header.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='DD_ORDER_CUST_HEADING')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))) ? $this->_run_mod_handler('cat', true, $_tmp, " #") : smarty_modifier_cat($_tmp, " #")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['order']->oxorder__oxordernr->value) : smarty_modifier_cat($_tmp, $this->_tpl_vars['order']->oxorder__oxordernr->value)),'style' => $this->_tpl_vars['style'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


    <p>
        <?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value == 'oxempty'): ?>
            <?php echo smarty_function_oxcontent(array('ident' => 'oxadminordernpemail'), $this);?>

        <?php else: ?>
            <?php echo smarty_function_oxcontent(array('ident' => 'oxadminorderemail'), $this);?>

        <?php endif; ?>
    </p>




    <!-- Address info -->
    <table class="row footer">
        <tbody>
        <tr>
            <td class="wrapper">
                <table class="six columns">
                    <tbody>
                        <tr bgcolor="#ebebeb">
                            <td class="left-text-pad">
                                <h3 style="margin: 0; padding: 0 0 5px; line-height: 20px; text-transform: uppercase;"><?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS'), $this);?>
</h3>
                                <p>
                                    <?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->value; ?>
<br>
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>
<br>
                                    <?php if ($this->_tpl_vars['order']->oxorder__oxbilladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxbilladdinfo->value; ?>
<br><?php endif; ?>
                                    <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>
<br>
                                    <?php echo $this->_tpl_vars['order']->oxorder__oxbillstateid->value; ?>

                                    <?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->value; ?>
<br>
                                    <?php echo $this->_tpl_vars['order']->oxorder__oxbillcountry->value; ?>
<br>
                                    <?php if ($this->_tpl_vars['order']->oxorder__oxbillustid->value): ?><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_ID_NUMBER'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillustid->value; ?>
<br><?php endif; ?>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'PHONE'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfon->value; ?>
<br><br>
                                </p>
                            </td>
                            <td class="expander"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="wrapper last">
                <table class="six columns">
                    <tbody>
                        <tr bgcolor="#ebebeb">
                            <td class="last right-text-pad">
                                <h3 style="margin: 0; padding: 0 0 5px; line-height: 20px; text-transform: uppercase;"><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESS'), $this);?>
</h3>
                                <p>
                                    <?php if ($this->_tpl_vars['order']->oxorder__oxdellname->value): ?>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxdelcompany->value; ?>
<br>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxdelsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdellname->value; ?>
<br>
                                        <?php if ($this->_tpl_vars['order']->oxorder__oxdeladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdeladdinfo->value; ?>
<br><?php endif; ?>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreet->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreetnr->value; ?>
<br>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxdelstateid->value; ?>

                                        <?php echo $this->_tpl_vars['order']->oxorder__oxdelzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelcity->value; ?>
<br>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxdelcountry->value; ?>

                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->value; ?>
<br>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>
<br>
                                        <?php if ($this->_tpl_vars['order']->oxorder__oxbilladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxbilladdinfo->value; ?>
<br><?php endif; ?>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>
<br>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillstateid->value; ?>

                                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->value; ?>
<br>
                                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillcountry->value; ?>
<br>
                                    <?php endif; ?>
                                </p>
                            </td>
                            <td class="expander"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <br/>


<table class="orderarticles" border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
        <tr bgcolor="#ebebeb">
            <th<?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blEmailsShowProductPictures')): ?> colspan="2"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT'), $this);?>
</th>
            <th><?php echo smarty_function_oxmultilang(array('ident' => 'UNIT_PRICE'), $this);?>
</th>
            <th><?php echo smarty_function_oxmultilang(array('ident' => 'QUANTITY'), $this);?>
</th>
            <th><?php echo smarty_function_oxmultilang(array('ident' => 'VAT'), $this);?>
</th>
            <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</th>
        </tr>
    </thead>
    <tbody>

        <?php $this->assign('basketitemlist', $this->_tpl_vars['basket']->getBasketArticles()); ?>
        <?php $_from = $this->_tpl_vars['basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['basketindex'] => $this->_tpl_vars['basketitem']):
?>
            
                <?php $this->assign('basketproduct', $this->_tpl_vars['basketitemlist'][$this->_tpl_vars['basketindex']]); ?>
                <tr valign="top">
                    <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blEmailsShowProductPictures')): ?>
                        <td>
                            <img src="<?php echo $this->_tpl_vars['basketproduct']->getIconUrl(false); ?>
" border="0" hspace="0" vspace="0" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['basketitem']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" align="texttop" style="max-width:80px;">
                        </td>
                    <?php endif; ?>
                    <td>
                        <p>
                            <b><?php echo $this->_tpl_vars['basketitem']->getTitle(); ?>
</b>
                            <?php if ($this->_tpl_vars['basketitem']->getChosenSelList()): ?>,
                                <?php $_from = $this->_tpl_vars['basketitem']->getChosenSelList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oList']):
?>
                                    <?php echo $this->_tpl_vars['oList']->name; ?>
 <?php echo $this->_tpl_vars['oList']->value; ?>
&nbsp;
                                <?php endforeach; endif; unset($_from); ?>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['basketitem']->getPersParams()): ?>
                                <?php $_from = $this->_tpl_vars['basketitem']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
?>
                                    ,&nbsp;<em><?php echo $this->_tpl_vars['sVar']; ?>
 : <?php echo $this->_tpl_vars['aParam']; ?>
</em>
                                <?php endforeach; endif; unset($_from); ?>
                            <?php endif; ?>
                            <br><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT_NO','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basketproduct']->oxarticles__oxartnum->value; ?>


                            <?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
                                <?php $this->assign('oWrapping', $this->_tpl_vars['basketitem']->getWrapping()); ?>
                                <br><b><?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_WRAPPING'), $this);?>
</b>:&nbsp;<?php if (! $this->_tpl_vars['basketitem']->getWrappingId()): ?><?php echo smarty_function_oxmultilang(array('ident' => 'NONE'), $this);?>
<?php else: ?><?php echo $this->_tpl_vars['oWrapping']->oxwrapping__oxname->value; ?>
<?php endif; ?>
                            <?php endif; ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <b style="white-space:nowrap;"><?php if ($this->_tpl_vars['basketitem']->getFUnitPrice()): ?><?php echo $this->_tpl_vars['basketitem']->getFUnitPrice(); ?>
&nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>
<?php endif; ?></b>
                            <?php if (! $this->_tpl_vars['basketitem']->isBundle()): ?>
                                <?php $this->assign('dRegUnitPrice', $this->_tpl_vars['basketitem']->getRegularUnitPrice()); ?>
                                <?php $this->assign('dUnitPrice', $this->_tpl_vars['basketitem']->getUnitPrice()); ?>
                                <?php if ($this->_tpl_vars['dRegUnitPrice']->getPrice() > $this->_tpl_vars['dUnitPrice']->getPrice()): ?>
                                    <br><s><?php echo $this->_tpl_vars['basketitem']->getFRegularUnitPrice(); ?>
&nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>
</s>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['basketitem']->aDiscounts): ?><br><br>
                                <em style="font-size: 7pt;font-weight: normal;"><?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT'), $this);?>

                                    <?php $_from = $this->_tpl_vars['basketitem']->aDiscounts; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oDiscount']):
?>
                                        <br><?php echo $this->_tpl_vars['oDiscount']->sDiscount; ?>

                                    <?php endforeach; endif; unset($_from); ?>
                                </em>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['basketproduct']->oxarticles__oxorderinfo->value): ?>
                                <?php echo $this->_tpl_vars['basketproduct']->oxarticles__oxorderinfo->value; ?>

                            <?php endif; ?>
                        </p>
                    </td>
                    <td><?php echo $this->_tpl_vars['basketitem']->getAmount(); ?>
</td>
                    <td><?php echo $this->_tpl_vars['basketitem']->getVatPercent(); ?>
%</td>
                    <td>
                        <b><?php echo $this->_tpl_vars['basketitem']->getFTotalPrice(); ?>
&nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>
</b>
                    </td>
                </tr>
            
        <?php endforeach; endif; unset($_from); ?>
        
            <?php if ($this->_tpl_vars['basket']->oCard): ?>
                <tr valign="top">
                    <td>
                        <img src="<?php echo $this->_tpl_vars['basket']->oCard->getPictureUrl(); ?>
" alt="<?php echo $this->_tpl_vars['basket']->oCard->oxwrapping__oxname->value; ?>
" hspace="0" vspace="0" border="0" align="top">
                    </td>
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
">
                        <b><?php echo smarty_function_oxmultilang(array('ident' => 'ATENTION_GREETING_CARD'), $this);?>
</b><br>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'WHAT_I_WANTED_TO_SAY'), $this);?>

                        <br><br>
                        <?php echo $this->_tpl_vars['basket']->getCardMessage(); ?>

                    </td>
                </tr>
            <?php endif; ?>
        
    </tbody>
    <tfoot>
        <?php $this->assign('iFooterColspan', 4); ?>
        <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blEmailsShowProductPictures')): ?>
            <?php $this->assign('iFooterColspan', 5); ?>
        <?php endif; ?>
        
            <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers()): ?>
                <?php if ($this->_tpl_vars['basket']->getVoucherDiscValue()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'USED_COUPONS'), $this);?>
</td>
                        <td align="right" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'REBATE'), $this);?>
</td>
                    </tr>
                <?php endif; ?>
                <?php $_from = $this->_tpl_vars['order']->getVoucherList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['voucher']):
?>
                    <?php $this->assign('voucherseries', $this->_tpl_vars['voucher']->getSerie()); ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo $this->_tpl_vars['voucher']->oxvouchers__oxvouchernr->value; ?>
</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['voucherseries']->oxvoucherseries__oxdiscount->value; ?>
 <?php if ($this->_tpl_vars['voucherseries']->oxvoucherseries__oxdiscounttype->value == 'absolute'): ?><?php echo $this->_tpl_vars['currency']->sign; ?>
<?php else: ?>%<?php endif; ?></td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
        
        <?php if (! $this->_tpl_vars['basket']->getDiscounts()): ?>
            
                <!-- netto price -->
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET'), $this);?>
</td>
                    <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getProductsNetPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
            
            
                <!-- VATs -->
                <?php $_from = $this->_tpl_vars['basket']->getProductVats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ORDER_CUST_HTML_PLUSTAX1'), $this);?>
 <?php echo $this->_tpl_vars['key']; ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_VAT2'), $this);?>
</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['VATitem']; ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            

            
                <!-- brutto price -->
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS'), $this);?>
</td>
                    <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getFProductsPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
            
        <?php endif; ?>

        <!-- applied discounts -->
        <?php if ($this->_tpl_vars['basket']->getDiscounts()): ?>
            <?php if ($this->_tpl_vars['order']->isNettoMode()): ?>
                
                <!-- netto price -->
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET'), $this);?>
</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getProductsNetPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>0
                    </tr>
                
            <?php else: ?>
                
                    <!-- brutto price -->
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS'), $this);?>
</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getFProductsPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                
            <?php endif; ?>

            
                <!-- discounts -->
                <?php $_from = $this->_tpl_vars['basket']->getDiscounts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oDiscount']):
?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php if ($this->_tpl_vars['oDiscount']->dDiscount < 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT'), $this);?>
<?php endif; ?> <em><?php echo $this->_tpl_vars['oDiscount']->sDiscount; ?>
</em>:</td>
                        <td align="right" class="odd text-right"><?php if ($this->_tpl_vars['oDiscount']->dDiscount < 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['oDiscount']->fDiscount)) ? $this->_run_mod_handler('replace', true, $_tmp, "-", "") : smarty_modifier_replace($_tmp, "-", "")); ?>
<?php else: ?>-<?php echo $this->_tpl_vars['oDiscount']->fDiscount; ?>
<?php endif; ?> <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            

            <?php if (! $this->_tpl_vars['order']->isNettoMode()): ?>
                
                    <!-- netto price -->
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET'), $this);?>
</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getProductsNetPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                
            <?php endif; ?>

            
                <!-- VATs -->
                <?php $_from = $this->_tpl_vars['basket']->getProductVats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ORDER_CUST_HTML_PLUSTAX1'), $this);?>
 <?php echo $this->_tpl_vars['key']; ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_VAT2'), $this);?>
</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['VATitem']; ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            

            <?php if ($this->_tpl_vars['order']->isNettoMode()): ?>
                
                    <!-- brutto price -->
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS'), $this);?>
</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getFProductsPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                
            <?php endif; ?>
        <?php endif; ?>

        
            <!-- voucher discounts -->
            <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['basket']->getVoucherDiscValue()): ?>
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'COUPON'), $this);?>
</td>
                    <td align="right" class="odd text-right"><?php if ($this->_tpl_vars['basket']->getFVoucherDiscountValue() > 0): ?>-<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['basket']->getFVoucherDiscountValue())) ? $this->_run_mod_handler('replace', true, $_tmp, "-", "") : smarty_modifier_replace($_tmp, "-", "")); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
            <?php endif; ?>
        

        
            <!-- delivery costs -->
            <?php if ($this->_tpl_vars['basket']->getDelCostNet()): ?>
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_NET'), $this);?>
</td>
                    <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getDelCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
                <?php if ($this->_tpl_vars['basket']->getDelCostVat()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
:</td>
                        <?php else: ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getDelCostVatPercent(); ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_VAT2'), $this);?>
</td>
                        <?php endif; ?>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getDelCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['basket']->getFDeliveryCosts()): ?>
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_COST'), $this);?>
</td>
                    <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getFDeliveryCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
            <?php endif; ?>
        

        
            <!-- payment sum -->
            <?php if ($this->_tpl_vars['basket']->getPayCostNet()): ?>
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php if ($this->_tpl_vars['basket']->getPaymentCosts() >= 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DEDUCTION'), $this);?>
<?php endif; ?> <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD'), $this);?>
</td>
                    <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getPayCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
                <!-- payment sum VAT (if available) -->
                <?php if ($this->_tpl_vars['basket']->getPayCostVat()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
:</td>
                        <?php else: ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getPayCostVatPercent(); ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_VAT2'), $this);?>
</td>
                        <?php endif; ?>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getPayCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['basket']->getFPaymentCosts()): ?>
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
:</td>
                    <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getFPaymentCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
            <?php endif; ?>
        

        
            <?php if ($this->_tpl_vars['basket']->getTsProtectionCosts()): ?>
                <!-- Trusted Shops -->
                <tr valign="top" bgcolor="#ebebeb">
                    <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOP_BUYER_PROTECTION'), $this);?>
:</td>
                    <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getTsProtectionNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                </tr>
                <?php if ($this->_tpl_vars['basket']->getTsProtectionVat()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
:</td>
                        <?php else: ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getTsProtectionVatPercent(); ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_VAT2'), $this);?>
</td>
                        <?php endif; ?>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getTsProtectionVat(); ?>
&nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endif; ?>
            <?php endif; ?>
        

        <?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
            
                <!-- Gift wrapping -->
                <?php if ($this->_tpl_vars['basket']->getWrappCostNet()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_WRAPPING_COSTS_NET'), $this);?>
:</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getWrappCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                    <?php if ($this->_tpl_vars['basket']->getWrappCostVat()): ?>
                        <tr valign="top" bgcolor="#ebebeb">
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
:</td>
                            <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getWrappCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                        </tr>
                    <?php endif; ?>
                <?php elseif ($this->_tpl_vars['basket']->getFWrappingCosts()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_WRAPPING'), $this);?>
:</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getFWrappingCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endif; ?>
            

            
                <!-- Greeting card -->
                <?php if ($this->_tpl_vars['basket']->getGiftCardCostNet()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_GIFTCARD_COSTS_NET'), $this);?>
:</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getGiftCardCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                    <?php if ($this->_tpl_vars['basket']->getGiftCardCostVat()): ?>
                    <tr>
                        <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
:</td>
                        <?php else: ?>
                            <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getGiftCardCostVatPercent(); ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_VAT2'), $this);?>
</td>
                        <?php endif; ?>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getGiftCardCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                    <?php endif; ?>
                <?php elseif ($this->_tpl_vars['basket']->getFGiftCardCosts()): ?>
                    <tr valign="top" bgcolor="#ebebeb">
                        <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'GREETING_CARD'), $this);?>
:</td>
                        <td align="right" class="odd text-right"><?php echo $this->_tpl_vars['basket']->getFGiftCardCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                    </tr>
                <?php endif; ?>
            
        <?php endif; ?>

        
            <!-- grand total price -->
            <tr valign="top" bgcolor="#ebebeb">
                <td colspan="<?php echo $this->_tpl_vars['iFooterColspan']; ?>
" class="odd text-right" align="right">
                    <b><?php echo smarty_function_oxmultilang(array('ident' => 'GRAND_TOTAL'), $this);?>
</b>
                </td>
                <td align="right" class="odd text-right">
                    <b><?php echo $this->_tpl_vars['basket']->getFPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</b>
                </td>
            </tr>
        
    </tfoot>
</table>

<br/>


    <?php if ($this->_tpl_vars['order']->oxorder__oxremark->value): ?>
        <h3 class="underline"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE'), $this);?>
</h3>
        <p><?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxremark->value)) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
</p>
        <br>
    <?php endif; ?>



    <?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value != 'oxempty'): ?>
        <h3 class="underline"><?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_INFORMATION'), $this);?>
</h3>
        <p>
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD'), $this);?>
 <?php echo $this->_tpl_vars['payment']->oxpayments__oxdesc->value; ?>
 <?php if ($this->_tpl_vars['basket']->getPaymentCosts()): ?>(<?php echo $this->_tpl_vars['basket']->getFPaymentCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
)<?php endif; ?></b>
        </p>
        <br>
    <?php endif; ?>



    <h3 class="underline"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS'), $this);?>
</h3>
    <p><?php echo $this->_tpl_vars['user']->oxuser__oxusername->value; ?>
</p>
    <br>



    <?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value != 'oxempty'): ?>
        <h3 class="underline"><?php echo smarty_function_oxmultilang(array('ident' => 'SELECTED_SHIPPING_CARRIER'), $this);?>
</h3>
        <p><?php echo $this->_tpl_vars['oDelSet']->oxdeliveryset__oxtitle->value; ?>
</p>
        <br>
    <?php endif; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>