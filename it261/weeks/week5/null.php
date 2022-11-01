<?php

// 4 different variable a, b, c, and d. Both b and d will echo " b/d is 1" Where 1 is binary for TRUE. This means that yes b and d are null because null is being assigned to these variables. 

// a will echo "a is " in this case nothing will seem to appear, this is because is_null is only checking to see if a is null. Since it isnt nothing will appear after "a is" and the same is true for c. 

// c is being assigned a string with the word null.
echo '<h2>First Example of "a"</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";


echo '<h2>Second Example of "b"</h2>';
$b = null;
echo "b is " . is_null($b) . "<br>";


echo '<h2>Third Example of "c"</h2>';
$c = "null";
echo "c is " . is_null($c) . "<br>";


echo '<h2>Fourth Example of "d"</h2>';
$d = NULL;
echo "d is " . is_null($d) . "<br>";
