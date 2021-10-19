<?php



if($_GET)
{
    include("../includes/db.php");

    $del=$db->prepare("DELETE FROM tbl_uni WHERE title= $_GET["id"]");
}