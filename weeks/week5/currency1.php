<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1 php form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">


            <label>Email</label>
            <input type="email" name="email">


            <label>How much money do you have?</label>
            <input type="number" name="amount">

            <!-- a radio button with an additional attribute of VALUE which holds the currencies value.-->
            <label>Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.017">Rubles</li>

                <li><input type="radio" name="currency" value="1.15">Canadian Dollars</li>

                <li><input type="radio" name="currency" value="1.00">Euros</li>

                <li><input type="radio" name="currency" value="0.0074">Yen</li>



            </ul>

            <input type="submit" value="Convert to USD">
            <p><a href=""></a>Reset!</p>


        </fieldset>





    </form>
    <?php
    //we will start with the server request method
    //then we'll ask ourselves if any fields are empty
    //if the fields are not empty, we will elseif they are set

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {



        if (empty($_POST['name'] && $_POST['email'] && $_POST['amount'] && $_POST['currency'])) {
            echo '<p class="error">Please fill in the the fields before continuing</p>';
        } elseif (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $dollars = $amount * $currency;

            echo '
            
            <div class="box">
                <h2> ' . $name . '</h2>
                <p>You have  <b>' . floor($dollars) . '</b> American dollars and we will be emailing you at <b>' . $email . '</b> to confirm your information</p>


            </div>
            
            
            
            
            
            ';
        }
    } //end server request



    ?>


</body>

</html>