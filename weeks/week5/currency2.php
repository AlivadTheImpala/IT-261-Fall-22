<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 form with Dropdown(select and option)</title>
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

            <label>Choose Your Banking Institution</label>
            <!-- the select tag will create a drop down menu and inside, the option tag will display the different choices a user can pick from.  -->
            <select name="bank">
                <option value="" NULL>Select One</option>
                <option value="boa">Bank of America</option>
                <option value="chase">Chase</option>
                <option value="usaa">USAA</option>
                <option value="banner">Banner Bank</option>
                <option value="wells">Wells Fargo</option>
                <option value="becu">Boeing Credit Union</option>
            </select>

            <input type="submit" value="Convert to USD">

            <p><a href="">Reset!</a></p>


        </fieldset>





    </form>
    <?php
    //we will start with the server request method
    //then we'll ask ourselves if any fields are empty


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name.</p>';
        }
        if (empty($_POST['email'])) {
            echo '<p class="error">Please fill out your email.</p>';
        }
        if (empty($_POST['amount'])) {
            echo '<p class="error">Please enter an amount to convert.</p>';
        }
        if (empty($_POST['currency'])) {
            echo '<p class="error">Please select your currency. </p>';
        }
        if ($_POST['bank'] == NULL) {
            echo '<p class="error">Please choose your bank. </p>';
        }


        if (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $bank = $_POST['bank'];
            $dollars = $amount * $currency;

            echo '
            
            <div class="box">
                <h2> ' . $name . '</h2>
                <p>You have  <b>' . floor($dollars) . '</b> American dollars and we will be emailing you at <b>' . $email . '</b> to confirm your information and depost the funds into ' . $bank . '</p>


            </div>
            
            
            
            
            
            ';
        }
    } //end server request



    ?>


</body>

</html>