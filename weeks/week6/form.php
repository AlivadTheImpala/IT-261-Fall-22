<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Form 1 in week 6</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>
            <legend>Contact Brandon</legend>

            <label>First Name</label>
            <input type="text" name="first_name">

            <label>Last Name</label>
            <input type="text" name="last_name">


            <label>Email</label>
            <input type="email" name="email">

            <label>Gender</label>
            <ul>
                <!-- will add other genders once sticky -->
                <li><input type="radio" name="gender" value="female">Female</li>
            </ul>
            <label>Phone</label>
            <input type="tel" name="phone">
            <!-- using movie genres instead of wines :) -->

            <ul>
                <!-- will add genres once sticky -->
                <label>Favorite Wines</label>
                <li><input type="checkbox" name="wines[]" value="cab">Cabernet</li>
            </ul>

            <label>Regions</label>
            <select name="regions">
                <!-- will add more options once sticky -->
                <option value="" NULL>Select One!</option>


            </select>
            <label>Comments</label>
            <textarea name="comments" cols="30" rows="10"></textarea>

            <label>Privacy</label>
            <ul>
                <!-- will add other genders once sticky -->
                <li><input type="radio" name="privacy" value="yes">Privacy</li>
            </ul>

            <input type="submit" value="Submit">
        </fieldset>




    </form>
</body>

</html>