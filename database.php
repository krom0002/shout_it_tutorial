<?php
// Connect to MySQL
$con = mysqli_connect("localhost", "root", "Jaguars24_7", "shout_it");

// Test EBML_ID_CONTENTENCRYPTION
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}