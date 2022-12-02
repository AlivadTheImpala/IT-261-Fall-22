<?php
include('config.php');
include('includes/header.php');
?>

<div id="wrapper">
  <main>
    <h1>Welcome to my pencil page</h1>

    <p>Below you'll find a selection of pencils found on <a href="https://www.jetpens.com/">JetPens.com</a> </p>

    <?php

    //we will be looking at the pencils table
    $sql = 'SELECT * FROM pencils';
    //to connect to the database we use my_sqli_connect and pass our credential.php info, into the $iConn variable here. if connection fails we kill the program so it stops.
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
    //after connecting to the database and selecting the data from the pencils table, we will pass that information into this $results variable, or kill the program.
    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
    // If there is data added into the pencils table we will display them below. If there isnt any data we'll just display a message that nothing has been added to the pencils table.
    if (mysqli_num_rows($result) > 0){
        //the while loop will look at our $results and return the data as an associative array, applying the data in the table rows to the $row variable.
        
        while ($row = mysqli_fetch_assoc($result)){
            echo '

            <h2>Info on: '.$row['pencil_name'].'</h2>

            <ul>
                <li><b>Color:</b> '.$row['color'].'</li>
                <li><b>Manufacturer:</b> '.$row['manufacturer'].'</li>
                <li><b>Body Material:</b> '.$row['body_material'].'</li>
                <li><b>Lead Size:</b>'.$row['lead_size'].'</li>
                <li><b></b></li>
            </ul>

            <p><a href="project_view.php?id='.$row['pencil_id'].'">More</a> information about the '.$row['pencil_name'].'</p>
            
            
            
            ';

        } //end while loop


    } else {
        echo 'Sorry no data has been added.';
    } //end num_rows if.

     //we are going to release the server. The mysqli_free_result() function is used to de-allocate memory that was used to store the query results returned by mysqli_query().
     @mysqli_free_result($result);

     //The purpose of mysqli_close() is also to save computer resources, but another key reason for using it is because there is a limited number of connections that a MySQL server can accept, and if you have several clients holding connections open for no reason then the server may well need to turn away other, waiting clients. (information from hackingwithphp.com)
     @mysqli_close($iConn);







    ?>
  </main>
</div>

<?php include('./includes/footer.php'); ?>
