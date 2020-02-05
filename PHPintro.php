<?php // PHP code must be enclosed with <?php tags

// comments are two forward slashes or a #

/*
multi-line as usual
*/

print('Hello');
echo 'the';
print 'world';
?>
Anything outside php tags are echoed automatically
<?php

$boolean = true; // this is a variable
$int = 12;
$float = 1.234;
$randomVariableName = 'hello'; // try to use only single quotes
print $randomVariableName;

unset ($randomVariableName); // this deletes a variable

/* Math:
1+1
2-1
2 * 2
2 / 1
variable =+ 1;
print $int++;
print ++$int;
*/

//you can embed other variables using double quotes

$sgl_quotes = '$String';

echo 'this is a simple one line string';

echo 'you can also have
multi line strings as well';

echo 'you can escape single quotation marks with a slash like this: "I\'ll be back"';

echo 'same thing with escaping other slashes like this: "C:\\location" will print "C:\"';

echo '\n does not create a new line with single quotes';

echo 'nor do Variables $expand $either';

$dbl_quotes = "This line will interpret the variable like js es6 string interpolation: $sgl_quotes";

echo "In double quotes, you can also use back slashes to escape and create special characters,
such as linefeed: \n
carriage return \r
horizontal tab \t
vertical tab \v
escape \e
form feed \f
escaping a backslash \\
escaping a dollar sign \$
escaping a double quotation marl \"
also regex, regex in hex, and unicode codepoints";

// a "heredoc" is a good way to create a multiline grouping of text that _will_ be parsed by PHP
// it starts with <<< and then immediately after, an identifier. You signify the closing of the heredoc
// with the same identifier.

$heredoc_string = <<<IDENTIFIER
so basically anything that follows the heredoc identifier
will be considered a string.
It's important to note that to properly end a heredoc
you must have a linebreak followed by the identifier (unindented), with a semicolon
and then another linebreak.
Heredoc's behave just like a double quoted string in that Variables will be expanded.
IDENTIFIER;

// similar to heredocs, a nowdoc string is a heredoc for single quoted strings
// though keep in mind, a nowdoc will _not_ be parsed by PHP, so Variables will _not_ be expanded.

$nowdoc_string = <<<'NOWDOC'
The major difference between a heredoc and a nowdoc is that the identifier for a nowdoc
is inside single quotation marks, whereas a heredoc is incased in double quotation marks,
or none at all. Nowdocs are closed the same way though.
NOWDOC;

// String concatenation is done with a .
echo 'String 1 ' . 'String 2';
// or by passing variables/strings as params!
$string1 = 'dolla';
echo $string1, ' ', $string1, ' ', 'bill'; // outputs: 'dolla dolla bill'

//Enclose a variable in curlies if necessary:
$number = 0;

$apples = "I have $number apples to eat."; // I have 0 apples to eat
$oranges = "I have ${number} oranges to eat."; // I have 0 oranges to eat
$money = "I have $${number} in the bank"; // I have $0 in the bank // truuuuu


// Constants are defined using define("constant_name", "constant content")
define("NEW_CONSTANT", "It's gonna contain a string :) ");
// you can call a constant without using a $
echo NEW_CONSTANT;

// Arrays, MF
// looks like arrays in PHP are kind of like js objects, containing key-value pairs.
$array_1 = array(
    "key" => "value",
    "The key can be either an integer or a string" => 'the value can be of any type'
);
// Thank God they switched to bracket support:
$array_2 = [
    1 => 'value_2',
    2 => 'value_2_again'
];

// There's a bit of weird type coercion with array values:
<<<ARRAYCOERCION
strings containing _decimal_ integers will be coerced to the integer type:
"8" -> 8
"08" -> "08" as "08" is not a valid decimal integer
floats are coerced to integers:
8.7 -> 8
bools are coerced to integers, so true will be stored as 1 and false as 0
Null will be coerced to an empty string
ARRAYCOERCION;

// Arrays that have the same keys:

$overwrite_array = [
    1 => "first value",
    "1" => "second value",
    1.5 => "third value",
    true => "fourth value"
];
// The array will now only output 1 => "fourth value" because all of the keys are coerced to 1,
// and the last key in the array will overwrite the rest.
// If you don't specify a key, PHP will auto increment from the largest previously used integer key:
$array_increment = ["valueone","valuetwo","valuethree","valuefour"];
echo $array_increment; //outputs:
/*
array_increment(4) {
    [0]=>
    string(8) "valueone"
    [1]=>
    string(8) "valuetwo"
    [2]=>
    string(10) "valuethree"
    [3]=>
    string(9) "valuefour"
}
*/