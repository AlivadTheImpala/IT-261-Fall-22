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
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
            <!-- end first/last name -->


            <label>Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <!-- end email -->

            <label>Gender</label>
            <ul>

                <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female</li>

                <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>Male</li>


                <li><input type="radio" name="gender" value="nonbinary" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'nonbinary') echo 'checked="checked"'; ?>>Non-Binary</li>
            </ul>
            <!-- end gender -->


            <label>Phone</label>
            <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <!-- end phone -->


            <ul>

                <label>Favorite Wines</label>

                <li><input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines)); ?>>Cabernet</li>

                <li><input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines)); ?>>Merlot</li>

                <li><input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines)); ?>>Syrah</li>

                <li><input type="checkbox" name="wines[]" value="red" <?php if (isset($_POST['wines']) && in_array('red', $wines)); ?>>Red Blend</li>

                <li><input type="checkbox" name="wines[]" value="mal" <?php if (isset($_POST['wines']) && in_array('mal', $wines)); ?>>Malbac</li>

            </ul>
            <!-- end wines -->

            <label>Regions</label>
            <select name="regions">

                <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected"'; ?>>Select One!</option>

                <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected"'; ?>>North West</option>

                <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "selected"'; ?>>South West</option>

                <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected = "selected"'; ?>>Mid West</option>

                <option value="ec" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'ec') echo 'selected = "selected"'; ?>>East Coast</option>

                <option value="ne" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "selected"'; ?>>North East</option>


            </select>
            <!-- end regions -->

            <label>Comments</label>
            <textarea name="comments"> <?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
            <!-- end comments -->

            <label>Privacy</label>
            <ul>

                <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"'; ?>>Privacy</li>
            </ul>
            <!-- end privacy -->

            <input type="submit" value="Submit">
        </fieldset>




    </form>
</body>

</html>