<?php
include "connectdb.php";
    $statement = "SELECT * FROM schepen";
    $sth = $db->prepare($statement);
    $sth->execute();
?>