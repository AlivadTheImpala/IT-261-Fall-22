<?php

session_start();
include('config.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));


// Registration Section //

if (isset($_POST['reg_user'])) {
}//end if isset(reg_user)
















// end registration section

// Login Section //

















// end login section