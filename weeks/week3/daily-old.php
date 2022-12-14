<?php
// I was having the hardest time figuring out how to make the date be today!! turns out this date_default_timezone function needs to come before the $today issset declaration. 

date_default_timezone_set('America/Los_Angeles');

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

if ($today == 'Sunday') {
    echo '<body style="background-color: #dab68d">';
} else {
    echo '<body style="background-color:azure">';
}
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
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies of the Day</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        img {
            width: 100%;
            max-width: 400px;
            margin: 30px;

        }

        ul {
            margin: 20px 0;
        }

        p {
            max-width: 650px;
        }



        h1,
        h2 {
            text-align: center;
            margin-top: 30px;
        }

        #wrapper {

            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>




<body>
    <div id="wrapper">
        <h1>
            Movie's Playing Today
        </h1>

        <?php echo "Today is $today"; ?>

        <?php echo $movie; ?>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">

        <?php echo $content; ?>
        <h2>Check out the rest of the weeks showings</h2>

        <ul>

            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
    <!-- end wrapper -->
</body>

</html>