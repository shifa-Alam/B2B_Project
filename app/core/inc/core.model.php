<?php
add_log( "core.model.php ");

global $db_connection;
$db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

function get_table_name($name){return DB_PREFIX . $name; }