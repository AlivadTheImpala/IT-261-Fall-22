<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Celcius Document</title>

</head>

<body>
    <h1>Celcius Converter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <fieldset>
            <label>Enter your Celcius value</label>
            <input type="number" name="cel">

            <input type="submit" name="Convert It!">



        </fieldset>
        <p><a href="">Reset</a></p>

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['cel'])) {
            $cel = $_POST['cel'];
            //we will use a new function to make sure that our valus are integers. intval()
            $cel_int = intval($cel);
            $far = ($cel_int * 9 / 5) + 32;

            //if the user does not enter a value, display a message
            if ($cel == NULL) {
                echo '<p class="error">Please enter a Celcius value</p>';
            } elseif ($far <= 32) {
                echo '<p>' . $cel_int . ' degrees Celcius is ' . $far . ' degrees Fahrenheit.<br> I wouldnt want to be outside with that kind of cold!</p>';
            } elseif ($far <= 45) {
                echo '<p>' . $cel_int . ' degrees Celcius is ' . $far . ' degrees Fahrenheit.<br> It\'s getting warmer, nice!</p>';
            } elseif ($far <= 60) {
                echo '<p>' . $cel_int . ' degrees Celcius is ' . $far . ' degrees Fahrenheit.<br> It\'s definitely warmer, but we still need a sweater.</p>';
            } elseif ($far <= 75) {
                echo '<p>' . $cel_int . ' degrees Celcius is ' . $far . ' degrees Fahrenheit.<br> A good day to be outside and enjoy some warmth!</p>';
            } elseif ($far <= 90) {
                echo '<p>' . $cel_int . ' degrees Celcius is ' . $far . ' degrees Fahrenheit.<br> We can definitely enjoy the heat outside now! </p>';
            } elseif ($far <= 100) {
                echo '<p>' . $cel_int . ' degrees Celcius is ' . $far . ' degrees Fahrenheit.<br> Oh man now it\'s hot. Today would be a good beach day!</p>';
            } else {
                echo '<p>' . $cel_int . ' degrees Celcius is ' . $far . ' degrees Fahrenheit.<br> The beach would be cool, but maybe crank up that AC and cool off inside if you can!</p>';
            }
        } //end isset
    } //end post





    ?>
</body>

</html>