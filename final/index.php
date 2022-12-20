<?php
//our index page must show the session_start() function

session_start();

include('config.php');

//did the user log in correctly, if not, the user will receive a message and will be directed back to the login page.
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php');
?>


<div id="hero">

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <h3>
                <?php echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>

            </h3>
        </div>
        <!-- close success div -->

    <?php endif; ?>


    <!-- is our session username set? -->
    <?php if (isset($_SESSION['username'])) : ?>
        <div class="welcome-logout">
            <h3>
                Welcome, <?= $_SESSION['username'] ?>
            </h3>
            <p><a href="index.php?logout='1'">Logout</a></p>
        </div>
        <!-- close welcome logout -->
    <?php endif; ?>

</div>
<div id="wrapper">
    <main>
        <h1 class="center">
            Your Home Page
        </h1>
    </main>

</div>

<?php
include('./includes/footer.php');
