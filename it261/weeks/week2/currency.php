<?php
$rubles_rate = 0.017;
$pound_rate = 1.15;
$canadian_rate = .76;
$euros_rate = 1.0;
$yen_rate = .0074;

$rubles = 10007;
$pound = 500;
$canada = 5000;
$euros = 1200;
$yen = 2000;

$rubles_converted = $rubles * $rubles_rate;
$pound_converted = $pound * $pound_rate;
$canadian_converted = $canada * $canadian_rate;
$euros_converted = $euros * $euros_rate;
$yen_converted = $yen * $yen_rate;

$total = $rubles_converted + $pound_converted + $canadian_converted + $euros_converted + $yen_converted;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currnecy Logic Exercise</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width: 500px;
            margin: 30px auto;

        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 500px;
        }

        th,
        td {
            border: 1px solid teal;
            padding: 8px;

        }

        h1,
        h2,
        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>After our Travels, we have returned with the following currencies</h1>
        <ul>
            <li>Rubles</li>
            <li>Pound</li>
            <li>Canadian Dollar</li>
            <li>Euros</li>
            <li>Yen</li>

        </ul>

        <h2>Lets Convert!</h2>

        <table>
            <tr>
                <th colspan="2">Currency</th>
                <th>Dollars</th>
            </tr>
            <tr>
                <th>Rubles</th>
                <td><?php echo $rubles; ?></td>
                <td>$<?php echo '' . number_format($rubles_converted, 2) . ''; ?></td>
            </tr>
            <tr>
                <th>Pounds</th>
                <td><?php echo $pound; ?></td>
                <td>$<?php echo '' . number_format($pound_converted, 2) . ''; ?></td>
            </tr>
            <tr>
                <th>Canadian Dollars</th>
                <td><?php echo $canada; ?></td>
                <td>$<?php echo '' . number_format($canadian_converted, 2) . ''; ?></td>
            </tr>
            <tr>
                <th>Euros</th>
                <td><?php echo $euros; ?></td>
                <td>$<?php echo '' . number_format($euros_converted, 2) . ''; ?></td>
            </tr>
            <tr>
                <th>Yen</th>
                <td><?php echo $yen; ?></td>
                <td>$<?php echo '' . number_format($yen_converted, 2) . ''; ?></td>
            </tr>
            <tr>
                <th>Total
                <td>American Dollars</td>
                <td>$<?php echo '' . number_format($total, 2) . ''; ?></td>
                </th>
            </tr>


        </table>


    </div>
    <!-- end wrapper -->
</body>

</html>