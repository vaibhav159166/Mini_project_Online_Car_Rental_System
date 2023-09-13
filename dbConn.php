<?php

$db = mysqli_connect("localhost","root","","testing");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>