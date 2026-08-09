<html lang = 'en'>
<head>
    <title>venvio - email saved!</title>
    <link rel='icon' href='../assets/favicon/favicon.ico'>
    <link rel='stylesheet' href='../css/styles.css'>
</head>
<?php
    // includes function for connecting to db
    require_once __DIR__. '/../../backend/get_db.php';
?>

<?php 
    // globals
    $saved = false;

    // init email and error var
    $email = $emailErr = '';

    // test for valid chars
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
?>

<body style='background-color: black;'>
<main>
<div class='page_container fade_in'>
    <a href='../index.php' style='font-size: 30px;'>&lt;&lt; Home</a>
    <div class='container' >
        <center><img src='../assets/photos/moon_logo.png' id='moon_image'><center>
    </div>

    <?php 
        // create error or assign email var is valid
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             if (empty($_POST['email'])) {
                $emailErr = 'Email is required.';
             } else {
                $email = test_input($_POST['email']);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = 'Invalid email format received. Please enter a correct email address.';
                }
             }
         }

        // if valid email, add it to db
        if (empty($emailErr)) {
            $db = get_db(); // connect
            $stmt = $db->prepare(
                    "INSERT INTO subscribers(email) VALUES(:email)"
            );
            $stmt->bindValue(":email", $email, SQLITE3_TEXT);
            $stmt->execute();
            $db->close();

            $saved = true;
        }
    ?>

    <p class = 'body'>
        <?php
            if (!empty($emailErr)) {
                echo "$emailErr";
            }
            elseif ($saved == true) {
                echo 'Your email has been saved. Thank you!';
            }
            else {
                echo 'An error occurred. Please try again later.';
            }
        ?>
    </p>

</div>
</main>
</body>
</html>
