<?php
include('server.php');
// header include will go here
//include(./includes/header.php);

?>

<h1>Register Now</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"></form>

<fieldset>

    <label>First Name</label>
            <input 
            type="text" 
            name="first_name" 
            value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>"
            >
            <!-- the rules for this span are all above the doctype ^^^ -->
            <span class="error"> <?php echo $first_name_error; ?></span>

    <label>Last Name</label>
        <input 
            type="text" 
            name="last_name" 
            value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>"
        >

        <span class="error"> <?php echo $last_name_error; ?></span>
        <!-- end first/last name -->


    <label>Username</label>
        <input 
        type="text" 
        name="username" 
        value="<?php if (isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>"
        >

        <span class="error"> <?php echo $username_error; ?></span>    

    <label>Email</label>
        <input 
        type="email" 
        name="email" 
        value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"
        >

        <span class="error"> <?php echo $email_error; ?></span>

    <label>Password</label>
        <input 
        type="password" 
        name="password1" 
        value="<?php if (isset($_POST['password1'])) echo htmlspecialchars($_POST['password1']); ?>"
        >

        <span class="error"> <?php echo $password_error; ?></span>
   
    <label>Confirm Password</label>
        <input 
        type="password" 
        name="password2" 
        value="<?php if (isset($_POST['password2'])) echo htmlspecialchars($_POST['password2']); ?>"
        >

        <span class="error"> <?php echo $password_error; ?></span>
   
    <label>Privacy</label>
        <ul>

            <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"'; ?>>Privacy</li>
        </ul>

        <span class="error"> <?php echo $privacy_error; ?></span>
            <!-- end privacy -->

    <button type="submit" name="reg_user" class="btn">Register</button>
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">Reset</button>


</fieldset>