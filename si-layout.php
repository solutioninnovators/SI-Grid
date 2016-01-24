<?php
header("Content-type: text/css; charset: UTF-8");
header('Cache-Control: max-age=86400'); //Enable caching of the file

/* 
/////////////////////////////////////////////////////////////////
SI Layout - Auto-generated Responsive CSS Grid System (and more!)
Developed by Mike Spooner for Solution Innovators
See README for more information
/////////////////////////////////////////////////////////////////
*/

// Declare variables, validate, and set their default values
$gridSize = isset($_GET['gridSize']) && preg_match('/^\d{1,2}$/', $_GET['gridSize']) && $_GET['gridSize'] >= 2 ? $_GET['gridSize'] : 12;
$gutterWidth = isset($_GET['gutterWidth']) && is_numeric($_GET['gutterWidth']) && strlen($_GET['gutterWidth']) <= 99 ? $_GET['gutterWidth'] : 4;
$breakpoints = isset($_GET['breakpoints']) && preg_match('/^\d{1,4}(?:px|em)(?:\|\d{1,4}(?:px|em))*$/', $_GET['breakpoints']) ? $_GET['breakpoints'] : null;


// Create an array from the breakpoint string
$breakpointArray = is_null ($breakpoints) ? array() : explode('|', $breakpoints);

// Sort array numerically in reverse order so that our responsive css rules cascade properly
rsort($breakpointArray, SORT_NUMERIC);

?>

/* Clearfix */
.grid:after,
.gGrid:after,
.container:after,
.group:after { 
	content: ""; 
	display: block; 
	height: 0; 
	clear: both;
  visibility: hidden;
}

.nobr {
	white-space: nowrap;
}

img {
	max-width: 100%;
	height: auto;
	border: 0;
}

.grid, .gGrid {
	display: block;
	zoom: 1; /* IE7 */
	padding: 0;
}
.gGrid { 
	margin-left: -<?= $gutterWidth ?>%; /* Remove leftmost gutter */
}

.grid > *, .gGrid > * {
	display: block;
	float: left;
	margin: 0;
	padding: 0;
	zoom: 1;
	width: 100%; /* Set default width to span 12 columns */
}
.gGrid > * {
	margin-left: <?= $gutterWidth ?>%; /* Gutter width */
	width: <?= 100 - $gutterWidth ?>%;
}

<?
// Set our default grid without breakpoints
for($colSpan=1; $colSpan<=$gridSize; $colSpan++) {
?>
	.span<?= $colSpan ?> {width: <?= ($colSpan/$gridSize) * 100 ?>%;}
	.gGrid > .span<?= $colSpan ?> {width: <?= ($colSpan/$gridSize) * 100 - $gutterWidth ?>%;}
	
	.append<?= $colSpan ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
	.gGrid > .append<?= $colSpan ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
	
	.prepend<?= $colSpan ?> {margin-left: <?= ($colSpan/$gridSize) * 100 ?>%;}
	.gGrid > .prepend<?= $colSpan ?> {margin-left: <?= ($colSpan/$gridSize) * 100 + $gutterWidth ?>%;}
<?
}
?>

.spanHalf {width: <?= (1/2) * 100 ?>%;}
.gGrid > .spanHalf {width: <?= (1/2) * 100 - $gutterWidth ?>%;}
.spanThird {width: <?= (1/3) * 100 ?>%;}
.gGrid > .spanThird {width: <?= (1/3) * 100 - $gutterWidth ?>%;}
.spanFourth {width: <?= (1/4) * 100 ?>%;}
.gGrid > .spanFourth {width: <?= (1/4) * 100 - $gutterWidth ?>%;}
.spanFifth {width: <?= (1/5) * 100 ?>%;}
.gGrid > .spanFifth {width: <?= (1/5) * 100 - $gutterWidth ?>%;}

body .hide {display: none;}
body .show {display: block;}

body .left {float:left;}
body .right {float:right;}
body .center {margin-left: auto; margin-right: auto;}

body .contentLeft {text-align:left;}
body .contentRight {text-align:right;}
body .contentCenter {text-align:center;}

<?
// Add classes for each breakpoint
foreach($breakpointArray as $breakpoint) { 
?>
	@media screen and (max-width:<?= $breakpoint ?>) {
		<?
		for($colSpan=1; $colSpan<=$gridSize; $colSpan++) {
		?>
			.span<?= $colSpan ?>_<?= $breakpoint ?> {width: <?= ($colSpan/$gridSize) * 100 ?>%;}
			.gGrid .span<?= $colSpan ?>_<?= $breakpoint ?> {width: <?= ($colSpan/$gridSize) * 100 - $gutterWidth ?>%;}
			
			.append<?= $colSpan ?>_<?= $breakpoint ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
			.gGrid > .append<?= $colSpan ?> {margin-right: <?= ($colSpan/$gridSize) * 100 ?>%;}
			
			.prepend<?= $colSpan ?>_<?= $breakpoint ?> {margin-left: <?= ($colSpan/$gridSize) * 100 ?>%;}
			.gGrid > .prepend<?= $colSpan ?> {margin-left: <?= ($colSpan/$gridSize) * 100 + $gutterWidth ?>%;}
		<?
		}
		?>
		
		.spanHalf_<?= $breakpoint ?> {width: <?= (1/2) * 100 ?>%;}
		.gGrid > .spanHalf_<?= $breakpoint ?> {width: <?= (1/2) * 100 - $gutterWidth ?>%;}
		.spanThird_<?= $breakpoint ?> {width: <?= (1/3) * 100 ?>%;}
		.gGrid > .spanThird_<?= $breakpoint ?> {width: <?= (1/3) * 100 - $gutterWidth ?>%;}
		.spanFourth_<?= $breakpoint ?> {width: <?= (1/4) * 100 ?>%;}
		.gGrid > .spanFourth_<?= $breakpoint ?> {width: <?= (1/4) * 100 - $gutterWidth ?>%;}
		.spanFifth_<?= $breakpoint ?> {width: <?= (1/5) * 100 ?>%;}
		.gGrid > .spanFifth_<?= $breakpoint ?> {width: <?= (1/5) * 100 - $gutterWidth ?>%;}
		
		body .hide_<?= $breakpoint ?> {display: none;}
		body .show_<?= $breakpoint ?> {display: block;}
		
		body .left_<?= $breakpoint ?> {float:left;}
		body .right_<?= $breakpoint ?> {float:right;}
		body .center_<?= $breakpoint ?> {margin-left: auto; margin-right: auto;}
		
		body .contentLeft_<?= $breakpoint ?> {text-align:left;}
		body .contentRight_<?= $breakpoint ?> {text-align:right;}
		body .contentCenter_<?= $breakpoint ?> {text-align:center;}
	}
<?
} 
?>