<!DOCTYPE html>
<html lang='en'>
<head>
    <title>venvio</title>
    <link rel='icon' href='assets/favicon/favicon.ico'>
    <link rel='stylesheet' href='css/styles.css'>
</head>

<?php
    $updated = "08/17/2026";
?>

<body class='home' style='background-color: black'>
<main>

<!-- holds entire page -->
<div class='page_container fade_in'>
    <div>
        <script type="text/javascript" src="https://www.counters-free.net/count/isur"></script><br>
    </div> 

    <div class='container'>
        <center><img src='assets/photos/moon_logo.png' id='moon_image'><center>
    </div>

    <!-- banner div -->
    <div class='container'>
        <p id='banner_text'>
            <a href='pages/journal.html'>Journal</a>
            <a href='pages/music.html'>Music</a>
            <a href='pages/books.html'>Books</a>
            <a href='pages/challenges.html'>Challenges</a>
        </p>
    </div>

    <!-- about section -->
    <div class='col_container' style='background-color: black; border: 2px double rgb(241,195,147); padding: 10px;'>
        <p class='body'>I am a computer science graduate student from the midwestern U.S. Most of my practical experience is in designing data pipelines for Alzheimer's Disease research. I have always been interested in both the sciences and the humanities (my undergraduate degree is in psychology).
        </p>

        <p class='body'>You can find journal-style entries on the <a href='pages/journal.html'>journal</a> page.</a> The other two main pages, <a href='pages/music.html'>music</a> and <a href='pages/books.html'>books</a> showcase my favorites from these two art forms. The <a href='pages/challenges.html'>challenges</a> page shows some challenges that I have undertaken for fun.
        </p>
    </div>

    <div class='tooltip'><p class='body' style='color: #f2b76c;'>Subscribe to my email newsletter below!</p>
        <span class='tooltiptext'>My emails will be sent from "venvio@proton.me"</span>
    </div>

    <form
      action="https://buttondown.com/api/emails/embed-subscribe/venvio"
      method="post"
      class="embeddable-buttondown-form"
    >
      <label for="bd-email" class='body'>Email:</label>
      <input type="email" name="email" id="bd-email" />
      <input type="submit" value="Subscribe" />

      <p>
        <a href="https://buttondown.com/refer/venvio" target="_blank">
          Powered by Buttondown.
        </a>
      </p>

    </form>
    <!-- bottom container -->
    <div class='col_container'>
        <!-- External Links -->
        <div>
            <p class='body'>
            External Links:
            <a href='https://www.youtube.com/@venv_io'>YouTube</a> 
            <a href='https://github.com/venvio'>GitHub</a> 
            <a href='mailto:venvio@proton.me'>Email</a>
            </p>
        </div>


        <!-- copyright info -->
        <div>
            <p class='body'>© 2026 venvio<br>Updated: <?php echo "$updated" ?> <br>
        </div>
    </div>

</div>
</main>
</body>
</html>
