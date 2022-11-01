<?php
//concattenation
//operators - assignment operators
//some preset functions
//arrays

$name = "Brandon";
$first_name = "Brandon";
$last_name = "Davila";
echo "<br>";
$name = "Brandon";
$name .= " Davila";
echo $name;

echo "<br>";

$color = "red";
echo $color;

echo "<br>";
echo 'Brandon\'s favorite color is ' . $color . ''; //when using an apostrophe with single quotes, you need to make sure you inclue a back slash before it, otherwise VScode will think you are just trying to close out the string with another single quote.

echo "<br>";
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo "<br>";
$x = 20;
$x += 5;
echo $x;
echo "<br>";
$x = 100;
$x /= 10;
echo $x;

echo "<br>";
echo '<h3>Our product, quantity, and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo '<h3>We want our amount to reflect 2 decimal places -- we are thinking about floats and a new function - number_format()</h3>';

$product = 120; // this is our integer
$quantity = 5;
$total = $product * $quantity; //this variable calculates the cost of the product based on the quantity
$total *= 1.15; //here we take the previous total and multiply the cost with the tax
$total_friendly = number_format($total, 2); //with the number_format() here, we are saying that we want to see the amount with 2 decimal places.
echo 'We have a total of <b>$' . $total_friendly . '</b> dollars';

echo "<br>";
$product = 120; // this is our integer
$quantity = 5;
$total = $product * $quantity; //this variable calculates the cost of the product based on the quantity
$total *= 1.097; //here we take the previous total and multiply the cost with the tax
echo 'We have a total of <b>$' . number_format($total, 2) . '</b> dollars';
echo "<h3>Our Second Preset Function is our date function.</h3>";

echo date('Y'); //this displays the year


echo "<br>";

echo date('l'); // this displays the day

echo "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");

echo "<br>";

echo date("l jS \of F Y h:i A");

echo "<br>";

date_default_timezone_set('America/Los_Angeles');

echo "<br>";
echo date("l jS \of F Y h:i A");

echo '<h3>Time for an Array!</h3>';
echo '<h4>below is an indexed array</h4>';
//we cannot echo an array

//below are a few different ways to write an array
$fruit[] = 'bananas'; //0
$fruit[] = 'mangos'; //1
$fruit[] = 'dragon fruit'; //2
$fruit[] = 'strawberries'; //3
$fruit[] = 'papaya'; //4

echo $fruit[2];


echo "<br>";

$fruit = array(
    'bananas',
    'mangos',
    'dragon fruit',
    'strawberries',
    'papaya'
);

$fruit = [
    'bananas',
    'mangos',
    'dragon fruit',
    'strawberries',
    'papaya'
];

echo "<br>";
print_r($fruit);

echo "<br>";
var_dump($fruit);

echo '<h3>Now we have an associative array</h3>';

$nav = array(
    'index.php' => 'Home', //index is reffered to as the key and Home is the value 
    'About.php' => 'About',
    'Daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<pre>';

var_dump($nav);
echo '</pre>';
echo "<br>";

echo "<br>";

echo "<br>";
