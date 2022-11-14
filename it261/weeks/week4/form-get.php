<?php
// this is our first form
// we will be using the $_GET golbal variable

// our logic is: we are asking if a name and email in the form.
// if it is set, great!
// if not then we will show the form.


// the isset here is asking if theres already a name and email that have been declared/submitted. If there has been, then they are being assigned to the variables $name and $email. otherwise we'll display the form to collect that information.
if (isset($_GET['name'], $_GET['email'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
} else {
    echo '
    <form action = "" method = "get">

    <label>NAME</label>
     <input type = "text" name ="name">
    

    <label>EMAIL</label>
    <input type="email" name="email">
    <input type="submit" value="Confirm">

    </form>
    ';
}
