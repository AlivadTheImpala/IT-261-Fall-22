<?php
ob_start();
//here, basename() looks at the current filename based on $_SERVER['PHP_SELF'] and assigns it a name of THIS_PAGE. This will be used for our navigation where it matches the $key to the value of THIS_PAGE.

define('DEBUG', 'TRUE');  // We want to see our errors
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

include('credentials.php');
$success = 'You have successfully logged in!';
$errors = array();

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
// with this switch, we apply the THIS_PAGE constant from above. 
//In the case where index.php is the active page, we will assign the $title variable with Home page, which we can use in the header include to dynamically display it's title. 
//We can assign a dynamic body class to our body tag, by creating the $body variable and assigning it, home. 
// the $title and $body variables are assigned to each case, which can then be used where ever we want to echo those variables.
switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home page';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About page';
        $body = 'about inner';
        break;
    case 'daily.php':
        $title = 'Daily page';
        $body = 'daily inner';
        break;
    case 'project.php':
        $title = 'Project page';
        $body = 'project inner';
        break;
    case 'project-view.php':
        $title = 'Project | More Info';
        $body = 'project inner';
        break;
    case 'contact.php':
        $title = 'Contact page';
        $body = 'contact inner';
        break;
    case 'login.php':
        $title = 'Login';
        $body = 'login inner';
        break;
    case 'register.php':
        $title = 'Register now';
        $body = 'register inner';
        break;
}
//Our navigation as an array. The filenames represent the key in our foreach loop. 
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
    //we'll define our $links with an empty value
    //the foreach loop will look through the $nav array above, and assign the variables $key and $nav_link_name to our values.
    $links = '';
    foreach ($nav as $key => $nav_link_name) {

        //to highlight our active page on the nav bar, we create an if statement that checks to see if THIS_PAGE is the same as the $key variable. If it is, the <a> tag will have a class of "active", otherwise we wont have any class...yet??
        if (THIS_PAGE == $key) {
            $links .= '<li><a class="active"  href="' . $key . '"> ' . $nav_link_name . '</a></li>';
        } else {
            $links .= '<li><a  href="' . $key . '"> ' . $nav_link_name . '</a></li>';
        }
    } //end foreach
    return $links;
} //end makelinks function


date_default_timezone_set('America/Los_Angeles');


if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

