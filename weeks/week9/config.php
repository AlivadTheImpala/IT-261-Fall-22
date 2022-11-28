<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');



function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> ' . $myFile . ' </b> on line: <b> ' . $myLine . ' </b>';
        echo 'Error message: <b> ' . $errorMsg . '</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }
}

// $photos[0] = 'photo1';
// $photos[1] = 'photo2';
// $photos[2] = 'photo3';
// $photos[3] = 'photo4';


// $i = rand(0, 3);

// $selected_image = '' . $photos[$i] . '.jpg ';

// function random_images($photos)
// {
//     $my_return = '';
//     $i = rand(0, 3);
//     $selected_image = '' . $photos[$i] . '.jpg';
//     $my_return = '<img  src="images/' . $selected_image . '" alt="' . $photos[$i] . '">';
//     return $my_return;
// }
