<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/_lib/lib.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/_lib/_con.php";

    if ($_SESSION["userId"]) {
        gotoUrl('../index.php');
    }

    $sqlGenre = 
    "
    select *
    from Genre
    order by 
    "
?>