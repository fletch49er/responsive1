/*
 * ===================================================================
 * Script:	showPopup() & hidePopup()
 * Purpose:	function to display and hide popup navigation menu
 * Author:	Mark Fletcher
 * Date:		19.04.2019
 * 
 * Input:
 *	$num - php function create_navbar() counter value		
 * 
 * Output:		
 * 	Dynamically changes the display style
 *	show = block, hide = none
 * 
 * Notes:
 *
 * ==================================================================
*/
//showPopup function
function  showPopup($num) {
	document.getElementById('popUpMenu'+$num).style.display='block';
  document.getElementById('popup').style.color='orange';
}
	
//hidePopup function
function hidePopup($num) {
	document.getElementById('popUpMenu'+$num).style.display='none';
  document.getElementById('popup').style.color='#353535';
}
