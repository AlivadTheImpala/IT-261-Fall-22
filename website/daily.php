<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
    <h1>
        Movie's Playing Today
    </h1>

    <?php echo "Today is $today"; ?>

    <?php echo $movie; ?>
    <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">

    <?php echo $content; ?>
    <h2>Check out the rest of the weeks showings</h2>

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