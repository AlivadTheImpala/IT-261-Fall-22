<?php
// my variables

// variables are just containers to hold data

$name = "Brandon"; // Brandon represents a string
$name = 'Brandon';
echo $name;

$body_temp = 98; // 98 is an integer
$body_temp_new = 98.6; // 98 is a float
echo '<br>'; //single or double quote works around html tags youll see below, when you need to be more specific.
echo "<br>";
echo $body_temp;
echo '<br>';
echo $body_temp_new;
echo '<br>';
echo "My name is $name!";

echo '<br>';
echo 'My name is $name!'; //this will display as My name is $name. 

echo '<br>';
echo 'My name is '.$name.' !'; //If you prefer to use single quotes, you can use a . surrounding the variable as shown which is also enclosed within a single quote. 

echo '<br>';
echo 'The normal body temp for a human is '.$body_temp_new.' ';

echo '<br>';
$name ='Gladys';
echo $name; 
echo '<br>';

$x = 20;
$y = 5;

$z = $x + $y; // $z is assigned the sum of the variables $x and $y. avoid using the term 'equals'.
echo $z;
echo '<br>';
$z = $x * $y;
echo $z;
echo '<br>';
$z = $x / $y;
echo $z;


echo '<br>';

$first_name = 'Brandon';
$last_name = 'Davila';
echo $first_name." ".$last_name; //to display the names as you'd expect a first and last name to appear you concatinate them with a . at the end of the first variable and a . at the start of the second. To add space between them you create white space using quotes and a space inside.


echo '<br>';
echo "My full name is $first_name $last_name"; 
echo '<br>';
echo 'My full name is '.$first_name.' '.$last_name.''; //remeber the syntax when using single quotes^^
