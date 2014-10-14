{**
 * templates/common/footer.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2000-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 *}
{if $displayCreativeCommons}
	{translate key="common.ccLicense"}
{/if}
{if $pageFooter}
	<br /><br />
	<div id="pageFooter">{$pageFooter}</div>
{/if}
{call_hook name="Templates::Common::Footer::PageFooter"}
</div><!-- content -->
</div><!-- main -->
</div><!-- body -->

{get_debug_info}
{if $enableDebugStats}{include file=$pqpTemplate}{/if}

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
