<?php
    require_once('../libs/pgsql.inc.php');

    $query = "SELECT * FROM users WHERE id=" . $_GET['id'];
    dbQuery($query, false, true, true);
?>
