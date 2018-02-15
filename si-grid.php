<?php
header("Content-type: text/css; charset: UTF-8");
header('Cache-Control: max-age=86400'); //Enable caching of the file

/* 
/////////////////////////////////////////////////////////////////
SI Grid - Auto-generated Responsive CSS Grid System (and more!)
Developed by Mike Spooner for Solution Innovators
v1.3
See README for more information
/////////////////////////////////////////////////////////////////
*/

// Declare variables, validate, and set their default values
$gridSize = isset($_GET['gridSize']) && preg_match('/^\d{1,2}$/', $_GET['gridSize']) && $_GET['gridSize'] >= 2 ? $_GET['gridSize'] : 12;
$gutterWidth = isset($_GET['gutterWidth']) && is_numeric($_GET['gutterWidth']) && strlen($_GET['gutterWidth']) <= 99 ? $_GET['gutterWidth'] : 4;
$breakpoints = isset($_GET['breakpoints']) && preg_match('/^\d{1,4}(?:px|em)(?:\|\d{1,4}(?:px|em))*$/', $_GET['breakpoints']) ? $_GET['breakpoints'] : null;
$prefix = isset($_GET['prefix']) && strlen($_GET['prefix']) < 50 && preg_match('/^[_a-zA-Z0-9-]{1,}$/', $_GET['prefix']) ? $_GET['prefix'] : '';
$mode = isset($_GET['mode']) && is_numeric($_GET['mode']) ? $_GET['mode'] : 0;


// Create an array from the breakpoint string
$breakpointArray = is_null ($breakpoints) ? array() : explode('|', $breakpoints);

// Sort array numerically in reverse order so that our responsive css rules cascade properly
rsort($breakpointArray, SORT_NUMERIC);
if($mode == 1) $breakpointArray = array_reverse($breakpointArray); // Reverse order for mobile-first mode

?>

/* Clearfix */
.<?= $prefix ?>grid:after,
.<?= $prefix ?>gGrid:after,
.<?= $prefix ?>container:after,
.<?= $prefix ?>group:after { 
	content: ""; 
	display: block; 
	height: 0; 
	clear: both;
  visibility: hidden;
}

.<?= $prefix ?>nobr {
	white-space: nowrap;
}

img, object, embed {
	max-width: 100%;
	height: auto;
	vertical-align: middle;
	border: 0;
}

.<?= $prefix ?>grid, .<?= $prefix ?>gGrid {
	display: block;
	zoom: 1; /* IE7 */
	padding: 0;
}
.<?= $prefix ?>gGrid { 
	margin-left: -<?= $gutterWidth ?>%; /* Remove leftmost gutter */
}

.<?= $prefix ?>grid > *, .<?= $prefix ?>gGrid > * {
	display: block;
	float: left;
	margin: 0;
	padding: 0;
	zoom: 1;
	width: 100%; /* Set default width to span 12 columns */
}
.<?= $prefix ?>gGrid > * {
	margin-left: <?= $gutterWidth ?>%; /* Gutter width */
	width: <?= 100 - $gutterWidth ?>%;
}

<?
// Set our default grid without breakpoints
for($colSpan=1; $colSpan<=$gridSize; $colSpan++) {
?>
	.<?= $prefix ?>span<?= $colSpan ?> {width: <?= ($colSpan/$gridSize) * 100 ?>%;}
	.<?= $prefix ?>gGrid > .<?= $prefix ?>span<?= $colSpan ?> {width: <?= ($colSpan/$gridSize) * 100 - $gutterWidth ?>%;}
	
	.<?= $prefix ?>append<?= $colSpan ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
	.<?= $prefix ?>gGrid > .<?= $prefix ?>append<?= $colSpan ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
	
	.<?= $prefix ?>prepend<?= $colSpan ?> {margin-left: <?= ($colSpan/$gridSize) * 100 ?>%;}
	.<?= $prefix ?>gGrid > .<?= $prefix ?>prepend<?= $colSpan ?> {margin-left: <?= ($colSpan/$gridSize) * 100 + $gutterWidth ?>%;}
<?
}
?>

