
# Php with Mikiko

## Week 1

### Lesson 1

#### Start server

`cd path/to/your/project`

`php -S localhost:4000`


#### In atom

`html` will give a skeleton

### Lesson 2

`<?php	{php code goes here} ?>`

`php echo()` is like `print()` or similar

- php needs semi-colons at the end of every line
- php doesn't need parentheses
- php can take html in its arguments
  - e.g. `echo("<h1> HI </h1>")`
- php goes in order of lines written
- use single or double quotes, but stay consistent
	- can use single quotes for css inside the double quotes for php


#### During HW

- style.css needs to be in same folder as site.php
- ctrl + C to stop the server

## Week 2

### Lesson 3: Variables

- `${varname} = {value};`
- `$character_name = "John"`
	- characters need quotes, numbers don't

- syntax highlighting in Atom only works with double quotes


#### During HW

- any arbitrary amount of css etc can go in variables and called in <style>
- variables can use variables in their definitions
	- they do not dynamically change
		- no auto-update, purely linear
		- have to redefine to make the changes
- semi-colons inside the double quotes for css are read as css.
- **don't forget the single quotes for css `<span style = 'color: $colour'> SOMETHING </span>`**
- semi-colons are needed at the end of every line which has something after it
- `<wbr>` is zero-width whitespace (for mixing japanese text with variables - seems a pain)


## Data Types

- strings take quotes
- integers take no special notation - just the number
- floats take no special notation - just use the decimal point
- booleans are lower-case
- null is lower-case
- data types are used everywhere, not just n variables

#### Lesson 4: Strings
- `strtolower(string)`
- `strtoupper(string)`
- `strlen(string)`
- `str_replace(pattern, replacement, string)`
- `substr(string, starting_index, how_many)`

- `echo function() function() function()`
	- e.g `echo strlen("hello")+ strlen("world")`

- `"Thing"[index goes here]`
- `"Thing"[0]`  becomes "T"


##### Combining function output with other stuff

- use a comma to separate outputs `,`
- you can use operators

#### During HW

- arguments to functions can be other evaluated functions: `str_pad($var, strlen($var)+1), " ")`
	- see *lesson_4_hw* lines **53:69** for example


### Lesson 5: Numbers

- `%` is mod
- `$var += 53` is `$var = $var + 53`
- `$var *= 23` is `$var = $var * 23`
- `$var++` is `$var = $var + 1`
- `$var--` is `$var = $var - 1`
- `sqrt()`
- `max(x, y)`
- `min(x, y)`
- `round(54.444)`
- `ceil(x)` = round up
- `floor(x)` = round down
- `pow(x, y)` = x to the power of y
- `abs()`


#### During HW

- `<sup>`  is superscript tag
- `<i>` is italic
- `<b>` is bold
- in variables, `if_else` is `(test)? true : false;`
- `strlen()`, **NOT** `nchar()`
- pi is a function: `pi()`
- `&#960` is pi &#960

### Lesson 6: Get User Input

- use HTML forms
- multiple inputs are fine, but `"submit"` will resubmit EVERYTHING
- `<form> Write something: <input type="text" name="something"> <\input type="submit"> <\form>`
- access input with `$_GET["name parameter"]` in php

- using parameters in the form adds to the url - you can write the things directly there if you want
- you can assign `$_GET["parameter"]` to php variables no worries

- you need `<label> some label </label>` when using select-y inputs
	- see (`./lesson_6_hw/button_test.html`)


### Lesson 7: Basic Calculator

- html form
- `$_GET["thing_a"] + $_GET["thing_b"]`
- password input hides input in page, **but not in url**


#### During HW

- you have kinda forgotten how to write basic css

```
switch($on_this_variable){

case: x;

echo "Something"

break;

case: y;

echo "Something else";

break;
}
```

- html form radio buttons

```
<input type="radio" id="plus" name="operator" value="plus">
<label for="plus">plus</label><br>
<input type="radio" id="minus" name="operator" value="minus">
<label for="minus">minus</label><br>
```
**Note: switch/case does [loose comparison](https://www.php.net/manual/en/types.comparisons.php#types.comparisions-loose).**


### Lesson 8: Madlibs

- oof, it has been a while

#### During HW

- search-boxes use `type="hidden"` a fair bit
- `class` can go inside html forms
- yep, today was easy
- used `<details>` as a hack for not showing the result
	- https://www.w3schools.com/php/php_form_required.asp shows a proper way to do it
	- apparently we'll come back to this later, so that'll do for now

### Lesson 9: URL Parameters

- url parameters store any arbitrary information for a website _in_ the url
	- allows for bookmarking etc
	- is not secure at all if you use `$_GET["thing"]` or `form method = "get"`
	- `"post"` is the more secure one - that is the next lesson

- `method = "post"` and `$_POST["thing"]` do _not_ show in the url
- there are other differences, but that is the main thing for now



### Lesson 10: Arrays

- variables are for single values
- arrays are for multiple values
- make with `$var = array("thing1", "thing2")`
- `echo $var` just returns `Array`
- arrays don't care about types
- individual elements can be mutated with regular assignment (`$var[1] = "Sam"`)
- arrays can be appended without worrying about adding just to the end
	- `$var[10] = "Jo"` will work even without the rest the array being assigned
	- `count($var)` will count how many assigned elements there are
	- calling an unassigned element returns nothing _silently_
	- `$var[1][1]` indexes the index (works like you expect)

#### During HW

- radio buttons worked as expected if there was a `submit` button


### 2021-08-22

- using checkboxes with arrays
	- `<input> type="checkbox" name = "thing[]"`
	- square brackets for storing multiple pieces of information
	- without the square brackets, the last selected checkbox is treated as an array, and you will select letters from the character array that is the value
	- e.g. `name = "fruits"` with `lemon` and `banana` selected:
		- `echo $fruits[0]` shows `b` as the first element in the array `[b,a,n,a,n,a]`
	- `name = "fruits[]"` with `lemon` and `banana` selected:
		- `echo $fruits[0]` shows `lemon` as the first element in the array `["lemon", "banana"]`

### 2021-09-05

__Associative Arrays__

- key-value pairs a-la JSON
- assign with `array("key" => "value")`
- when `key => value` is used, indexing is nullified
	- key-value pairs just sit somewhere in the container, not in a specific place
	- `$variable["key"] = "value"` also seems to work just fine

```
echo "test1: ", array("value")[0], "<br>";
echo "test2: ", array("key" =>"value")[0];
```

only test1 prints "value"


#### HW

Not at all clear on how to take HTML input and use it to filter/subset the array.

Going to have to look further into it, but no time today.
