<?php
//This is where our session will start.
//Our session is a way to store information during a users visit to our website.

session_start();
include('config.php');


// this server.php will communicate with our database using iConn

// mysqli_connect(host, username, password, dbname, port, socket)

// host (Optional): Specifies a host name or an IP address
// username (Optional): Specifies the MySQL username
// password (Optional): Specifies the MySQL password
// dbname (Optional): Specifies the default database to be used
// port (Optional): Specifies the port number to attempt to connect to the MySQL server
// socket (Optional): Specifies the socket or named pipe to be used
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

//next we'll register the user using if isset reg_user. reg_user is located in the 'register.php' file, assigned to the Register button
// So, once user has inputted all the input fields and clicks submit, the inputs will be assigned to the following variables.


if (isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);

    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);

    $username = mysqli_real_escape_string($iConn, $_POST['username']);

    $email = mysqli_real_escape_string($iConn, $_POST['email']);

    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);

    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

    // mysqli_real_escape_string(connection, escapestring): this function will escape special characters in a string to create a legal SQL string that can be used in an SQL statement.

    //connection    Required. Specifies the MySQL connection to use
    //escapestring	Required. The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.

    if (empty($first_name)) {
        array_push($errors, 'First name is required');
    }
    if (empty($last_name)) {
        array_push($errors, 'Last name is required');
    }
    if (empty($username)) {
        array_push($errors, 'Username is required');
    }
    if (empty($email)) {
        array_push($errors, 'Email is required');
    }
    if (empty($password1)) {
        array_push($errors, 'Password is required');
    }

    // is password1 !== password2?
    if ($password1 !== $password2) {
        array_push($errors, 'Passwords do not match!');
    }

    //we will check the username and password and select it from the table. We are stating that we will limit 1 unique instance of a username or email.

    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    //we are going to have an if statement and we will nest two if statements inside our main if statement.
    //the function of this if statement is to ensure that two different users dont have the same username.


    if ($rows) {
        if ($rows['username'] == $username) {

            array_push($errors, 'This username is already taken. Try something else.');
        } //end username error if statement

        if ($rows['email'] == $email) {

            array_push($errors, 'This email already exists. Did you forget your password?');
        } //end email error if statement


    } //close main if statement

    //the count function will count through the errors, if there are no errors then we will add all of the user input data into the corresponding table row in our database using the $query variable. 
    //We are also creating a password variable that runs $password1 through the md5 function
    if (count($errors) == 0) {
        $password = md5($password1);
        //md5 will convert the string into a hash. need to learn more about this** as of 11/27/22

        $query = "INSERT INTO users (first_name, last_name, username, email, password) VALUE ('$first_name', '$last_name', '$username', '$email', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;

        header('Location:login.php');
    } //end if count errors


} //end reg_user if isset

//Now we will communicate with the login page

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, 'Username is required');
    }
    if (empty($password)) {
        array_push($errors, 'Password is required');
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";


        $results = mysqli_query($iConn, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            header('Location:index.php');
        } else {
            array_push($errors, 'Wrong username or password');
        } //close else


    } //close count errors



} //close if isset login_user