.<?= $prefix ?>spanHalf {width: <?= (1/2) * 100 ?>%;}
.<?= $prefix ?>gGrid > .<?= $prefix ?>spanHalf {width: <?= (1/2) * 100 - $gutterWidth ?>%;}
.<?= $prefix ?>spanThird {width: <?= (1/3) * 100 ?>%;}
.<?= $prefix ?>gGrid > .<?= $prefix ?>spanThird {width: <?= (1/3) * 100 - $gutterWidth ?>%;}
.<?= $prefix ?>spanFourth {width: <?= (1/4) * 100 ?>%;}
.<?= $prefix ?>gGrid > .<?= $prefix ?>spanFourth {width: <?= (1/4) * 100 - $gutterWidth ?>%;}
.<?= $prefix ?>spanFifth {width: <?= (1/5) * 100 ?>%;}
.<?= $prefix ?>gGrid > .<?= $prefix ?>spanFifth {width: <?= (1/5) * 100 - $gutterWidth ?>%;}

body .<?= $prefix ?>hide {display: none;}
body .<?= $prefix ?>show {display: block;}

body .<?= $prefix ?>left {float:left;}
body .<?= $prefix ?>right {float:right;}
body .<?= $prefix ?>center {margin-left: auto; margin-right: auto;}

body .<?= $prefix ?>contentLeft {text-align:left;}
body .<?= $prefix ?>contentRight {text-align:right;}
body .<?= $prefix ?>contentCenter {text-align:center;}

<?
// Add classes for each breakpoint
foreach($breakpointArray as $breakpoint) { 
?>
	@media (<?= $mode == 1 ? 'min-width' : 'max-width' ?>:<?= $breakpoint ?>) {
		<?
		for($colSpan=1; $colSpan<=$gridSize; $colSpan++) {
		?>
			.<?= $prefix ?>span<?= $colSpan ?>_<?= $breakpoint ?> {width: <?= ($colSpan/$gridSize) * 100 ?>%;}
			.<?= $prefix ?>gGrid > .<?= $prefix ?>span<?= $colSpan ?>_<?= $breakpoint ?> {width: <?= ($colSpan/$gridSize) * 100 - $gutterWidth ?>%;}
			
			.<?= $prefix ?>append<?= $colSpan ?>_<?= $breakpoint ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
			.<?= $prefix ?>gGrid > .<?= $prefix ?>append<?= $colSpan ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
			
			.<?= $prefix ?>prepend<?= $colSpan ?>_<?= $breakpoint ?> {margin-left: <?= ($colSpan/$gridSize) * 100 ?>%;}
			.<?= $prefix ?>gGrid > .<?= $prefix ?>prepend<?= $colSpan ?> {margin-left: <?= ($colSpan/$gridSize) * 100 + $gutterWidth ?>%;}
		<?
		}
		?>
		
		.<?= $prefix ?>spanHalf_<?= $breakpoint ?> {width: <?= (1/2) * 100 ?>%;}
		.<?= $prefix ?>gGrid > .<?= $prefix ?>spanHalf_<?= $breakpoint ?> {width: <?= (1/2) * 100 - $gutterWidth ?>%;}
		.<?= $prefix ?>spanThird_<?= $breakpoint ?> {width: <?= (1/3) * 100 ?>%;}
		.<?= $prefix ?>gGrid > .<?= $prefix ?>spanThird_<?= $breakpoint ?> {width: <?= (1/3) * 100 - $gutterWidth ?>%;}
		.<?= $prefix ?>spanFourth_<?= $breakpoint ?> {width: <?= (1/4) * 100 ?>%;}
		.<?= $prefix ?>gGrid > .<?= $prefix ?>spanFourth_<?= $breakpoint ?> {width: <?= (1/4) * 100 - $gutterWidth ?>%;}
		.<?= $prefix ?>spanFifth_<?= $breakpoint ?> {width: <?= (1/5) * 100 ?>%;}
		.<?= $prefix ?>gGrid > .<?= $prefix ?>spanFifth_<?= $breakpoint ?> {width: <?= (1/5) * 100 - $gutterWidth ?>%;}
		
		body .<?= $prefix ?>hide_<?= $breakpoint ?> {display: none;}
		body .<?= $prefix ?>show_<?= $breakpoint ?> {display: block;}
		
		body .<?= $prefix ?>left_<?= $breakpoint ?> {float:left;}
		body .<?= $prefix ?>right_<?= $breakpoint ?> {float:right;}
		body .<?= $prefix ?>center_<?= $breakpoint ?> {margin-left: auto; margin-right: auto;}
		
		body .<?= $prefix ?>contentLeft_<?= $breakpoint ?> {text-align:left;}
		body .<?= $prefix ?>contentRight_<?= $breakpoint ?> {text-align:right;}
		body .<?= $prefix ?>contentCenter_<?= $breakpoint ?> {text-align:center;}
	}
<?
} 
?>