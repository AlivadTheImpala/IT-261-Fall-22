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
            <label>Name</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

            <label>Total Miles driven</label>
            <input type="number" name="mileage" value="<?php if (isset($_POST['mileage'])) echo htmlspecialchars($_POST['mileage']); ?>">

            <input type="submit" value="Submit">
            <p><a href="">RESET</a></p>


        </fieldset>







    </form>
    <?php
    // I want to display the users name and the mileage entered. first well start with server request method which checks what method was used to access this page. 
    // In our form we had declared post so the first if statement below is looks for method post and if true will run the script. 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // first we'll take care of what to display if there is an empty field by the user.
        if (empty($_POST['name'])) {
            echo '<p class="error">Please enter your name.</p>';
        }
        if (empty($_POST['mileage'])) {
            echo '<p class="error">Please enter the miles you plan on driving</p>';
        }
        // next we'll define some variables with the inputted user data.
        if (isset($_POST['name'], $_POST['mileage'])) {
            $name = $_POST['name'];
            $mileage = $_POST['mileage'];

            // the if statement below, will prevent our echo from displaying if the user did not fill out all the form values

            if (!empty($name && $mileage)) {

                echo '
            <div class="box">
                <h2>' . $name . '</h2>
                <p>You will be driving ' . $mileage . ' miles.</p>

            </div>';
            }
        }
    }



    ?>


</body>

</html>