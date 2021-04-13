
# Php with Mikiko

## Week 1

### Lesson 1

#### Start server

cd path/to/your/project

php -S localhost:4000


#### In atom

html
Will give a skeleton

### Lesson 2 

<?php
	{php code goes here}
?>php echo()
is like print() or similar

- php needs semi-colons at the end of every line
- php doesn't need parentheses
- php can take html in its arguments
  - e.g. echo("<\h1> HI <\/h1>")
- php goes in order of lines written
- use single or double quotes, but stay consistent
	- can use single quotes for css inside the double quotes for php


#### During HW

- style.css needs to be in same folder as site.php 
- ctrl + C to stop the server

## Week 2

### Lesson 3: Variables

- ${varname} = {value};
- $character_name = "John"
	- characters need quotes, numbers don't

- syntax highlighting in Atom only works with double quotes


#### During HW

- any arbitrary amount of css etc can go in variables and called in <style>
- variables can use variables in their definitions
	- they do not dynamically change 
		- no auto-update, purely linear 
		- have to redefine to make the changes
- semi-colons inside the double quotes for css are read as css.
- **don't forget the single quotes for css <|span style = 'color: $colour'> SOMETHING <|/span>**
- semi-colons are needed at the end of every line which has something after it
- <|wbr> is zero-width whitespace (for mixing japanese text with variables - seems a pain)


## Data Types

- strings take quotes
- integers take no special notation - just the number
- floats take no special notation - just use the decimal point
- booleans are lower-case
- null is lower-case
- data types are used everywhere, not just n variables

#### Lesson 4: Strings
- strtolower(string)
- strtoupper(string)
- strlen(string)
- str_replace(pattern, replacement, string)
- substr(string, starting_index, how_many)

- echo function() function() function() 
	- e.g echo strlen("hello")+ strlen("world")
	
- "Thing"[index goes here]
- "Thing"[0]  becomes "T"

#### During HW

- arguments to functions can be other evaluated functions: str_pad($var, strlen($var)+1), " ")
	- see lesson_4_hw lines 53:69 for example


### Lesson 5: Numbers

- % is mod
- $var += 53 is $var = $var + 53
- $var *= 23 is $var = $var * 23
- $var++ is $var = $var + 1
- $var-- is $var = $var - 1
- sqrt()
- max(x, y)
- min(x, y)
- round(54.444)
- ceil(x) = round up
- floor(x) = round down
- pow(x, y) = x to the power of y
- abs()


#### During HW

- </sup>  is superscript tag
- </i> is italic
- </b> is bold
- in variables, if_else is (test)? true : false;
- strlen(), NOT nchar()
- pi is a function: pi()
- &#960 is pi (& # 9 6 0)



