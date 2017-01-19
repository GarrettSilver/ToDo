<?php
    $server = "localhost";
    $db_user = "UserList";
    $db_pass = "UserList";
    $db_name = "todo";

    mysql_connect($server, $db_user, $db_pass) or die("No connection to server");
    mysql_select_db($db_name) or die("No connection to database");
?>