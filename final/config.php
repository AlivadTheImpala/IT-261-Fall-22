<?php
ob_start();
//here, basename() looks at the current filename based on $_SERVER['PHP_SELF'] and assigns it a name of THIS_PAGE. This will be used for our navigation where it matches the $key to the value of THIS_PAGE.
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');
$success = 'You have successfully logged in!';
$errors = array();
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
// with this switch, we apply the THIS_PAGE constant from above. 
//In the case where index.php is the active page, we will assign the $title variable with Home page, which we can use in the header include to dynamically display it's title. 
//We can assign a dynamic body class to our body tag, by creating the $body variable and assigning it, home. 
// the $title and $body variables are assigned to each case, which can then be used where ever we want to echo those variables.
switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home page';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About page';
        $body = 'about inner';
        break;
    case 'daily.php':
        $title = 'Daily page';
        $body = 'daily inner';
        break;
    case 'project.php':
        $title = 'Project page';
        $body = 'project inner';
        break;
    case 'project-view.php':
        $title = 'Project | More Info';
        $body = 'project inner';
        break;
    case 'contact.php':
        $title = 'Contact page';
        $body = 'contact inner';
        break;
    case 'login.php':
        $title = 'Login';
        $body = 'login inner';
        break;
    case 'register.php':
        $title = 'Register now';
        $body = 'thx inner';
        break;
}
//Our navigation as an array. The filenames represent the key in our foreach loop. 
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav)
{
    //we'll define our $links with an empty value
    //the foreach loop will look through the $nav array above, and assign the variables $key and $nav_link_name to our values.
    $links = '';
    foreach ($nav as $key => $nav_link_name) {

        //to highlight our active page on the nav bar, we create an if statement that checks to see if THIS_PAGE is the same as the $key variable. If it is, the <a> tag will have a class of "active", otherwise we wont have any class...yet??
        if (THIS_PAGE == $key) {
            $links .= '<li><a class="active"  href="' . $key . '"> ' . $nav_link_name . '</a></li>';
        } else {
            $links .= '<li><a  href="' . $key . '"> ' . $nav_link_name . '</a></li>';
        }
    } //end foreach
    return $links;
} //end makelinks function


date_default_timezone_set('America/Los_Angeles');


if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
