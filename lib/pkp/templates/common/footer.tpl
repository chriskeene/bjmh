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

<!-- custom footer -->
<div id="bjmhfooter">
<!-- left box -->
<div class="footerbox">
<p>The BJMH is a pioneering Open Access, peer-reviewed journal that brings high quality scholarship in military history to an audience beyond academia.</p>
<p>Copyright &copy; 2014, British Journal for Military History</p>

</div>
<!-- next box -->
<div class="footerbox">
<ul>
<li><a href="/index.php/bjmh/about/submissions">Send your submissions to the British Journal of Miltary History</a></li>
<li><a href="/index.php/bjmh/information/readers">Sign up for email alerts for new issues</a></li>
<li><a href="/index.php/bjmh">About</a></li>
<li><a href="/index.php/bjmh/issue/current">Current issue</a></li>
<li><a href="/index.php/bjmh/issue/archive">All Issues</a></li>
</ul>

</div>

<!-- final box -->
<div  class="footerbox">
<img src="http://bjmh.xd5.be/public/journals/1/homeHeaderLogoImage_en_US.jpg" width="120" height="132" alt="Logo" />
<p style="font-size: 0.8em;">Our logo is based on the combination of Mars & Clio, the Roman God of War and the Greek Muse of History. It is the official logo of the <a href="http://www.bcmh.org.uk/index.php">BCMH</a>.</p>

</div>
<div style="clear: both;">&nbsp;</div>


</div><!-- end of bjmhfooter -->



</body>
</html>
