<?php
//1 ruble = 0.017 dollars
// 1 pound = 1.15 dollars
// 1 canadian dollar = .76 dollars
// 1 euro = 1.00 dollar
// 1 yen = .0074 dollars

// rubles = 10007 = 117.11
// pound = 500 = 575
// canada = 5000 = 3800
// euros = 1200 = 1200
// yen = 2000 = 14.8
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
                <td>10,007</td>
                <td>117.11</td>
            </tr>
            <tr>
                <th>Pounds</th>
                <td>500</td>
                <td>575</td>
            </tr>
            <tr>
                <th>Canadian Dollars</th>
                <td>5000</td>
                <td>3800</td>
            </tr>
            <tr>
                <th>Euros</th>
                <td>1200</td>
                <td>1200</td>
            </tr>
            <tr>
                <th>Yen</th>
                <td>2000</td>
                <td>14.80</td>
            </tr>


        </table>


    </div>
    <!-- end wrapper -->
</body>

</html>