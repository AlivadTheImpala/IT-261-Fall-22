<?php

//we begin a users session to our server with the session_start(); function
session_start();
include('config.php');

// $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));


// Registration Section communicating with register.php//

//we'll check if a user has submitted their details, which is triggered by the reg_user button, and save the details to variables.
if (isset($_POST['reg_user'])) {

    // mysqli_real_escape_string(connection, escapestring): this function will escape special characters in a string to create a legal SQL string that can be used in an SQL statement.

    //connection: Specifies the MySQL connection to use
    //escapestring: The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);

    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);

    $username = mysqli_real_escape_string($iConn, $_POST['username']);

    $email = mysqli_real_escape_string($iConn, $_POST['email']);

    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);

    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

    //if the user left an fields empty an error message will be called to inform them what needs to be filled.
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

    // password2's purpose is to check that they entered their password as inteded to avoid a typo. 
    //if password1 does not equal password2 an error will inform the user.
    if ($password1 !== $password2) {
        array_push($errors, 'Passwords do not match!');
    }

    //with the user data submitted, we will check our database to ensure that the entered email and username have not already been used. 
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    if ($rows) {
        if ($rows['username'] == $username) {

            array_push($errors, 'This username is already taken. Try something else.');
        } //end username error if statement

        if ($rows['email'] == $email) {

            array_push($errors, 'This email already exists. Did you forget your password?');
        } //end email error if statement


    } //close if statement

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

} //end if isset(reg_user)
// end registration section

// Login Section //
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
// end login section

















// end login section