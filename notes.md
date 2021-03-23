
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
  - e.g. echo("<h1> HI </h1>")
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
- semi-colons are needed at the end of every line which has something after it