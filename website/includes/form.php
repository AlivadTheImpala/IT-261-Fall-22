<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

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
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span class="error"> <?php echo $phone_error; ?></span>
        <!-- end phone -->


        <ul>

            <label>Favorite Drawing Medium</label>

            <li><input type="checkbox" name="drawing[]" value="pencil" <?php if (isset($_POST['drawing']) && in_array('pencil', $drawing)) echo 'checked="checked"'; ?>>Pencil</li>

            <li><input type="checkbox" name="drawing[]" value="ink" <?php if (isset($_POST['drawing']) && in_array('ink', $drawing)) echo 'checked="checked"'; ?>>Ink</li>

            <li><input type="checkbox" name="drawing[]" value="markers" <?php if (isset($_POST['drawing']) && in_array('markers', $drawing)) echo 'checked="checked"'; ?>>Markers</li>

            <li><input type="checkbox" name="drawing[]" value="digital" <?php if (isset($_POST['drawing']) && in_array('digital', $drawing)) echo 'checked="checked"'; ?>>Digital</li>

            <li><input type="checkbox" name="drawing[]" value="paint" <?php if (isset($_POST['drawing']) && in_array('paint', $drawing)) echo 'checked="checked"'; ?>>Paint</li>

        </ul>
        <span class="error"> <?php echo $drawing_error; ?></span>
        <!-- end drawing -->

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