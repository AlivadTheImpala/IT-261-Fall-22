<?php

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$wines = '';
$regions = '';
$comments = '';
$privacy = '';

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$gender_error = '';
$phone_error = '';
$wines_error = '';
$regions_error = '';
$comments_error = '';
$privacy_error = '';

ob_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_error = 'Please enter your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_error = 'Please enter your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_error = 'Please enter an email address';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_error = 'Please select a gender identity';
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['phone'])) {
        $phone_error = 'Please enter your Phone Number';
    } else {
        $phone = $_POST['phone'];
    }

    if (empty($_POST['wines'])) {
        $wines_error = 'What, no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    if ($_POST['regions'] == NULL) {
        $regions_error = 'Please select any regions that apply';
    } else {
        $regions = $_POST['regions'];
    }

    if (empty($_POST['comments'])) {
        $comments_error = 'Please share your comments with us';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_error = 'You must accept our privacy policy to continue';
    } else {
        $privacy = $_POST['privacy'];
    }

    function my_wines($wines)
    {
        $my_return = '';

        if (!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        } else {
            $wines_error = 'Please fill out your wines!';
        }
        return $my_return;
    } //end function

    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['phone'], $_POST['wines'], $_POST['regions'], $_POST['comments'], $_POST['privacy'])) {

        $to = 'brandon.davila@seattlecolleges.edu';
        $subject = 'Test Email on ' . date('m/d/y, h i A');
        $body = '
        First Name: ' . $first_name . ' ' . PHP_EOL . '
        Last Name: ' . $last_name . ' ' . PHP_EOL . '
        Email: ' . $email . ' ' . PHP_EOL . '
        Gender: ' . $gender . ' ' . PHP_EOL . '
        Phone: ' . $phone . ' ' . PHP_EOL . '
        Region: ' . $regions . ' ' . PHP_EOL . '
        Wines: ' . my_wines($wines) . ' ' . PHP_EOL . '
        Comments: ' . $comments . ' ' . PHP_EOL . '
        ';

        $headers = array(
            'From' => 'noreply@mystudentswa.com'


        );

        if (!empty($first_name && $last_name && $email && $gender && $phone && $regions && $wines && $comments)) {



            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    }
} //end server request statement
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../week5/css/styles.css">
    <title>Form 1 in week 6</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <fieldset>
            <legend>Contact Brandon</legend>

            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
            <!-- the rules for this span are all above the doctype ^^^ -->
            <span class="error"> <?php echo $first_name_error; ?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">

            <span class="error"> <?php echo $last_name_error; ?></span>
            <!-- end first/last name -->


            <label>Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

            <span class="error"> <?php echo $email_error; ?></span>
            <!-- end email -->

            <label>Gender</label>
            <ul>

                <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female</li>

                <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>Male</li>


                <li><input type="radio" name="gender" value="nonbinary" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'nonbinary') echo 'checked="checked"'; ?>>Non-Binary</li>

            </ul>
            <span class="error"> <?php echo $gender_error; ?></span>
            <!-- end gender -->


            <label>Phone</label>
            <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="error"> <?php echo $phone_error; ?></span>
            <!-- end phone -->


            <ul>

                <label>Favorite Wines</label>

                <li><input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"'; ?>>Cabernet</li>

                <li><input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"'; ?>>Merlot</li>

                <li><input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"'; ?>>Syrah</li>

                <li><input type="checkbox" name="wines[]" value="red" <?php if (isset($_POST['wines']) && in_array('red', $wines)) echo 'checked="checked"'; ?>>Red Blend</li>

                <li><input type="checkbox" name="wines[]" value="mal" <?php if (isset($_POST['wines']) && in_array('mal', $wines)) echo 'checked="checked"'; ?>>Malbac</li>

            </ul>
            <span class="error"> <?php echo $wines_error; ?></span>
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
            <span class="error"> <?php echo $regions_error; ?></span>
            <!-- end regions -->

            <label>Comments</label>
            <textarea name="comments"> <?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>

            <span class="error"> <?php echo $comments_error; ?></span>
            <!-- end comments -->

            <label>Privacy</label>
            <ul>

                <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"'; ?>>Privacy</li>
            </ul>

            <span class="error"> <?php echo $privacy_error; ?></span>
            <!-- end privacy -->

            <input type="submit" value="Submit">
            <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'" value="Reset">
        </fieldset>




    </form>
</body>

</html>