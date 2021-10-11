<?php
include('inc_sessioncheck.php');

//destroying all sessions
session_destroy();

//redirect to login page
header("Location: index.php");

?>