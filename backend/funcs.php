<?php 
    // globals
    $db_path = 'test.db';
    $saved = 0;

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
