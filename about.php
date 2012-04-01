<?php
	include('globals/globals.php');

	$metaDescription = "Lisa Newton specializes in accounting and tax preparation for a wide variety of clients. She specializes in: Tax return filing and tax planning for individuals, Audit representation, Bookkeeping and financial statements for small businesses";
	$metaKeywords = "finance, finances, orange county, california, la habra, taxes, tax, business, services, bookkeeping, professional, enrolled agent, preparer, accounting, financial, irs representation";
	$pageId = "About";
	
	include(INCLUDE_PATH."/globals/head.php");
	include(INCLUDE_PATH."/globals/masthead.php");
	include(INCLUDE_PATH."/globals/breadcrumb.php");
?>

<!-- column1 : start -->
<div class="main">

    <h1><?=$pageTitle ?></h1>
    
    <img src="/ui/images/lisa.jpg" alt="Lisa Newton, EA" class="lisa" />
    
	<p>Lisa Newton specializes in accounting and tax preparation for a wide variety of clients. She specializes in:</p>
	
    	<ul>
    	    <li>Tax return filing and tax planning for individuals</li>
    	    <li>Audit representation</li>
    	    <li>Bookkeeping and financial statements for small businesses</li>
    	    <li>After-the-fact payroll, payroll reports and sales tax reports</li>
    	    <li>Business tax return filings - Partnerships, Corporations or S-Corporations</li>
    	</ul>
	
	<a href="http://proadvisor.intuit.com/content/program/index.jsp" class="qb"><img src="/ui/images/qb.gif" alt="QuickBooks Pro Advisor" /></a>

    <p>Annual participation in Continuing Professional Education courses offered by IRS, California Franchise Tax Board, California Society of Enrolled Agents, the National Association of Enrolled Agents, and the National Tax Education Institute keeps her on the "leading edge" of ever-changing tax laws and accounting methods. Computerized offices and internet access ensures clients accurate, efficient, state-of-the-art service at a competitive price.</p>

    <p>Lisa Newton is an active member of the <a href="http://www.naea.org/">National Association of Enrolled Agents</a>, the <a href="http://www.csea.org/">California Society of Enrolled Agents</a>, the <a href="http://www.eaoc.org/">Orange County Chapter of Enrolled Agents</a>, and the <a
    href="http://www.breachamber.com/">Brea Chamber of Commerce</a>.</p>

</div>
<!-- column1 : end -->

<?php
	include(INCLUDE_PATH."/globals/navigation.php");
	include(INCLUDE_PATH."/globals/footer.php");
?>