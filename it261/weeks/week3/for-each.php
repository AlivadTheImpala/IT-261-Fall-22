<?php
// our wine list, we shall put this in an array YAY!!!

echo '<h2>This will be my wine list</h2>';

$wines = array(
    'Cabarnet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);

// since we cant echo an array, well use a foreach loop
echo '<ul>';
foreach ($wines as $key) {
    echo '<li>' . $key . '</li>';
}
echo '</ul>';

echo '<h2>Movies and Shows list which will have both a key and a value</h2>';

$shows = [
    'Apple TV' => 'Severance',
    'Apple TV' => 'For All Mankind',
    'Showtime' => 'City on a Hill',
    'Showtime' => 'Homeland',
    'Movie' => 'Top Gun Maverick',
    'HBO Max' => 'Hacks'
];

echo '<ul>';
foreach ($shows as $key => $value) {
    echo '<li><b>' . $key . '</b>: ' . $value . '</li>';
}
echo '</ul>';

echo '<h2>Time for our navigation that will have both a key and a value</h2>';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<ul>';
foreach ($nav as $key => $value) {
    echo '<li><a href="' . $key . '"> ' . $value . '</a></li>';
}
echo '</ul>';
