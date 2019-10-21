<?php 
/*
 * ========================================================================
 * File:		index.php
 * Purpose:	landing page for website
 *						
 * Author:	Mark Fletcher
 * Date:		30.06.2019
 *  
 * Notes:
 *		includes header and footer php template files
 *		see files header.php and footer.php
 *
 * Revision	:
 *		01.07.2019	1st issue.
 *
 * ========================================================================
*/
//include header template
include_once('header.php');
?>

<div id="content" class="clearfix">
    <div id="welcome" class="section">
    	<h1>WELCOME</h1>
        <p>
        	<?php echo $temp_text; ?>
        </p>
    </div><!-- end #welcome -->
    
    <div id="portfolio" class="section">
    	<h1>PORTFOLIO</h1>
        <div id="gallery">
        	<?php display_portfolio($portfolio_items); ?>
        </div><!-- end #gallery -->
    </div><!-- end #portfolio -->
    
		<div id="aboutMe">
    	<h2>ABOUT ME</h2>
    	<?php display_about_me_data($about_me); ?>
    </div><!-- end #aboutMe -->
</div><!-- end #content -->

<?php
//include footer template
include_once('footer.php');
?>
