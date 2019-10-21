<?php
/*
 * ========================================================================
 * File:		header.php
 * Purpose:	Header template file to be included in index.php
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
// include php data arrays and string varibles
include_once('php/data.php');

// include php functions
include_once('php/php_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Responsive - Test website 1" />
<meta name="location" content="Glasgow,Scotland,UK" />
<meta name="author" content="Mark Fletcher">
<meta name="copyright" content="(c) Mark Fletcher <?php echo date('Y'); ?>" />
<meta name="keywords" content="reponsive" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<title>Responsive | Test Website 1</title>

<!-- include style sheet -->
<link rel="stylesheet" href="css/styles.css">

<!-- include javascript functions -->
<script src="js/scripts.js"></script>

<!-- call HTML5 JavaScript shim for IE (version 8 and below) to recognise and style the HTML5 elements -->
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">
<div id="header">
<div id="hdrNavbar" class="navbar">
	<?php echo create_navbar($navbar_hdr, ' ', $dropdown_tag); ?>
</div><!-- end #hdrNavbar -->

<div id="banner">
<div id="hdrLogo" class="logo">
	<img src="images/dbm_graphic.png" alt="designs by mark logo">
</div><!-- end #hdrLogo -->
<div id="hdrTagline1">DESIGNS BY MARK</div>
<div id="hdrTagline2"><?php echo $dateStamp; ?></div>
</div><!-- end #banner -->
</div><!-- end #header -->