//switch for our daily.php page that displays a different art_topic depending on the day of the week.
switch ($today) {
    case 'Saturday':
        $art_topic = '<b>Tonal Values</b>';
        $pic = 'tonal-values.jpg';
        $alt = 'Four rows of tonal studies using pencil, light to dark ';
        $content = '<p>Not to be confused with color, tone is a quality of lightness and darkness. Color is defined by its hue, chroma and tonal value. Tonal value is the lightness and darkness of a color, and it\'s this value we have to acknowledge and constantly assess when making monochromatic drawings.</p>

       <p> When describing an object as black, we are acknowledging both its "local color" (black) and also its tonal value (black is dark). But we must recognize that within the blackness there may be differing amounts of absorbed and reflected light that require us to draw changes of tone. Where these changes of tone are and how well they are seen is crucial to the depiction of the object\'s character, form and context.</p>';
        break;
    case 'Sunday':
        $art_topic = '<b>Proportion</b>';
        $pic = 'vitruvian-man.jpg';
        $alt = 'The Vitruvian Man which shows the proportions of a human being fitting perfectly within a circle and a square.';
        $content = '<p>Proportion is the principle of art that refers to relative size. The principles of art differ from the elements of art. Most, if not all of the principles of art deal with how the elements art are arranged in a work of art.
        Proportion is largely about the relationship of the size of one element when compared to another. When drawing or painting realistically, proportion is important. If the proportions are incorrect, then the resulting image will look less realistic or abstracted.</p>
        
        <p>Alternatively, artists can use proportion for effect. By manipulating proportion, the artist can make his/her subject seem strong, weak, funny, mysterious, etc. We can exaggerate proportions to emphasize a meaning or an element within the scene. For example, a caricature artist distorts proportion in order to create a stylized image of the subject.</p>';
        break;
    case 'Monday':
        $art_topic = '<b>Perspective</b>';
        $pic = 'perspective.jpg';
        $alt = '3 by 3 grid showing a drawing done in 1 point persepctive with the vanashing point and horizon line at the center of the composition. ';
        $content = '<p>Visual depth is expressed through linear and atmospheric perspective, as well as color use. With linear perspective, depth is achieved through lines and the size and placement of forms. And though compositions can vary in complexity, the basic terms and definitions covered in this section are inherent to linear perspective drawings.</p>

        <p>The horizon is the line for which the sky meets the land or water below. The height of the horizon will affect the placement of the vanishing point(s) as well as the scene\'s eye level.</p>
        
        <p>The vanishing point is the place where parallel lines appear to come together in the distance. In the picture, below, you can see how the parallel lines of the road recede and visually merge to create a single vanishing point on the horizon. A scene can have a limitless number of vanishing points.</p>
        
        <p>The ground plane is the horizontal surface below the horizon. It could be land or water. In the image below, the ground plane is level. If it were sloped or hilly, the vanishing point–created by the path\'s parallel lines–may not rest on the horizon and may appear as if it\'s on an inclined plane.</p>
        
        <p>The orthogonal lines are lines which are directed to a vanishing point; the parallel lines of railroad tracks, for example. The word “orthogonal” actually means right angle. It refers to right angles formed by lines such as the corner of a cube shown in perspective.</p>
        
        <p>The vantage point, not to be confused with the vanishing point, is the place from which a scene is viewed. The vantage point is affected by the placement of the horizon and the vanishing points.</p>
        
        <p><b>information from <a href="https://www.artistsnetwork.com/art-mediums/learn-to-draw-perspective/">Artists Network</a></b></p>';
        break;
    case 'Tuesday':
        $art_topic = '<b>Contour</b>';
        $pic = 'contour.jpg';
        $alt = 'Picture of hands drawn using contour lines to imply the three dimensional space of the hands.';
        $content = '<p>Contour drawing is a great drawing exercise artists use to improve their skills. Because contour drawings rely on accurate proportions, it can be used to train artists\' abilities in rendering space, form, mass and distance. This relies on analysing the reference, then portraying features of the subject or object with just line, so that it appears recognisable to the viewer.</p>

        <p>Contour drawing can also be used to create more expressive and gestural drawings. This is where the artist exaggerates or simplifies the forms to express their own interpretation. This can result in some interesting and unique drawings!</p>';
        break;
    case 'Wednesday':
        $art_topic = '<b>Blade 2</b>';
        $pic = 'bladedos.jpg';
        $alt = 'Blade 2';
        $content = '<p>Exploding from the pages of Marvel Comics comes the thrilling follow-up to the blockbuster "Blade." Half Man ... half vampire, and consumed by a desire to avenge the curse of his birth and save the human race from a blood-drenched Armageddon. In this newest action-packed adventure, Blade (Wesley Snipes) is forced to team up with the very vampires he hates in order to overcome a new type of monster which threatens to eradicate both races.</p>';
        break;
    case 'Thursday':
        $art_topic = '<b>Matrix Reloaded</b>';
        $pic = 'matrixdos.jpg';
        $alt = 'The Matrix Reloaded';
        $content = '<p>Freedom fighters Neo (Keanu Reeves), Trinity (Carrie-Anne Moss) and Morpheus (Laurence Fishburne) continue to lead the revolt against the Machine Army, unleashing their arsenal of extraordinary skills and weaponry against the systematic forces of repression and exploitation. In their quest to save the human race from extinction, they gain greater insight into the construct of The Matrix and Neo\'s pivotal role in the fate of mankind.</p>';
        break;
    case 'Friday':
        $art_topic = '<b>Queen of the Damned</b>';
        $pic = 'qod.jpg';
        $alt = 'Queen of the Damned';
        $content = '<p>Queen of the Damned Follows the legendary vampire Lestat (Stuart Townsend), who has reinvented himself as a rock star in the contemporary American music scene. His music wakes Akasha (Aaliyah), the queen of all vampires, and inspires her desire to make Lestat her king. Akasha\'s malevolent power is so great that all the immortal vampires must stand against her if they want to survive. Meanwhile, a young London woman with a fascination for the dark side (Marguerite Moreau) falls in love with Lestat.</p>';
        break;
} //end today switch for daily.php 
