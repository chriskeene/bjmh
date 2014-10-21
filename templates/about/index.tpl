{**
 * templates/about/index.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * About the Journal index.
 *
 *}
{strip}
{assign var="pageTitle" value="about.aboutTheJournal"}
{include file="common/header.tpl"}
{/strip}

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
<p>ISSN 2057-0422</p>
<!--
<div id="aboutPeople">
<h3>{translate key="about.people"}</h3>
<ul class="plain">
	{if not (empty($journalSettings.mailingAddress) && empty($journalSettings.contactName) && empty($journalSettings.contactAffiliation) && empty($journalSettings.contactMailingAddress) && empty($journalSettings.contactPhone) && empty($journalSettings.contactFax) && empty($journalSettings.contactEmail) && empty($journalSettings.supportName) && empty($journalSettings.supportPhone) && empty($journalSettings.supportEmail))}
		<li>&#187; <a href="{url op="contact"}">{translate key="about.contact"}</a></li>
	{/if}
	<li>&#187; <a href="{url op="editorialTeam"}">{translate key="about.editorialTeam"}</a></li>
	{if $peopleGroups}
		{iterate from=peopleGroups item=peopleGroup}
			<li>&#187; <a href="{url op="displayMembership" path=$peopleGroup->getId()}">{$peopleGroup->getLocalizedTitle()|escape}</a></li>
		{/iterate}
	{/if}
	{call_hook name="Templates::About::Index::People"}
</ul>
</div>
-->
<!--
<div id="aboutPolicies">
<h3>{translate key="about.policies"}</h3>
<ul class="plain">
	{if $currentJournal->getLocalizedSetting('focusScopeDesc') != ''}<li>&#187; <a href="{url op="editorialPolicies" anchor="focusAndScope"}">{translate key="about.focusAndScope"}</a></li>{/if}
	<li>&#187; <a href="{url op="editorialPolicies" anchor="sectionPolicies"}">{translate key="about.sectionPolicies"}</a></li>
	{if $currentJournal->getLocalizedSetting('reviewPolicy') != ''}<li>&#187; <a href="{url op="editorialPolicies" anchor="peerReviewProcess"}">{translate key="about.peerReviewProcess"}</a></li>{/if}
	{if $currentJournal->getLocalizedSetting('pubFreqPolicy') != ''}<li>&#187; <a href="{url op="editorialPolicies" anchor="publicationFrequency"}">{translate key="about.publicationFrequency"}</a></li>{/if}
	{if $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_OPEN && $currentJournal->getLocalizedSetting('openAccessPolicy') != ''}<li>&#187; <a href="{url op="editorialPolicies" anchor="openAccessPolicy"}">{translate key="about.openAccessPolicy"}</a></li>{/if}
	{if $journalSettings.enableLockss && $currentJournal->getLocalizedSetting('lockssLicense') != ''}<li>&#187; <a href="{url op="editorialPolicies" anchor="archiving"}">{translate key="about.archiving"}</a></li>{/if}
	{if $paymentConfigured && $journalSettings.journalPaymentsEnabled && $journalSettings.membershipFeeEnabled && $journalSettings.membershipFee > 0}<li>&#187; <a href="{url op="memberships"}">{translate key="about.memberships"}</a></li>{/if}
	{if $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_SUBSCRIPTION}
		<li>&#187; <a href="{url op="subscriptions"}">{translate key="about.subscriptions"}</a></li>
		{if !empty($journalSettings.enableAuthorSelfArchive)}<li>&#187; <a href="{url op="editorialPolicies" anchor="authorSelfArchivePolicy"}">{translate key="about.authorSelfArchive"}</a></li>{/if}
		{if !empty($journalSettings.enableDelayedOpenAccess)}<li>&#187; <a href="{url op="editorialPolicies" anchor="delayedOpenAccessPolicy"}">{translate key="about.delayedOpenAccess"}</a></li>{/if}
	{/if}{* $currentJournal->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_SUBSCRIPTION *}
	{foreach key=key from=$customAboutItems item=customAboutItem}
		{if $customAboutItem.title!=''}<li>&#187; <a href="{url op="editorialPolicies" anchor=custom-$key}">{$customAboutItem.title|escape}</a></li>{/if}
	{/foreach}
	{call_hook name="Templates::About::Index::Policies"}
</ul>
</div>
-->
<div id="aboutSubmissions">
<h3>{translate key="about.submissions"}</h3>
<ul class="plain">
	<li>&#187; <a href="{url op="submissions" anchor="onlineSubmissions"}">{translate key="about.onlineSubmissions"}</a></li>
	{if $currentJournal->getLocalizedSetting('authorGuidelines') != ''}<li>&#187; <a href="{url op="submissions" anchor="authorGuidelines"}">{translate key="about.authorGuidelines"}</a></li>{/if}
	{if $currentJournal->getLocalizedSetting('copyrightNotice') != ''}<li>&#187; <a href="{url op="submissions" anchor="copyrightNotice"}">{translate key="about.copyrightNotice"}</a></li>{/if}
	{if $currentJournal->getLocalizedSetting('privacyStatement') != ''}<li>&#187; <a href="{url op="submissions" anchor="privacyStatement"}">{translate key="about.privacyStatement"}</a></li>{/if}
	{if $currentJournal->getSetting('journalPaymentsEnabled') && ($currentJournal->getSetting('submissionFeeEnabled') || $currentJournal->getSetting('fastTrackFeeEnabled') || $currentJournal->getSetting('publicationFeeEnabled'))}<li>&#187; <a href="{url op="submissions" anchor="authorFees"}">{translate key="about.authorFees"}</a></li>{/if}
	{call_hook name="Templates::About::Index::Submissions"}
</ul>
</div>
<!--
<div id="aboutOther">
<h3>{translate key="about.other"}</h3>
<ul class="plain">
	{if not ($currentJournal->getSetting('publisherInstitution') == '' && $currentJournal->getLocalizedSetting('publisherNote') == '' && $currentJournal->getLocalizedSetting('contributorNote') == '' && empty($journalSettings.contributors) && $currentJournal->getLocalizedSetting('sponsorNote') == '' && empty($journalSettings.sponsors))}<li>&#187; <a href="{url op="journalSponsorship"}">{translate key="about.journalSponsorship"}</a></li>{/if}
	{if $currentJournal->getLocalizedSetting('history') != ''}<li>&#187; <a href="{url op="history"}">{translate key="about.history"}</a></li>{/if}
	<li>&#187; <a href="{url op="siteMap"}">{translate key="about.siteMap"}</a></li>
	<li>&#187; <a href="{url op="aboutThisPublishingSystem"}">{translate key="about.aboutThisPublishingSystem"}</a></li>
	{if $publicStatisticsEnabled}<li>&#187; <a href="{url op="statistics"}">{translate key="about.statistics"}</a></li>{/if}
	{call_hook name="Templates::About::Index::Other"}
</ul>
</div>
-->
{include file="common/footer.tpl"}

