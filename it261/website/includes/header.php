<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About Page of our Website Project';
        $body = 'about inner';
        break;
    case 'daily.php':
        $title = 'Daily page of our Website Project';
        $body = 'daily inner';
        break;
    case 'project.php':
        $title = 'Project page of our Website Project';
        $body = 'project inner';
        break;
    case 'contact.php':
        $title = 'Contact page of our Website Project';
        $body = 'contact inner';
        break;
    case 'Gallery.php':
        $title = 'Gallery page of our Website Project';
        $body = 'gallery inner';
        break;
}
// Our navigation Array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
switch ($today) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title><?php echo $title; ?></title>
</head>

<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">
            <a href="index.php">
                <img id="logo" src="images/logo.png" alt="logo" />
            </a>

            <!-- <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="daily.php">Daily</a></li>
          <li><a href="project.php">Project</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="gallery.php">Gallery</a></li>
        </ul>
      </nav> -->

            <nav>
                <ul>
                    <?php

                    foreach ($nav as $key => $value) {
                        if (THIS_PAGE == $key) {
                            echo '<li><a style="color:red;" href="' . $key . '"> ' . $value . '</a></li>';
                        } else {
                            echo '<li><a style="color:green;" href="' . $key . '"> ' . $value . '</a></li>';
                        }
                    } // end foreach

                    ?>
                </ul>
            </nav>
        </div>
        <!-- end inner header -->
    </header>