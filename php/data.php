<?php
/*
 * ========================================================================
 * File:		data.php
 * Purpose:	string variables, data arrays to populate website 
 *					with dynamic content
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
// date stamp
$dateStamp = '&mdash;&nbsp;'.date('Y').'&nbsp;&mdash;';

// dropdown menu tag graphic
$dropdown_tag = '<img src="images/dropdown_tag.png" alt="Tag graphic">';

//temporary text
$temp_text = 'Hi there! This is a small example web page to demonstrate a responsive layout using HTML, CSS, PHP and Javascript. The main content is held in a small data file. This data is pulled in using customised scripts to populate the create the final page that is desired. This allows for a very easily maintained site, where the content can be changes with minimal fuss.';

// data array for header navigation bar
$navbar_hdr = [
	'HOME' => ['#', 'no'],
	'BLOG' => ['#', 'yes', 'menu' => [
  		'blog 1' => ['#'], 
      'blog 2' => ['#'], 
      'blog 3' => ['#']
  	]
  ],
	'PORTFOLIO' => ['#', 'yes', 'menu' => [
  		'object' => ['#'], 
      'spring' => ['#'], 
      'nature' => ['#'], 
      'icons' => ['#'], 
      'architecture' => ['#'], 
      'iphone mockup' => ['#']
  	]
  ],
	'TEMPLATES' => ['#', 'yes',  'menu' => [
  		'template 1' => ['#'], 
      'template 2' => ['#'], 
      'template 3' => ['#'], 
      'template 4' => ['#']
  	]
	]
];

//data array for footer navigation bar
$navbar_ftr = [
	'HOME' => ['#', 'no'],
	'BLOG' => ['#', 'no'],
  'PORTFOLIO' => ['#', 'no'],
	'ABOUT' => ['#', 'no']
];

//data array for portfolio image gallery
$portfolio_items = [
	'object' => ['objects.jpg', '#'],
  'spring' => ['spring.jpg', '#'],
  'nature' => ['nature.jpg', '#'],
  'icons' => ['icons.jpg', '#'],
  'architecture' => ['architecture.jpg', '#'],
  'iphone mockup' => ['iphone.jpg', '#']
];

//data array for social media
$social_media = [
	'1' => ['facebook', '#'],
  '2' => ['twitter', '#'],
  '3' => ['dribble', '#'],
  '4' => ['vimeo', '#']
];

$mf_text = 'Mark is a Web Application Developer and Designer, who can build affordable web related services to your specifications. Services which offer full control over; how your website looks, how it is accessed and utilised, and how it works within your current business plan. Static website design, dynamic and responsive website design, website development, website maintenance, web application development and design, e-commerce development, search engine optimization (SOE), corporate logos and graphics. Whether it is a one page static website or a fully functioning e-commerce application, Mark can assist you in achieving the right solution, without stretching the budget. Mark will deliver what is required to fulfil your needs, whilst giving you a website that has been built on scalability and usability and maintainability. designed for the future, and not just the here and now. Your investment will be well placed.';

//data array for about me data
$about_me = [
	'Mark Fletcher' => ['mf_profile_pic.jpg', $mf_text, 'social' =>[
 		'1' => ['facebook', '#'],
  	'2' => ['twitter', '#'],
  	'3' => ['dribble', '#'],
  	'4' => ['vimeo', '#']
		]
  ]
];


