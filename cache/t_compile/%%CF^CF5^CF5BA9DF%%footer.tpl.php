<?php /* Smarty version 2.6.26, created on 2014-10-14 16:52:10
         compiled from core:common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'core:common/footer.tpl', 12, false),array('function', 'call_hook', 'core:common/footer.tpl', 18, false),array('function', 'get_debug_info', 'core:common/footer.tpl', 23, false),)), $this); ?>
<?php if ($this->_tpl_vars['displayCreativeCommons']): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?>

<?php endif; ?>
<?php if ($this->_tpl_vars['pageFooter']): ?>
	<br /><br />
	<div id="pageFooter"><?php echo $this->_tpl_vars['pageFooter']; ?>
</div>
<?php endif; ?>
<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->

<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>

</div><!-- container -->

<div style="clear: both;">&nbsp;</div>
<div id="bjmhfooter">

<div class="footerbox">
<p>The BJMH is a pioneering Open Access, peer-reviewed journal that brings high quality scholarship in military history to an audience beyond academia.</p>

</div>
<div  class="footerbox">
<p><a href="/index.php/bjmh/about/submissions">Send your submissions to the British Journal of Miltary History</a></p>
<p><a href="/index.php/bjmh/information/readers">Sign up for email alerts for new issues</a></p>
</div>
<div style="clear: both;">&nbsp;</div>


</div>



</body>
</html>