<?php
//class coffee exercise
// introducing the isset() function
// then we will ontriduce our first GLOBAL variable our switch

// starting the switch 
// if $GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day

// else,today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// $variable = 'This is our variable';
// if (isset($variable)) {
//     echo 'Variable has been set';
// } else
//     echo 'Variable has n ot been set!';

// echo '<br>';

// if (isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT';
// }

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Saturday':
        $coffee = '<h2>Saturday is Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p><b>A pumpkin latte</b> is created using a blend of espresso, some steamed milk and a pumpkin flavored syrup, and topped with some whipped cream and cinammon.</p>';
        break;
    case 'Sunday':
        $coffee = '<h2>Sunday is Iced Latte Day!</h2>';
        $pic = 'iced.jpg';
        $alt = 'Iced Latte';
        $content = '<p><b>An iced latte</b> part steamed milk and part espresso. Espresso can be either single or double shot, or more depending on your own tastes</p>';
        break;
    case 'Monday':
        $coffee = '<h2>Monday is Cortado!</h2>';
        $pic = 'cortado.jpg';
        $alt = 'Cortado';
        $content = '<p><b>A Cortado</b> is a beverage consisting of espresso mixed with a roughly equal amount of warm milk to reduce the acidity. The milk in a cortado is steamed, but not frothy and "texturized" as in many Italian coffee drinks. The cortado comes from Spain, most likely Madrid, where it is commonly served..</p>';
        break;
    case 'Tuesday':
        $coffee = '<h2>Tuesday Green Tea Day!</h2>';
        $pic = 'greentea.jpg';
        $alt = 'Green Tea';
        $content = '<p><b>Green Tea</b> is made by steeping green tea leaves in hot water. The green tea can be loose leaf or in a tea bag depending on your preferences</p>';
        break;
    case 'Wednesday':
        $coffee = '<h2>Wednesday is Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<p><b>An Americano</b> is espresso with water. They can be either hot or cold.</p>';
        break;
    case 'Thursday':
        $coffee = '<h2>Thursday is Mocha Day!</h2>';
        $pic = 'mocha.jpg';
        $alt = 'Mocha';
        $content = '<p><b>A mocha</b> is espresso with chocolate syrup to create a delicious chocolatey coffee experience.</p>';
        break;
    case 'Friday':
        $coffee = '<h2>Friday is Water Day!</h2>';
        $pic = 'water.jpg';
        $alt = 'Water';
        $content = '<p><b>Water</b> is the basis for most coffees, but it is also good to have on its own to hydrate oneself. Ah refreshing!</p>';
        break;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        img {
            width: 100%;
            max-width: 600px;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
        }

        h1,
        h2 {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>
            My Wonderful switch classwork exercise(Not the daily homework)
        </h1>
        <?php
        echo $coffee;
        ?>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <?php echo $content; ?>
        <h2>Check out Our Daily Specials</h2>
        <ul>

            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
    <!-- end wrapper -->
</body>

</html>