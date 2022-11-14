<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Our Arithmetic Form</h1>
    <form action="" method="POST">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">

            <label>Phone</label>
            <input type="tel" name="phone">

            <label>How Many Lattes</label>
            <input type="number" name="lattes">

            <label>How Many Cappuccinos</label>
            <input type="number" name="cappuccino">

            <label>How Many Americanos</label>
            <input type="number" name="americano">

            <label>Special Request</label>
            <textarea name="comments" cols="30" rows="20"></textarea>

            <input type="submit" value="Send My Order">

        </fieldset>


    </form>
    <p><a href="">Clear Order</a></p>


    <?php
    // our variables: $name, $phone, $lattes, $cappuccino, $americano, $comments

    //We want our form to display a greeting in relation to the time of day. So first well set the default time zone
    date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H:i');

    if (isset($_POST['name'], $_POST['phone'], $_POST['lattes'], $_POST['cappuccino'], $_POST['americano'], $_POST['comments'])) {

        // add my if statement regarding fields that may be empty

        if (empty($_POST['name'] && $_POST['phone'] && $_POST['lattes'] && $_POST['cappuccino'] && $_POST['americano'] && $_POST['comments'])) {

            echo '<p class="error">Please fill out all of the fields</p>';
        } else {

            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $lattes = $_POST['lattes'];
            $cappuccino = $_POST['cappuccino'];
            $americano = $_POST['americano'];
            $comments = $_POST['comments'];
            $total = $lattes + $cappuccino + $americano;

            // if and elseif statement regarding our time

            if ($our_time <= 11) {
                $our_time = "Good Morning";
            } elseif ($our_time <= 17) {
                $our_time = "Good Afternoon";
            } else {
                $our_time = "Good Evening";
            }

            echo '
            <div class="box">
                <h2>' . $our_time . ' ' . $name . '!</h2>
                <p>We\'ve confirmed your order to this number <b>' . $phone . '</b>. Please review your order.</p>
                <ul>
                    <li>' . $lattes . ' lattes</li>
                    <li>' . $cappuccino . ' cappuccinos</li>
                    <li>' . $americano . ' americanos</li>
                    

                </ul>
                <p>Total Beverages: ' . $total . '</p> 


                <p>This is your <b>special request:</b> ' . $comments . '</p>
                <p>Thank you for choosing our establishment</p>

            </div>
            ';
        } // end else





    } //end isset

    ?>


</body>

</html>