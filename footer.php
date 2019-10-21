<?php
/*
 * ========================================================================
 * File:		footer.php
 * Purpose:	Footer template file to be included in index.php
 *						
 * Author:	Mark Fletcher
 * Date:		30.06.2019
 *  
 * Notes: 
 *
 * Revision:
 *		01.07.2019	1st issue.
 *
 * ========================================================================
*/
?>
<div id="footer">
     <div id="ftrNavbar" class="navbar">
    	<?php echo create_navbar($navbar_ftr, ' ', $dropdown_tag); ?>
    </div><!-- end #ftrNavbar -->
    <div id="ftrLogo" class="logo">
    	<img src="images/dbm_graphic.png" alt="designs by mark logo">
    </div><!-- end #ftrLogo -->
    <div id="ftrTagline1">DESIGNS BY MARK</div>
    <div id="ftrTagline2"><?php echo $dateStamp; ?></div>
</div><!-- end #footer -->
</div><!-- end #wrapper -->
</body>
</html>