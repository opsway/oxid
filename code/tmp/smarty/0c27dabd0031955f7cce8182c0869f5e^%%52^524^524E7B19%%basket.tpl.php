<?php /* Smarty version 2.6.28, created on 2017-02-07 17:54:00
         compiled from page/checkout/basket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/checkout/basket.tpl', 12, false),array('function', 'oxstyle', 'page/checkout/basket.tpl', 49, false),array('function', 'oxscript', 'page/checkout/basket.tpl', 87, false),array('modifier', 'strip_tags', 'page/checkout/basket.tpl', 69, false),array('modifier', 'trim', 'page/checkout/basket.tpl', 69, false),array('modifier', 'oxescape', 'page/checkout/basket.tpl', 69, false),array('insert', 'oxid_tracker', 'page/checkout/basket.tpl', 200, false),)), $this); ?>
<?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>
<?php ob_start(); ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

        <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
            
                <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                <div class="spacer"></div>
            
        <?php endif; ?>

        <?php if (! $this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
            
                <div class="spacer"></div>
                <div class="alert alert-danger" id="empty-basket-warning">
                    <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" title="<?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtitleprefix->value; ?>
" class="btn btn-default"><i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'DD_BASKET_BACK_TO_SHOP'), $this);?>
</a>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>

                </div>
            
        <?php else: ?>
            
                <div class="well well-sm clear cart-buttons">
                    
                        <?php if ($this->_tpl_vars['oView']->showBackToShop()): ?>
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-left">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="basket">
                                    <input type="hidden" name="fnc" value="backtoshop">
                                </div>
                                <button type="submit" class="btn btn-default submitButton largeButton pull-left">
                                    <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                                </button>
                            </form>
                        <?php else: ?>
                            <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" class="btn btn-default submitButton largeButton pull-left">
                                <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                            </a>
                        <?php endif; ?>
                    

                    <?php if (! $this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        <?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabled()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-right">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
    <div class="paypalExpressCheckoutBox">
        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
            <div>
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="oePayPalExpressCheckoutDispatcher">
                <input type="hidden" name="fnc" value="setExpressCheckout">
                <input type="image" name="paypalExpressCheckoutButton" class="paypalCheckoutBtn"
                       src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
                       title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">

                <div class="paypalExpressCheckoutMsg">
                    <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                    <a href="#" class="paypalHelpIcon small">?</a>

                    <div class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                    </div>

                <input type="checkbox" name="displayCartInPayPal"
                       value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").hover(function (){$(this).parent(".paypalExpressCheckoutMsg").children(".paypalHelpBox").toggle();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").click(function (){return false;});'), $this);?>

<?php else: ?>
    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-right">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
<?php endif; ?>

                    <?php endif; ?>
                    <div class="clearfix"></div>
                </div>
            

            <div class="lineBox">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/basketcontents.tpl", 'smarty_include_vars' => array('editable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>

            
                <div class="well well-sm clear cart-buttons">
                    

                    
                        <?php if ($this->_tpl_vars['oView']->showBackToShop()): ?>
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" class="pull-left">
                                <div class="backtoshop">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="basket">
                                    <input type="hidden" name="fnc" value="backtoshop">
                                    <button type="submit" class="btn btn-default submitButton largeButton pull-left">
                                        <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                                    </button>
                                </div>
                            </form>
                        <?php else: ?>
                            <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" class="btn btn-default submitButton largeButton pull-left">
                                <i class="fa fa-caret-left"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>

                            </a>
                        <?php endif; ?>
                    

                    <?php if (! $this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        <?php if ($this->_tpl_vars['oViewConf']->isExpressCheckoutEnabled()): ?>
    <?php echo smarty_function_oxstyle(array('include' => $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/src/css/paypal.css')), $this);?>

    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
    <div class="paypalExpressCheckoutBox">
        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
            <div>
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="oePayPalExpressCheckoutDispatcher">
                <input type="hidden" name="fnc" value="setExpressCheckout">
                <input type="image" name="paypalExpressCheckoutButton" class="paypalCheckoutBtn"
                       src="<?php echo $this->_tpl_vars['oViewConf']->getModuleUrl('oepaypal','out/img/'); ?>
<?php echo $this->_tpl_vars['oViewConf']->getActLanguageAbbr(); ?>
-btn-expresscheckout.png"
                       title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oViewConf']->getPayPalPaymentDescription())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>
">

                <div class="paypalExpressCheckoutMsg">
                    <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPal()): ?>
                    <a href="#" class="paypalHelpIcon small">?</a>

                    <div class="paypalHelpBox popupBox corners FXgradGreyLight shadow">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL_HELPTEXT'), $this);?>

                    </div>

                <input type="checkbox" name="displayCartInPayPal"
                       value="1" <?php if ($this->_tpl_vars['oViewConf']->sendOrderInfoToPayPalDefault()): ?>checked<?php endif; ?>>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OEPAYPAL_DISPLAY_BASKET_IN_PAYPAL'), $this);?>

                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").hover(function (){$(this).parent(".paypalExpressCheckoutMsg").children(".paypalHelpBox").toggle();});'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => '$(".paypalHelpIcon").click(function (){return false;});'), $this);?>

<?php else: ?>
    
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="hidden">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="user">
                                </div>
                                <button type="submit" class="btn btn-primary submitButton largeButton nextStep pull-right">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
 <i class="fa fa-caret-right"></i>
                                </button>
                            </form>
                        
<?php endif; ?>

                    <?php endif; ?>
                    <div class="clearfix"></div>
                </div>
            
        <?php endif; ?>
        <?php if ($this->_tpl_vars['oView']->isWrapping()): ?>
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/wrapping.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>