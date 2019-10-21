<?php 
/*
 * ========================================================================
 * File:		blank_link.php
 * Purpose:	blank link page to allow testing of links during 
 *					webpage construction
 *						
 * Author:	Mark Fletcher
 * Date:		19.04.2019
 *  
 * Notes: 
 *
 * Revision:
 *		22.04.2019	1st issue.
 *
 * ========================================================================
*/
// include header
require_once('header.php');
?>
<div id="content" class="clearfix">
    <div id="blank_link">
    		<p>This is a temporary landing page for this Waracle Test Page.</p>
        <img id="waracle" src="https://waracle.com/wp-content/themes/waracle-twenty-eighteen/src/assets/c-logo.png" alt="Waracle Logo" /><br />
        <p><a href="index.php">Return to Test Page</a></p>
    </div><!-- end #blank_link" -->
</div><!-- end #content -->

<?php require_once('footer.php'); ?>
