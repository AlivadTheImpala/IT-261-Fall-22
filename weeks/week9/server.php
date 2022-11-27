<?php
//This is where our session will start.
//Our session is a way to store information.

session_start();
include('config.php');
//header include will go here.
//include(./includes/header.php);

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

        
        if(isset($_POST['reg_user'])){
            $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);

            $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);

            $username = useri_real_escape_string($iConn, $_POST['username']);

            $email = useri_real_escape_string($iConn, $_POST['email']);

            $password1 = useri_real_escape_string($iConn, $_POST['password1']);

            $password2 = useri_real_escape_string($iConn, $_POST['password2']);
            // mysqli_real_escape_string(connection, escapestring): this function will escape special characters in a string to create a legal SQL string that can be used in an SQL statement.

            //connection    Required. Specifies the MySQL connection to use
            //escapestring	Required. The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.

            if(empty($first_name)){
                array_push($errors, 'First name is required');
            }
            if(empty($last_name)){
                array_push($errors, 'Last name is required');
            }
            if(empty($username)){
                array_push($errors, 'Username is required');
            }
            if(empty($email)){
                array_push($errors, 'Email is required');
            }
            if(empty($password1)){
                array_push($errors, 'Password is required');
            }

            // is password1 !== password2
            if($password1 !== $password2) {
                array_push($errors, 'Passwords do not match!');
            }
            

        } //end reg_user if isset