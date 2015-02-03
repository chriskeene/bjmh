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
<ul>
<li><a href="/index.php/bjmh/about/submissions">Send your submissions to the British Journal for Miltary History</a></li>
<li><a href="/index.php/bjmh/information/readers">Sign up for email alerts for new issues</a></li>
<li><a href="/index.php/bjmh/pages/view/about">About</a></li>
<li><a href="/index.php/bjmh/issue/current">Current issue</a></li>
<li><a href="/index.php/bjmh/issue/archive">All Issues</a></li>
</ul>
<p>ISSN: 2057-0422</p>
<p>Copyright &copy; 2014, British Journal for Military History</p>

</div>
<!-- next box -->
<div class="footerbox">
<a href="https://twitter.com/Mars_Clio" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Mars_Clio</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<p style="font-size: 0.8em;">Our logo is based on the combination of Mars & Clio, the Roman God of War and the Greek Muse of History. It is the official logo of the <a href="http://www.bcmh.org.uk/index.php">BCMH</a>.</p>

</div>

<!-- final box -->
<div  class="footerbox">
<img src="http://bjmh.xd5.be/public/journals/1/homeHeaderLogoImage_en_US.jpg" width="120" height="132" alt="Logo" />

</div>
<div style="clear: both;">&nbsp;</div>


</div><!-- end of bjmhfooter -->



</body>
</html>
