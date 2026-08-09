<?php

    // connects to db
    function get_db(): SQLite3 {
        return new SQLite3(__DIR__. '/subscribers.db');
    }

?>
