# SI Layout - Auto-generated Responsive CSS Grid System (and more!)
Developed by Mike Spooner (thetuningspoon) for Solution Innovators

A collection of CSS classes which can be applied to layout elements in the html to automatically size and float them into widths based on an imaginary 12-column (or any number column) grid. Speeds development, reduces code, and keeps visual alignment/spacing consistent.


## CSS Classes

**grid** - Parent class used to define a new grid block. Grids may be nested within grids as long as they are defined with a new grid element.

**gGrid** - "Gutter grid". Use in place of the grid class when you would like gutters (margins) between your grid columns.

**span#** - Add this class to a child of the grid element to set its width in terms of how many columns it spans (i.e. for a 12-column grid (gridSize=12), span6 will cause the element to span half the width of the grid). If you would like a group of elements to span the entire width of the page or containing element, their widths must add up to the gridSize. Span elements must not have additional padding or margins applied.

**span#_#px** - The CSS breakpoint (viewport max-width) that the above mentioned column width (span) should be applied at. Append a breakpoint to a span class using an underscore (i.e. span12_400px). The "_" can be read as an "at". A span with no breakpoint value appended will apply at all breakpoints. Changes applied at any given breakpoint will apply to it and all viewport widths below it unless overridden by a smaller breakpoint.

**prepend#** - (i.e. prepend2) Will add a margin equal to the specified number of columns to the left of the element the class is applied to.

**prepend#_#px** - (i.e. prepend2_320px) Will add the additional margin at the specified breakpoint.

**append#** - (i.e. append2) Will add a margin equal to the specified number of columns to the right of the element specified.

**append#_#px** - (i.e. append2_320px) Will add the additional margin at the specified breakpoint.

**spanHalf** / **spanThird** / **spanFourth** / **spanFifth** - These classes may be used to achieve a certain width, regardless of the current grid/column settings.  As with the span classes, these can be used in combination with breakpoints to alter the width of an element at a certain viewport width and below (i.e. spanHalf_600px).

**hide** - Hides the element. As with span, it can be used in combination with breakpoints to hide an element at a certain viewport width and below (i.e. hide_600px). Feel free to use this class (and the corresponding show class) for elements outside of grid elements as well.

**show** - Sets the element to display again at a given breakpoint (i.e. show_400px).

**group** - Additional "clearfix" class for use on non-grid elements (grids are automatically cleared)

**left** / **right** - Helper classes to adjust the float value for a column or other element (default float for a column is left). These classes can also be used with breakpoints to reorder/adjust the position of an element at a certain viewport width and below (i.e. right_600px left_320px)

**center** - Applies margin:auto to the left and right side of an element to achieve a centering effect.

**contentLeft** / **contentRight** / **contentCenter** - Helper classes to position the inline content of an element (i.e. text and any element display:inline or display:inline-block). May also be used with breakpoints to change the position of elements at a certain viewport width and below (i.e. contentLeft_600px contentCenter_320px).

## Config Variables

To customize the grid, the following variables may be passed through the query string when linking to this php file

**gridSize** - The number of columns (divisions) in the grid. Default value: 12

**gutterWidth** - Size of gutter (margin) between columns (percentage). Default value: 4

**breakpoints** - List of breakpoints. May be specified in px or em. Separate multiple breakpoints with pipes (|). The order of breakpoints does not matter. Default value: Null (none)

**prefix** - An optional prefix that will be added to all classes generated, to help avoid naming collisions with other existing classes in your project.

**mode** - If set to 1, responsive media queries will be "mobile-first", meaning that breakpoints will apply when the screen width is equal to or greater than the specified width. By default, the mode is set to 0, or "desktop-first", where breakpoints apply when the screen width is equal to or or less than the specified width.

## Instructions

The si-layout.php file should be linked in the <head> section before your site's main stylesheet(s), like so, with the config variables passed through the query string:

```html
<link rel="stylesheet" type="text/css" href="si-layout.php?gridSize=12&gutterWidth=4&breakpoints=1000px|800px|400px" />
```

## Example usage


```html
<div class="grid">
	<div class="span6 span12_400px"> This content will appear 50% width at full screen and full width at a viewport width of less than 400px. </div>
	<div class="span6 span12_400px"> This content will appear 50% width at full screen and full width at a viewport width of less than 400px. </div>
</div>
```
