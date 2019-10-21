<?php
/*
 * ===================================================================
 * Function:	create_navbar()
 * Purpose:		function to create navbars
 * Author:		Mark Fletcher
 * Date:			30.06.2019
 * 
 * Input:			
 * 	$navbarData	- a selected data array
 * 	$separator	- e.g. '|', ' ', ':'
 * 
 * Output:		
 * 	Returns $newNavbar - a fully constructed fully functional 
 *	navigation bar string
 * 
 * Notes:
 *
 * ==================================================================
*/
function create_navbar($navbarData, $separator, $tag) {
	// dispaly navbar
	$counter = 1;
	$newNavbar ='';
  foreach($navbarData as $link => $linkData) {
  	$newNavbar .= '<div class="navData">'.PHP_EOL;
		if ($counter != count($navbarData)) {
      if ($linkData[1] == 'yes') {
        $newNavbar .= '<a onclick="showPopup(\''.$counter.'\')">'.$link.$tag.'</a>'.$separator.PHP_EOL;
        $newNavbar .= '<div id="popUpMenu'.$counter.'" class="popUpMenu" onclick="hidePopup(\''.$counter.'\')" onmouseleave="hidePopup(\''.$counter.'\')"">'.PHP_EOL;
        $newNavbar .= create_popupMenu($linkData['menu']);
        $newNavbar .= '</div><!-- end #popUpMenu'.$counter.' -->'.PHP_EOL;
			} else {
    		$newNavbar .= '<a href="'.$linkData[0].'" title="'.strtolower($link).' page">'.$link.'</a>'.$separator.PHP_EOL;
			}
    $counter++;
		} else {
    	if ($linkData[1] == 'yes') {
        $newNavbar .= '<a onclick="showPopup(\''.$counter.'\')">'.$link.$tag.'</a>'.$separator.PHP_EOL;
        $newNavbar .= '<div id="popUpMenu'.$counter.'" class="popUpMenu" onclick="hidePopup(\''.$counter.'\')" onmouseleave="hidePopup(\''.$counter.'\')">'.PHP_EOL;
        $newNavbar .= create_popupMenu($linkData['menu']);
        $newNavbar .= '</div><!-- end #popUpMenu'.$counter.' -->'.PHP_EOL;
			} else {
    		$newNavbar .= '<a href="'.$linkData[0].'" title="'.strtolower($link).' page">'.$link.'</a>'.PHP_EOL;
			}
		}
   $newNavbar .= '</div><!-- end #navData -->'.PHP_EOL; 
	}
	return $newNavbar; 
}

/*
 * ===================================================================
 * Function	: create_popupMenu()
 * Purpose	: function to create popup menu
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 * 
 * Input :			
 * $popUpMenu	- a selected data array
 * 
 * Output :		
 * 	Returns $newMenu - a fully constructed navigation menu string
 * 
 * Notes :
 *
 * ==================================================================
*/
function create_popupMenu($popUpMenu) {
	// dispaly menu
    $counter = 1;
    $newMenu = '';
    foreach($popUpMenu as $link => $url) {
        if ($counter != count($popUpMenu)) {
    			$newMenu .= '<a href="'.$url[0].'" title="'.strtolower($link).' page">'.strtoupper($link).'</a><br />'.PHP_EOL;
    			$counter++;
        } else {
    			$newMenu .= '<a href="'.$url[0].'" title="'.strtolower($link).' page">'.strtoupper($link).'</a>'.PHP_EOL;
        }
    }
	return $newMenu;
}

/*
 * ===================================================================
 * Function	: dispaly_portfolio()
 * Purpose	: function to display portfolio images and links
 * Author	: Mark Fletcher
 * Date		: 30.06.2019
 * 
 * Input :			
 * $items	- a selected data array of portfolio items
 * 
 * Output :		
 * 	Displays - a fully constructed fully functional 
 *	portfolio lyout with apropriate links
 * 
 * Notes :
 *
 * ==================================================================
*/
function display_portfolio($items) {
	foreach ($items as $item => $itemData) {
  	echo '<div class="galleryImg">'.PHP_EOL;
    echo '<a href="'.$itemData[1].'">'.PHP_EOL;
    echo '<img src="images/portfolio/'.$itemData[0].'" alt="'.$item.' page link">'.PHP_EOL;
    echo '</a>'.PHP_EOL;
    echo '<p class="galleryTxt">'.strtoupper($item).'</p>'.PHP_EOL;
    echo '</div>'.PHP_EOL;
  }
} 

/*
 * ===================================================================
 * Function	: display_about_me_data()
 * Purpose	: function to display about me data
 * Author	: Mark Fletcher
 * Date		: 30.06.2019
 * 
 * Input :	
 * $profiles	- a selected data array of about me profiles
 * 
 * Output :		
 * 	Displays - a fully constructed about me profile or profiles
 * 
 * Notes :
 *
 * ==================================================================
*/
function display_about_me_data($profiles) {
	foreach ($profiles as $profile => $profileData) {
    echo '<img class="aboutPhoto" src="images/profiles/'.$profileData[0].'" alt="'.$profile.'">'.PHP_EOL;
    echo '<p class="aboutTxt">'.$profileData[1].'</p>'.PHP_EOL;
    echo '<div class="social">'.PHP_EOL;
    foreach ($profileData['social'] as $social => $data) {
    	echo '<a href="'.$data[1].'" title="'.strtolower($data[0]).' page" target="_blank"><img class="socialImg" src="images/social/'.$data[0].'_icon.png" alt="'.$data[0].' page"></a>'.PHP_EOL;
    }
    echo '</div><!-- end of .social -->'.PHP_EOL;
  }
}
?>

