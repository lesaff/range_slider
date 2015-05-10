# HTML5 Range Slider fieldtype Add-on for Statamic
By Rudy Affandi (2015)
Version 1.0.0

## What is this?
`range_slider` is used for input fields that should contain a value within a range. Depending on browser support, the input field can be displayed as a slider control.

## Changelog
1.0.0 - Initial release

## Installation
Copy the 'range_slider' folder to the '_add-ons' folder in your Statamic website.

## How to use

Simply give your field a type of `range_slider`
```
   col_width:
      type: range_slider
         display: Column width (based on grid of 10)
         min: 1
         max: 10
         step: 1
         default_value: 5
```
*Parameters*

- `min`: The expected lower bound for the element’s value.
- `max`: The expected upper bound for the element’s value.
- `step`: Specifies the value granularity of the element’s value.
- `default_value`: Set the default value for your input

*format*

A string representing a number.