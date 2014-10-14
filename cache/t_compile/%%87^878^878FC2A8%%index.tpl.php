<?php /* Smarty version 2.6.26, created on 2014-10-14 18:27:23
         compiled from about/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/index.tpl', 56, false),array('function', 'url', 'about/index.tpl', 59, false),array('function', 'call_hook', 'about/index.tpl', 67, false),array('block', 'iterate', 'about/index.tpl', 63, false),array('modifier', 'escape', 'about/index.tpl', 64, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "about.aboutTheJournal"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p>The BJMH is a pioneering Open Access, peer-reviewed journal that brings high quality scholarship in military history to an audience beyond academia.</p>
<p><p class="p1">The British Journal for Military History (BJMH) launched on <a href="http://bit.ly/1nQH0Du"><span class="s1">Trafalgar Day</span></a> 2014. This pioneering Open Access, peer-reviewed journal is published three times a year (Spring, Summer, Autumn), caters for all periods and will bring high quality scholarship to a large audience beyond academia.</p>
<p class="p1">It will be of interest to anyone who enjoys military history and will consider and publish work on a broad range of themes from any period or war.</p>
<p class="p2">The journal is a <a href="http://www.bcmh.org.uk/index.php"><span class="s1">British Commission for Military History</span></a> (BCMH) initiative and has an Editorial Advisory Board that includes some of the world’s leading military historians.</p>
<p><p class="p1">To contact the editors please send an email to: <a href="mailto:editor@bcmh.org.uk"><span class="s1">editor@bcmh.org.uk</span></a></p>
<p class="p1"><b>Editor-in-Chief</b>
<br />Dr <a href="http://www.sussex.ac.uk/ir/people/peoplelists/person/261708"><span class="s1">Matthew Ford</span></a> (University of Sussex)</p>
<p class="p2"><b>Editors</b><br />
Dr <a href="http://www2.hull.ac.uk/fass/history/ourstaff/catherinebaker.aspx"><span class="s1">Catherine Baker</span></a> (University of Hull)<br />
Dr <a href="http://humanities.exeter.ac.uk/history/staff/terry/"><span class="s1">Nick Terry</span></a> (University of Exeter)</p>
<p class="p1"><b>Associate Editors</b><br />
<span class="s1"><a href="http://www.smh-hq.org/grad/gradbio/jenniferdaley.html">Jennifer Daley</a></span> (King’s College London)<br />
<a href="https://twitter.com/AimeeFoxGodden"><span class="s1">Aimée Fox-Godden</span></a> (University of Birmingham)<br />
<a href="https://twitter.com/AirPowerHistory"><span class="s1">Ross Mahoney</span></a> (RAF Museum)<br />
<a href="https://twitter.com/SBTMitchell"><span class="s1">Dr Stuart Mitchell</span></a> (Senior Lecturer RMA Sandhurst)</p>

<p><strong>Journal Editorial Advisory Board</strong><br />
Major-General <a href="http://www.mungomelvin.com/"><span class="s1">Mungo Melvin</span></a> (President, BCMH)<br />
Professor <a href="http://www.kcl.ac.uk/sspp/departments/warstudies/people/professors/philpott.aspx"><span class="s1">Bill Philpott</span></a> (Secretary-General, BCMH &amp; King’s College London)<br />
Dr Tim Gale (Treasurer, BCMH)<br />
Andy Grainger (Member BCMH)<br />
Dr Andy Simpson (Member BCMH)<br />
Professor <a href="http://www.liv.ac.uk/history/staff/charles-esdaile/"><span class="s1">Charles Esdaile</span></a> (University of Liverpool)<br />
Professor <a href="http://www.gold.ac.uk/history/staff/graysonprofrichard/"><span class="s1">Richard Grayson</span></a> (Goldsmiths, University of London)<br />
Professor <a href="http://www.reading.ac.uk/spirs/about/staff/d-b-g-heuser.aspx"><span class="s1">Beatrice Heuser</span></a> (University of Reading)<br />
Professor <a href="http://www.kcl.ac.uk/sspp/departments/warstudies/people/professors/holdenreid.aspx"><span class="s1">Brian Holden-Reid</span></a> (King’s College London)<br />
Professor <a href="http://www.brunel.ac.uk/cbass/politics-history-law/politics/staff-profiles/matthew-hughes"><span class="s1">Matthew Hughes</span></a> (Brunel University)<br />
Professor <a href="http://www.andrew-roberts.net/"><span class="s1">Andrew Roberts</span></a> (Cornell University)<br />
Professor <a href="http://www.garysheffield-historian.com/"><span class="s1">Gary Sheffield</span></a> (University of Wolverhampton)<br />
Professor <a href="http://www.all-souls.ox.ac.uk/people.php?personid=67"><span class="s1">Hew Strachan</span></a> (University of Oxford)<br />
Dr <a href="http://www.aber.ac.uk/en/interpol/staff/academic/bennetthuw/"><span class="s1">Huw Bennett</span></a> (University of Aberystwyth)<br />
Dr <a href="http://www.kcl.ac.uk/sspp/departments/dsd/people/dsd-a-to-z/davies.aspx"><span class="s1">Huw Davies</span></a> (JSCSC; King’s College London)<br />
Dr <a href="http://www.uea.ac.uk/history/people/profile/d-o-reilly"><span class="s1">Declan O’Reilly</span></a> (University of East Anglia)<br />
<a href="http://www.royalarmouries.org/what-we-do/research/research-staff/jonathan-ferguson"><span class="s1">Jonathan Ferguson</span></a> (Royal Armouries)<br />
Seb Cox (Air Historical Branch – UK MoD)<br />
Bob Evans (Army Historical Branch – UK MoD)<br />
Stephen Prince (Naval Historical Branch – UK MoD)</p>
</p>
<!--
<div id="aboutPeople">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.people"), $this);?>
</h3>
<ul class="plain">
	<?php if (! ( empty ( $this->_tpl_vars['journalSettings']['mailingAddress'] ) && empty ( $this->_tpl_vars['journalSettings']['contactName'] ) && empty ( $this->_tpl_vars['journalSettings']['contactAffiliation'] ) && empty ( $this->_tpl_vars['journalSettings']['contactMailingAddress'] ) && empty ( $this->_tpl_vars['journalSettings']['contactPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['contactFax'] ) && empty ( $this->_tpl_vars['journalSettings']['contactEmail'] ) && empty ( $this->_tpl_vars['journalSettings']['supportName'] ) && empty ( $this->_tpl_vars['journalSettings']['supportPhone'] ) && empty ( $this->_tpl_vars['journalSettings']['supportEmail'] ) )): ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'contact'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>
</a></li>
	<?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeam'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['peopleGroups']): ?>
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'peopleGroups','item' => 'peopleGroup')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'displayMembership','path' => $this->_tpl_vars['peopleGroup']->getId()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['peopleGroup']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::People"), $this);?>

</ul>
</div>
-->
<!--
<div id="aboutPolicies">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.policies"), $this);?>
</h3>
<ul class="plain">
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('focusScopeDesc') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'focusAndScope'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</a></li><?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'sectionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('reviewPolicy') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'peerReviewProcess'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('pubFreqPolicy') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'publicationFrequency'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_OPEN && $this->_tpl_vars['currentJournal']->getLocalizedSetting('openAccessPolicy') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'openAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['journalSettings']['enableLockss'] && $this->_tpl_vars['currentJournal']->getLocalizedSetting('lockssLicense') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'archiving'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['paymentConfigured'] && $this->_tpl_vars['journalSettings']['journalPaymentsEnabled'] && $this->_tpl_vars['journalSettings']['membershipFeeEnabled'] && $this->_tpl_vars['journalSettings']['membershipFee'] > 0): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'memberships'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.memberships"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION): ?>
		<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'subscriptions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.subscriptions"), $this);?>
</a></li>
		<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableAuthorSelfArchive'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'authorSelfArchivePolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorSelfArchive"), $this);?>
</a></li><?php endif; ?>
		<?php if (! empty ( $this->_tpl_vars['journalSettings']['enableDelayedOpenAccess'] )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'delayedOpenAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccess"), $this);?>
</a></li><?php endif; ?>
	<?php endif; ?>	<?php $_from = $this->_tpl_vars['customAboutItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
		<?php if ($this->_tpl_vars['customAboutItem']['title'] != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => "custom-".($this->_tpl_vars['key'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li><?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Policies"), $this);?>

</ul>
</div>
-->
<div id="aboutSubmissions">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissions"), $this);?>
</h3>
<ul class="plain">
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'onlineSubmissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.onlineSubmissions"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('authorGuidelines') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'authorGuidelines'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorGuidelines"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('copyrightNotice') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'copyrightNotice'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.copyrightNotice"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('privacyStatement') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'privacyStatement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('journalPaymentsEnabled') && ( $this->_tpl_vars['currentJournal']->getSetting('submissionFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('fastTrackFeeEnabled') || $this->_tpl_vars['currentJournal']->getSetting('publicationFeeEnabled') )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissions','anchor' => 'authorFees'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorFees"), $this);?>
</a></li><?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Submissions"), $this);?>

</ul>
</div>
<?php echo '

<a href="https://twitter.com/Mars_Clio" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Mars_Clio</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>
'; ?>

<!--
<div id="aboutOther">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.other"), $this);?>
</h3>
<ul class="plain">
	<?php if (! ( $this->_tpl_vars['currentJournal']->getSetting('publisherInstitution') == '' && $this->_tpl_vars['currentJournal']->getLocalizedSetting('publisherNote') == '' && $this->_tpl_vars['currentJournal']->getLocalizedSetting('contributorNote') == '' && empty ( $this->_tpl_vars['journalSettings']['contributors'] ) && $this->_tpl_vars['currentJournal']->getLocalizedSetting('sponsorNote') == '' && empty ( $this->_tpl_vars['journalSettings']['sponsors'] ) )): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'journalSponsorship'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.journalSponsorship"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('history') != ''): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'history'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.history"), $this);?>
</a></li><?php endif; ?>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'siteMap'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.siteMap"), $this);?>
</a></li>
	<li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'aboutThisPublishingSystem'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['publicStatisticsEnabled']): ?><li>&#187; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'statistics'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.statistics"), $this);?>
</a></li><?php endif; ?>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::About::Index::Other"), $this);?>

</ul>
</div>
-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
