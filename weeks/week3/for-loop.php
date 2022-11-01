<?php
// this file demonstrates for loops and placing your php inside your HTML
// The for loop, loops through a block of code for a specified number of times. 
// for(init counter; test counter; increment counter){code goes here}

// celsius and fahrenheit

// $far = ($cel * 9/5) + 32;

// kilometers to miles
// $kilometer = (.62137 * $kilometer)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celsius Table</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid blue;
        }

        td,
        th {
            border: 1px solid blue;
            border-collapse: collapse;
            padding: 5px;
        }

        h1,
        h2 {
            text-align: center;
            margin: 10px 0;
            color: turquoise
        }
    </style>
</head>

<body>
    <h1>My Celcius/Fahrenheit Table!</h1>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for ($cel = 4; $cel <= 100; $cel += 2) {
            $far = ($cel * 9 / 5) + 32;
            echo '<tr>';
            echo '<td> ' . number_format($cel, 0) . ' degrees </td>';
            echo '<td> ' . number_format($far, 0) . ' degrees </td>';
            echo '</tr>';
        }
        ?>
    </table>

    <h2>Kilometer to Mileage</h2>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>
        <?php
        for ($kilometer = 0; $kilometer <= 100; $kilometer += 5) {
            $miles = $kilometer * 0.62;
            echo '<tr>';
            echo '<td> ' . $kilometer . ' kilometers </td>';
            echo '<td> ' . $miles . ' miles </td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>