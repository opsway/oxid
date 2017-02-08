<?php /* Smarty version 2.6.28, created on 2017-02-07 17:58:52
         compiled from page/checkout/order.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/checkout/order.tpl', 5, false),array('modifier', 'nl2br', 'page/checkout/order.tpl', 191, false),array('function', 'oxmultilang', 'page/checkout/order.tpl', 18, false),array('function', 'oxgetseourl', 'page/checkout/order.tpl', 37, false),array('insert', 'oxid_tracker', 'page/checkout/order.tpl', 281, false),)), $this); ?>
<?php ob_start(); ?>

    
        <?php if ($this->_tpl_vars['oView']->isConfirmAGBActive() && $this->_tpl_vars['oView']->isConfirmAGBError() == 1): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/error.tpl", 'smarty_include_vars' => array('statusMessage' => ((is_array($_tmp='READ_AND_CONFIRM_TERMS')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        <?php $this->assign('iError', $this->_tpl_vars['oView']->getAddressError()); ?>
        <?php if ($this->_tpl_vars['iError'] == 1): ?>
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/error.tpl", 'smarty_include_vars' => array('statusMessage' => ((is_array($_tmp='ERROR_DELIVERY_ADDRESS_WAS_CHANGED_DURING_CHECKOUT')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 4)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <?php if (! $this->_tpl_vars['oView']->showOrderButtonOnTop()): ?>
            <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_SUBMIT_BOTTOM'), $this);?>
</div>
        <?php endif; ?>

        
            <?php if (! $this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                
                    <div class="alert alert-danger"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
                
            <?php else: ?>
                <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

                
                    <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        
                            <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                        
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['oView']->showOrderButtonOnTop()): ?>
                            <div class="well well-sm">
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getPaymentLink()), $this);?>
" class="btn btn-default prevStep submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'PREVIOUS_STEP'), $this);?>
</a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                

                
                    <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['oxcmp_basket']->getVouchers()): ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'USED_COUPONS'), $this);?>

                        <?php $_from = $this->_tpl_vars['Errors']['basket']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
                            <?php if ($this->_tpl_vars['oEr']->getErrorClassType() == 'oxVoucherException'): ?>
                                <div class="alert alert-danger">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'PAGE_CHECKOUT_ORDER_COUPONNOTACCEPTED1'), $this);?>
 <?php echo $this->_tpl_vars['oEr']->getValue('voucherNr'); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'PAGE_CHECKOUT_ORDER_COUPONNOTACCEPTED2'), $this);?>
<br>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'REASON'), $this);?>

                                    <?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>

                                </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <div class="alert alert-info">
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getVouchers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aVouchers'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aVouchers']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sVoucher']):
        $this->_foreach['aVouchers']['iteration']++;
?>
                                <?php echo $this->_tpl_vars['sVoucher']->sVoucherNr; ?>
<br>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    <?php endif; ?>
                

                
                    <div id="orderAddress" class="row">
                        <div class="col-xs-12 col-md-6">
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                    <input type="hidden" name="fnc" value="">
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS'), $this);?>

                                            <button type="submit" class="btn btn-xs btn-warning pull-right submitButton largeButton" title="<?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/billing_address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                    <input type="hidden" name="fnc" value="">
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESS'), $this);?>

                                            <button type="submit" class="btn btn-xs btn-warning pull-right submitButton largeButton" title="<?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php $this->assign('oDelAdress', $this->_tpl_vars['oView']->getDelAddress()); ?>
                                        <?php if ($this->_tpl_vars['oDelAdress']): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/shipping_address.tpl", 'smarty_include_vars' => array('delivadr' => $this->_tpl_vars['oDelAdress'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php else: ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/billing_address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                

                
                    <div class="row">
                        <div class="col-xs-12 col-md-6" id="orderShipping">
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="payment">
                                    <input type="hidden" name="fnc" value="">
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_CARRIER'), $this);?>

                                            <button type="submit" class="btn btn-xs btn-warning pull-right submitButton largeButton" title="<?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php $this->assign('oShipSet', $this->_tpl_vars['oView']->getShipSet()); ?>
                                        <?php echo $this->_tpl_vars['oShipSet']->oxdeliveryset__oxtitle->value; ?>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-md-6" id="orderPayment">
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="payment">
                                    <input type="hidden" name="fnc" value="">
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD'), $this);?>

                                            <button type="submit" class="btn btn-xs btn-warning pull-right submitButton largeButton" title="<?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php $this->assign('payment', $this->_tpl_vars['oView']->getPayment()); ?>
                                        <?php echo $this->_tpl_vars['payment']->oxpayments__oxdesc->value; ?>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                

                
                    <?php if ($this->_tpl_vars['oView']->getOrderRemark()): ?>
                        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                            <div class="hidden">
                                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                <input type="hidden" name="cl" value="user">
                                <input type="hidden" name="fnc" value="">
                            </div>

                            <div class="panel panel-default orderRemarks">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'WHAT_I_WANTED_TO_SAY'), $this);?>

                                        <button type="submit" class="btn btn-xs btn-warning pull-right submitButton largeButton" title="<?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo smarty_modifier_nl2br($this->_tpl_vars['oView']->getOrderRemark()); ?>

                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                

                <?php if (! $this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                    <div id="orderAgbTop">
                        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" id="orderConfirmAgbTop">
                            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                            <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                            <input type="hidden" name="cl" value="order">
                            <input type="hidden" name="fnc" value="<?php echo $this->_tpl_vars['oView']->getExecuteFnc(); ?>
">
                            <input type="hidden" name="challenge" value="<?php echo $this->_tpl_vars['challenge']; ?>
">
                            <input type="hidden" name="sDeliveryAddressMD5" value="<?php echo $this->_tpl_vars['oView']->getDeliveryAddressMD5(); ?>
">

                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/agb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </form>
                    </div>
                <?php endif; ?>

                <div id="orderEditCart">
                    <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                        <div class="hidden">
                            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                            <input type="hidden" name="cl" value="basket">
                            <input type="hidden" name="fnc" value="">
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CART'), $this);?>

                                    <button type="submit" class="btn btn-xs btn-warning pull-right submitButton largeButton" title="<?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </h3>
                            </div>
                            <div class="panel-body">
                                
                                    <div class="lineBox">
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/basketcontents.tpl", 'smarty_include_vars' => array('editable' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            <?php endif; ?>

            
                <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                    
                        <div class="alert alert-info">
                            <div><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                        </div>
                    
                <?php else: ?>
                    
                        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" id="orderConfirmAgbBottom" class="form-horizontal">
                            <div class="hidden">
                                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                                <input type="hidden" name="cl" value="order">
                                <input type="hidden" name="fnc" value="<?php echo $this->_tpl_vars['oView']->getExecuteFnc(); ?>
">
                                <input type="hidden" name="challenge" value="<?php echo $this->_tpl_vars['challenge']; ?>
">
                                <input type="hidden" name="sDeliveryAddressMD5" value="<?php echo $this->_tpl_vars['oView']->getDeliveryAddressMD5(); ?>
">

                                <?php if ($this->_tpl_vars['oView']->isActive('PsLogin') || ! $this->_tpl_vars['oView']->isConfirmAGBActive()): ?>
                                    <input type="hidden" name="ord_agb" value="1">
                                <?php else: ?>
                                    <input type="hidden" name="ord_agb" value="0">
                                <?php endif; ?>
                                <input type="hidden" name="oxdownloadableproductsagreement" value="0">
                                <input type="hidden" name="oxserviceproductsagreement" value="0">
                            </div>

                            <div class="well well-sm">
                                <button type="submit" class="btn btn-lg btn-primary pull-right submitButton nextStep largeButton">
                                    <i class="fa fa-check"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'SUBMIT_ORDER'), $this);?>

                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    
                <?php endif; ?>
            
        
    
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $this->assign('template_title', ((is_array($_tmp='REVIEW_YOUR_ORDER')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['template_title'],'location' => $this->_tpl_vars['template_title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>