<?php /* Smarty version 2.6.28, created on 2017-02-07 17:58:52
         compiled from page/checkout/inc/agb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxifcontent', 'page/checkout/inc/agb.tpl', 6, false),array('function', 'oxscript', 'page/checkout/inc/agb.tpl', 78, false),)), $this); ?>
<div class="agb panel panel-default">
    <?php if (! $this->_tpl_vars['hideButtons']): ?>

        <?php if (! $this->_tpl_vars['oView']->isActive('PsLogin')): ?>
            <?php if ($this->_tpl_vars['oView']->isConfirmAGBActive()): ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrighttocancellegend','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $this->_tpl_vars['oContent']->oxcontents__oxtitle->value; ?>
</strong></h3>
                    </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrighttocancellegend2','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $this->_tpl_vars['oContent']->oxcontents__oxtitle->value; ?>
</strong></h3>
                    </div>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        <?php endif; ?>

        <div class="panel-body">
            <?php if (! $this->_tpl_vars['oView']->isActive('PsLogin')): ?>
                <?php if ($this->_tpl_vars['oView']->isConfirmAGBActive()): ?>
                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrighttocancellegend','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <p class="agbConfirmation checkbox">
                            <label>
                                <input id="checkAgbTop" type="checkbox" name="ord_agb" value="1"> <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

                            </label>
                        </p>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php else: ?>
                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrighttocancellegend2','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <p class="agbConfirmation">
                            <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

                        </p>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blEnableIntangibleProdAgreement')): ?>
                <?php $this->assign('oExplanationMarks', $this->_tpl_vars['oView']->getBasketContentMarkGenerator()); ?>
                <?php if ($this->_tpl_vars['oxcmp_basket']->hasArticlesWithDownloadableAgreement()): ?>
                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxdownloadableproductsagreement','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <p id="noteForDownloadableArticles" class="agbConfirmation checkbox">
                            <label>
                                <input id="oxdownloadableproductsagreement" type="checkbox" name="oxdownloadableproductsagreement" value="1">
                                <?php echo $this->_tpl_vars['oExplanationMarks']->getMark('downloadable'); ?>
 <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

                            </label>
                        </p>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['oxcmp_basket']->hasArticlesWithIntangibleAgreement()): ?>
                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxserviceproductsagreement','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <p id="noteForIntangibleArticles" class="agbConfirmation checkbox">
                            <label>
                                <input id="oxserviceproductsagreement" type="checkbox" name="oxserviceproductsagreement" value="1">
                                <?php echo $this->_tpl_vars['oExplanationMarks']->getMark('intangible'); ?>
 <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

                            </label>
                        </p>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowTSInternationalFeesMessage')): ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxtsinternationalfees','object' => 'oTSIFContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <hr/><?php echo $this->_tpl_vars['oTSIFContent']->oxcontents__oxcontent->value; ?>

                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['payment']->oxpayments__oxid->value == 'oxidcashondel' && $this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowTSCODMessage')): ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxtscodmessage','object' => 'oTSCODContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <hr/><?php echo $this->_tpl_vars['oTSCODContent']->oxcontents__oxcontent->value; ?>

                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<?php echo smarty_function_oxscript(array('add' => "$('#checkAgbTop').click(function(){ $('input[name=ord_agb]').val($(this).is(':checked') ? '1' : '0');});"), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('#oxdownloadableproductsagreement').click(function(){ $('input[name=oxdownloadableproductsagreement]').val($(this).is(':checked') ? '1' : '0');});"), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('#oxserviceproductsagreement').click(function(){ $('input[name=oxserviceproductsagreement]').val($(this).is(':checked') ? '1' : '0');});"), $this);?>