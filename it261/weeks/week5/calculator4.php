<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mileage Log</title>
</head>

<body>
    <!-- in our form, we will use method POST, to send the form data to the action attribute, in this case PHP_SELF which is this php page.  -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <!-- the value= here is making sure that these inputs remain after a user hits the submit button. -->
            <label>Name:</label>
            <input type="text" name="name" placeholder="Thomas Anderson" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

            <label>Trip distance:</label>
            <input type="number" name="trip" value="<?php if (isset($_POST['trip'])) echo htmlspecialchars($_POST['trip']); ?>">

            <label>Your average speed:</label>
            <input type="number" name="mph" value="<?php if (isset($_POST['mph'])) echo htmlspecialchars($_POST['mph']); ?>">

            <label>Average hours driven each day:</label>
            <input type="number" name="hours" value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">

            <label>Gas price average:</label>
            <ul>
                <li><input type="radio" name="gas" value="4.50" <?php if (isset($_POST['gas']) && $_POST['gas'] == 4.50) echo 'checked="checked"'; ?>>$4.50</li>
                <li><input type="radio" name="gas" value="5.00" <?php if (isset($_POST['gas']) && $_POST['gas'] == 5.00) echo 'checked="checked"'; ?>>$5.00</li>
                <li><input type="radio" name="gas" value="5.50" <?php if (isset($_POST['gas']) && $_POST['gas'] == 5.50) echo 'checked="checked"'; ?>>$5.50</li>
                <li><input type="radio" name="gas" value="6.00" <?php if (isset($_POST['gas']) && $_POST['gas'] == 6.00) echo 'checked="checked"'; ?>>$6.00</li>

            </ul>


            <input type="submit" value="Submit">
            <p><a href="">RESET</a></p>


        </fieldset>







    </form>
    <?php
    // I want to display the users name and the trip entered. first well start with server request method which checks what method was used to access this page. 
    // In our form we had declared post so the first if statement below is looks for method post and if true will run the script. 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // first we'll take care of what to display if there is an empty field by the user.
        if (empty($_POST['name'])) {
            echo '<p class="error">Please enter your name.</p>';
        }
        if (empty($_POST['trip'])) {
            echo '<p class="error">Please enter your planned trip</p>';
        }
        if (empty($_POST['mph'])) {
            echo '<p class="error">Please enter your average speed</p>';
        }
        if (empty($_POST['hours'])) {
            echo '<p class="error">Please enter the hours driven</p>';
        }
        if (empty($_POST['gas'])) {
            echo '<p class="error">Please select an average gas price for your trip</p>';
        }
        // next we'll define some variables with the inputted user data.
        if (isset($_POST['name'], $_POST['trip'], $_POST['mph'], $_POST['hours'], $_POST['gas'])) {
            $name = $_POST['name'];
            $trip = $_POST['trip'];
            $mph = $_POST['mph'];
            $hours = $_POST['hours'];
            $gas = $_POST['gas'];
            // here we are assigning a new variable $daily, to figure out how many miles we'll be driving in one day given our speed and hours spent on the road.
            // next we will divide $daily with the distance of our $trip to figure how many $days it will take given our $daily miles.
            $daily = $mph * $hours;
            $days = $trip / $daily;

            // the if statement below, will prevent our echo from displaying if the user did not fill out all the form values. If everything was filled out correctly by the user then the echo will display.

            if (!empty($name && $trip && $mph && $hours && $gas)) {

                echo '
            <div class="box">
                
                <p>Hey ' . $name . ', looks like your traveling ' . $hours . ' hours per day. Given your average speed, your ' . $trip . ' mile trip will take ' . $days . ' days. </p>

            </div>';
            }
        }
    }



    ?>


</body>

</html>