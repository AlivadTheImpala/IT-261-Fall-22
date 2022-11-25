<?php
include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
    <main>
        <?php

        $sql = 'SELECT * FROM people';
        //now we need to connect to the database

        // mysqli_connect(host, username, password, dbname, port, socket)

        // host (Optional): Specifies a host name or an IP address
        // username (Optional): Specifies the MySQL username
        // password (Optional): Specifies the MySQL password
        // dbname (Optional): Specifies the default database to be used
        // port (Optional): Specifies the port number to attempt to connect to the MySQL server
        // socket (Optional): Specifies the socket or named pipe to be used
        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

        // mysqli_query(connection, query, resultmode)

        // connection Required. Specifies the MySQL connection to use
        // query Required. Specifies the SQL query string
        // resultmode Optional. A constant. Can be one of the following:

        // MYSQLI_USE_RESULT (Use this to retrieve large amount of data)
        // MYSQLI_STORE_RESULT (This is default)
        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

        //next we are looking to make sure the number of rows is greater than 0. if there is at least 1 row we will pull that data from the db

        if (mysqli_num_rows($result) > 0) {
            //we will be reading those rows with a while loop
            while ($row = mysqli_fetch_assoc($result)) {

                echo '
        <h2>Information about: ' . $row['first_name'] . '</h2>

        <ul>

            <li><b>First Name:</b> ' . $row['first_name'] . '</li>
            <li><b>Last Name:</b> ' . $row['last_name'] . '</li>
            <li><b>Birthdate:</b> ' . $row['birthdate'] . '</li>

        </ul>

        <p>For information about ' . $row['first_name'] . ', click <a href="people_view.php?id=' . $row['people_id'] . ' ">here</a></p>


        ';
            } //end while

            // mysqli_fetch_assoc returns an associative array for our $result variable.
            // The $result variable is using mysqli_query which is getting the connection used in the $iConn variable.
            // With the $result we can ensure that we at least have 1 row within the database with data and we are storing that data in the $row variable, which again is being returned as an array using mysqli_fetch_assoc.
            // with the $row array we can call on the rows in our mySQL database and display the information.
        } else {

            echo 'Nobody is home';
        } //end if number of row is greater than 0


        //we are going to release the server
        @mysqli_free_result($result);

        //close the connection to the server
        @mysqli_close($iConn);
        ?>

    </main>

    <aside>
        <?php echo random_images($photos); ?>

    </aside>

</div>
<!-- end wrapper -->

<?php include('./includes/footer.php');
