<?php
session_start();
if(!isset($_SESSION['user']) AND !isset($_SESSION['role']))
{
    header("Location: index.php");
}
?>