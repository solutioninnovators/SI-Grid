# SI Layout - Auto-generated Responsive CSS Grid System (and more!)
Developed by Mike Spooner for Solution Innovators

A collection of CSS classes which can be applied to layout elements in the html to automatically size and float them into widths based on an imaginary 12-column (or any number column) grid. Speeds development, reduces code, and keeps visual alignment/spacing consistent.


## CSS Classes

grid - Parent class used to define a new grid block. Grids may be nested within grids as long as they are defined with a new grid element.

gGrid - "Gutter grid". Use in place of the grid class when you would like gutters (margins) between your grid columns.

span# - Add this class to a child of the grid element to set its width in terms of how many columns it spans (i.e. for a 12-column grid (gridSize=12), span6 will cause the element to span half the width of the grid). If you would like a group of elements to span the entire width of the page or containing element, their widths must add up to the gridSize. Span elements must not have additional padding or margins applied.

span#_#px - The CSS breakpoint (viewport max-width) that the above mentioned column width (span) should be applied at. Append a breakpoint to a span class using an underscore (i.e. span12_400px). A span with no breakpoint value appended will apply at all breakpoints. Changes applied at any given breakpoint will apply to it and all viewport widths below it unless overridden by a smaller breakpoint.

hide - Hides the element. As with span, it can be used in combination with breakpoints to hide an element at a certain viewport width and below (i.e. hide_600px). Feel free to use this class (and the corresponding show class) for elements outside of grid elements as well.

show - Sets the element to display again at a given breakpoint (i.e. show_400px).

group - Additional "clearfix" class for use on non-grid elements (grids are automatically cleared)


## Config Variables

To customize the grid, the following variables may be passed through the query string when linking to this php file

gridSize - The number of columns (divisions) in the grid. Default value: 12

gutterWidth - Size of gutter (margin) between columns (percentage). Default value: 4

breakpoints - List of breakpoints. May be specified in px or em. Separate multiple breakpoints with pipes (|). Default value: Null (none)


## Instructions

The si-layout.php file should be linked in the <head> section before your site's main stylesheet(s), like so, with the config variables passed through the query string:

<link rel="stylesheet" type="text/css" href="si-layout.php?gridSize=12&gutterWidth=4&breakpoints=1000px|800px|400px" />


## Example usage

<div class="grid">
	<div class="span6 span12_400px"> This content will appear 50% width at full screen & full width at a viewport width of less than 400px. </div>
	<div class="span6 span12_400px"> This content will appear 50% width at full screen & full width at a viewport width of less than 400px. </div>
</div>