<?php

    // connects to db
    function get_db(): PDO {
        return new PDO('sqlite:' .__DIR__. '/subscribers.db');
    }

?>
