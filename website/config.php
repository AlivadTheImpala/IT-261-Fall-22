<?php
ob_start();
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> ' . $myFile . ' </b> on line: <b> ' . $myLine . ' </b>';
        echo 'Error message: <b> ' . $errorMsg . '</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }
}

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About Page of our Website Project';
        $body = 'about inner';
        break;
    case 'daily.php':
        $title = 'Daily page of our Website Project';
        $body = 'daily inner';
        break;
    case 'project.php':
        $title = 'Project page of our Website Project';
        $body = 'project inner';
        break;
    case 'contact.php':
        $title = 'Contact page of our Website Project';
        $body = 'contact inner';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our Website Project';
        $body = 'gallery inner';
        break;
    case 'thx.php':
        $title = 'Thanks for reaching out';
        $body = 'thx inner';
        break;
}
// Our navigation Array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav)
{
    $my_return = '';
    foreach ($nav as $key => $value) {


        if (THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" style="color:red;" href="' . $key . '"> ' . $value . '</a></li>';
        } else {
            $my_return .= '<li><a style="color:green;" href="' . $key . '"> ' . $value . '</a></li>';
        }
    } //end foreach
    return $my_return;
} //end makelinks function

date_default_timezone_set('America/Los_Angeles');

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

//switch for our daily.php page that displays a different movie depending on the day of the week.
switch ($today) {
    case 'Saturday':
        $movie = '<h2>The Matrix</h2>';
        $pic = 'matrix.jpg';
        $alt = 'The Matrix 1';
        $content = '<p>Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question -- What is the Matrix? Neo is contacted by Trinity (Carrie-Anne Moss), a beautiful stranger who leads him into an underworld where he meets Morpheus. They fight a brutal battle for their lives against a cadre of viciously intelligent secret agents. It is a truth that could cost Neo something more precious than his life.</p>';
        break;
    case 'Sunday':
        $movie = '<h2>Blade</h2>';
        $pic = 'blade.jpg';
        $alt = 'Blade';
        $content = '<p>A half-mortal, half-immortal is out to avenge his mother\'s death and rid the world of vampires. The modern-day technologically advanced vampires he is going after are in search of his special blood type needed to summon an evil god who plays a key role in their plan to execute the human race.</p>';
        break;
    case 'Monday':
        $movie = '<h2>Hell Raiser</h2>';
        $pic = 'pinhead.jpg';
        $alt = 'Hellraiser';
        $content = '<p>Sexual deviant Frank (Sean Chapman) inadvertently opens a portal to hell when he tinkers with a box he bought while abroad. The act unleashes gruesome beings called Cenobites, who tear Frank\'s body apart. When Frank\'s brother (Andrew Robinson) and his wife, Julia (Clare Higgins), move into Frank\'s old house, they accidentally bring what is left of Frank back to life. Frank then convinces Julia, his one-time lover, to lure men back to the house so he can use their blood to reconstruct himself.</p>';
        break;
    case 'Tuesday':
        $movie = '<h2>Underworld</h2>';
        $pic = 'underworld.jpg';
        $alt = 'Underworld';
        $content = '<p>Under cover of night, vampires engage in an age-old battle with their sworn enemies, the Lycans, a clan of violent werewolves. Selene (Kate Beckinsale), a vampire orphaned in the wake of a bloody Lycan attack, works for the vampire clan as a trained killer. When the Lycans take a mysterious interest in Michael Corvin (Scott Speedman), an exceptional mortal doctor, Selene struggles to save him from Lucian (Michael Sheen), a ruthless Lycan leader hellbent on ending the vampire bloodline.</p>';
        break;
    case 'Wednesday':
        $movie = '<h2>Blade 2</h2>';
        $pic = 'bladedos.jpg';
        $alt = 'Blade 2';
        $content = '<p>Exploding from the pages of Marvel Comics comes the thrilling follow-up to the blockbuster "Blade." Half Man ... half vampire, and consumed by a desire to avenge the curse of his birth and save the human race from a blood-drenched Armageddon. In this newest action-packed adventure, Blade (Wesley Snipes) is forced to team up with the very vampires he hates in order to overcome a new type of monster which threatens to eradicate both races.</p>';
        break;
    case 'Thursday':
        $movie = '<h2>Matrix Reloaded</h2>';
        $pic = 'matrixdos.jpg';
        $alt = 'The Matrix Reloaded';
        $content = '<p>Freedom fighters Neo (Keanu Reeves), Trinity (Carrie-Anne Moss) and Morpheus (Laurence Fishburne) continue to lead the revolt against the Machine Army, unleashing their arsenal of extraordinary skills and weaponry against the systematic forces of repression and exploitation. In their quest to save the human race from extinction, they gain greater insight into the construct of The Matrix and Neo\'s pivotal role in the fate of mankind.</p>';
        break;
    case 'Friday':
        $movie = '<h2>Queen of the Damned</h2>';
        $pic = 'qod.jpg';
        $alt = 'Queen of the Damned';
        $content = '<p>Queen of the Damned Follows the legendary vampire Lestat (Stuart Townsend), who has reinvented himself as a rock star in the contemporary American music scene. His music wakes Akasha (Aaliyah), the queen of all vampires, and inspires her desire to make Lestat her king. Akasha\'s malevolent power is so great that all the immortal vampires must stand against her if they want to survive. Meanwhile, a young London woman with a fascination for the dark side (Marguerite Moreau) falls in love with Lestat.</p>';
        break;
} //end today switch for daily.php 

//my contact.php section

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
// $wines = '';
$regions = '';
$comments = '';
$privacy = '';
$drawing = '';

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$gender_error = '';
$phone_error = '';
// $wines_error = '';
$regions_error = '';
$comments_error = '';
$privacy_error = '';
$drawing_error = '';



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

    if (empty($_POST['phone'])) { // if empty, type in your number
        $phone_error = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_error = 'Please enter your number in this format: xxx-xxx-xxxx';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end phone if statement

    if (empty($_POST['drawing'])) {
        $drawing_error = 'Please pick a medium';
    } else {
        $drawing = $_POST['drawing'];
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


    //Function for my contact.php homework which turns the drawing array into string items.
    function my_drawing($drawing)
    {
        $my_return = '';

        if (!empty($_POST['drawing'])) {
            $my_return = implode(', ', $_POST['drawing']);
        } else {
            $drawing_error = 'Please select any applicable drawing mediums!';
        }
        return $my_return;
    } //end function

    //if everything is filled out on the contact form than we can go ahead and allow the user to submit and send the email.
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['phone'],  $_POST['regions'], $_POST['comments'], $_POST['privacy'], $_POST['drawing'])) {

        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test Email on ' . date('m/d/y, h i A');
        $body = '
        First Name: ' . $first_name . ' ' . PHP_EOL . '
        Last Name: ' . $last_name . ' ' . PHP_EOL . '
        Email: ' . $email . ' ' . PHP_EOL . '
        Gender: ' . $gender . ' ' . PHP_EOL . '
        Phone: ' . $phone . ' ' . PHP_EOL . '
        Region: ' . $regions . ' ' . PHP_EOL . '
        Comments: ' . $comments . ' ' . PHP_EOL . '
        Drawing Medium: ' . my_drawing($drawing) . '' . PHP_EOL . '
        ';

        $headers = array(
            'From' => $email


        );
        //this is what checks to make sure that everything is filled out.
        if (
            !empty($first_name && $last_name && $email && $gender && $phone && $regions && $comments && $drawing) &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])
        ) {



            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    } //end function

} //end server request statement
