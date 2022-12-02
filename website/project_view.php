<?php

include('config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else{
    header('Location:project.php');
}

//We will look into the pencils table and assigning the values in pencil_id to the $id variable.
$sql = 'SELECT * FROM pencils WHERE pencil_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        $pencil_name = stripslashes($row['pencil_name']);
        $color = stripslashes($row['color']);
        $manufacturer = stripslashes($row['manufacturer']);
        $body_material = stripslashes($row['body_material']);
        $lead_size = stripslashes($row['lead_size']);
        $details = stripslashes($row['details']);
        $feedback = '';
    }//end while loop

} else{
    $feedback = 'Sorry couldn\'t find what youre looking for.';
}//end num_rows if.

include('includes/header.php');
?>

<div id="wrapper">
    <main>
        <h1>Pencil Information</h1>
        <h2>Learn more about <?php echo $pencil_name;?></h2>

        <ul>

        
            <?php echo '
            <li><b>Pencil Name:</b>'.$pencil_name.'</li>
            <li><b>Color:</b>'.$color.'</li>
            <li><b>Manufacturer:</b>'.$manufacturer.'</li>
            <li><b>Body Material:</b>'.$body_material.'</li>
            <li><b>Lead Size:</b>'.$lead_size.'</li>
            <li><b>Details:</b>'.$details.'</li>
            
            
            
            ';?>

        </ul>
        <p><a href="project.php">Return to pencils page</a></p>

    </main>

    <aside>
        <figure>
            <img src="images/pencil<?php echo $id;?>.jpg" alt="<?php echo $pencil_name;?>">
            <figcaption>
            <?php echo '
            '.$pencil_name.'
            
            
            '; ?>
            </figcaption>

        </figure>
    </aside>
    <?php
    //we are going to release the server
    @mysqli_free_result($result);

    //close the connection to the server
    @mysqli_close($iConn);
    ?>

</div> 
<!-- end wrapper -->
<?php include('./includes/footer.php'); ?>