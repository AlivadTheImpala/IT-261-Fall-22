<?php
include('config.php');
include('./includes/header.php');

//If statement that declares the color of a page depending on the given day.
if ($today == 'Sunday') {
    echo '<body style="background-color: #dab68d">';
} else {
    echo '<body style="background-color:orange">';
}
?>

<div id="wrapper">

    <h1> <?php echo "Today's topic is $art_topic!"; ?> </h1>



    <p><?php echo "Today is $today"; ?></p>


    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">

    <?php echo $content; ?>
    <h2>Check out the rest of this weeks art topics.</h2>

    <ul>

        <li><a href="daily.php?today=Sunday">Sunday</a></li>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
    </ul>
</div>
<!-- end wrapper -->

<!-- end wrapper -->
<?php include('./includes/footer.php'); ?>