<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form3</title>
</head>

<body>
    <h1>My form3.php</h1>

    <form action="" method="POST">
        <fieldset>
            <label for="">First Name</label>
            <input type="text" name="first_name">

            <label for="">Last Name</label>
            <input type="text" name="last_name">

            <label for="">Email</label>
            <input type="email" name="email">

            <label>Comments</label>
            <textarea name="comments" cols="30" rows="10"></textarea>

            <input type="submit" value="Submit">
            <p><a href="">RESET</a></p>


        </fieldset>




    </form>

    <?php
    //Logic for the isset - if isset has been defined by input than we dont need to show the form. otherwise well show the form to collect user data.

    // our second if statement - if I have empty fields, we will echo "Please fill out all fields to submit!" Otherwise we will echo the information captured by user input and assigned to the if isset

    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['comments'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        //we will nest another if statement in reference to the fields being empty
        if (empty($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['comments'])) {

            echo '<p class="error">Please fill out all fields to submit!</p>';
        } else {
            echo '
            <div class="box">
            
            <h2>Hello ' . $first_name . ' ' . $last_name . '</h2>

            <p>We have recieved your <b>email</b> as ' . $email . ' and will be reviewing your <b>comments:</b> ' . $comments . '</p>
            
            
            
            </div>
            
            
            
            ';
        } //end else

    } //end if isset

    ?>
</body>

</html>