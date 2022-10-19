<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal Page</title>
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>

<body>
  <h1><a href="index.php">Brandon's Portal Page</a></h1>

  <h2>The navigation below holds our big assignments</h2>
  <nav>
    <ul>
      <li><a href="">Switch</a></li>
      <li><a href="">Troubleshoot</a></li>
      <li><a href="">Calculator</a></li>
      <li><a href="">Email</a></li>
      <li><a href="">Database</a></li>
      <li><a href="">Gallery</a></li>
    </ul>
  </nav>
  <div class="wrapper">


    <main>
      <h2>About Brandon</h2>
      <img class="right" src="images/brandon.jpeg" alt="Picture of Brandon and his partner" />
      <p>
        Hey there! Im Brandon and I am currently a student at Seattle Central
        College. Im currently working towards an associate degree for web
        development. I really enjoy figuring out how things work and
        customizing the design of a website to fit my needs. Im an artists by
        nature so I really enjoy nerding out over CSS. Im excited to tackle
        javascript and play around with more interactive elements of a web
        page. I also enjoy drawing and have recently begun post my work on
        <a href="https://www.instagram.com/alivad_the_illustrator/">instagram </a>primarily, but I'll be posting my work on other platforms in the near
        future.
      </p>

      <img src="images/mamp.png" alt="screenshot of mamp localhost">
      <img src="images/mamp-error.png" alt="screenshot of mamp error">

    </main>

    <aside>
      <h2>Weekly Class Exercises</h2>
      <h3>Week 2</h3>
      <ul>
        <li><a href="weeks/week2/var.php">var.php</a></li>
        <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
        <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
        <li><a href="weeks/week2/currency.php">currency.php</a></li>
        <li><a href="var.php">placeholder</a></li>
      </ul>
      <h3>Week 3</h3>
      <ul>
        <li><a href="weeks/week3/index.php">index.php</a></li>
        <li><a href="weeks/week3/date.php">date.php</a></li>
        <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
        <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
        <li><a href="weeks/week3/if.php">if.php</a></li>
        <li><a href="weeks/week3/switch.php">switch.php</a></li>
      </ul>
    </aside>
  </div>
  <!-- end wrapper -->

  <footer>
    <ul>
      <li>Copyright &copy; 2022</li>
      <li>All Rights Reserved</li>
      <li><a href="../index.php">Web Design by Brandon Davila</a></li>
      <li><a id="html-checker" href="#">HTML Validation</a></li>
      <li><a id="css-checker" href="#">CSS Validation</a></li>
    </ul>

    <script>
      document
        .getElementById("html-checker")
        .setAttribute(
          "href",
          "https://validator.w3.org/nu/?doc=" + location.href
        );
      document
        .getElementById("css-checker")
        .setAttribute(
          "href",
          "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
        );
    </script>
  </footer>

</body>

</html>