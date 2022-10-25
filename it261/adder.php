<html>

<head>
    <title>My Adder Assignment</title>
    <style>
        p {
            color: red;
            text-align: center;
        }

        h1 {
            color: green;
        }

        h2 {
            font-size: 1.5em;
            text-align: center;
        }

        form {
            width: 350px;
            margin: 0 auto;
            border: 1px solid red;
            padding: 10px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Adder.php</h1>
    <!-- added method="POST" to form -->
    <form action="" method="POST">
        <!-- added missing open label tag -->
        <label>Enter the first number:</label>
        <!-- changed type to number -->
        <input type="number" name="num1"><br>
        <!-- fixed label tag by adding closing tag and fixing the opening tag -->
        <label>Enter the second number:</label>
        <!-- changed type to number -->
        <input type="number" name="num2"><br>
        <!-- added closing double quotes on value -->
        <input type="submit" value="Add Em!!">
    </form>


    <?php     //adder-wrong.php

    if (isset($_POST['num1'], $_POST['num2'])) { //added $_POST['num2]

        //added condition if no input is entered into num1 or num2.
        if (empty($_POST['num1'] && $_POST['num2'])) {
            echo '<p>Please enter two numbers to add.</p>';
        } else {

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $myTotal = $num1 + $num2; // removed the - sign right before the =. also renamed Num2 to num2.


            //removed excess echo tags and placed them inside a single echo statement 
            echo '
        
            <h2>You added ' . $num1 . ' and ' . $num2 . '</h2> 
       
            <p style="color:red;"> and the answer is <br> ' . $myTotal . '!</p>

            <p><a href="">Reset page</a></p>
            ';
        } //end else

    } //end isset
    ?>

</body>

</html>
<!-- removed the php closing tags -->