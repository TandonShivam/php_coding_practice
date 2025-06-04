<?php
session_start();

// Set session variables
$_SESSION["username"] = "shivam";
$_SESSION["role"] = "admin";

echo "Before unset and destroy:<br>";
print_r($_SESSION);

// Remove all session variables
session_unset();

echo "\n\nAfter session_unset():\n";
print_r($_SESSION);

// Session still exists here
var_dump(session_id());


// Destroy the session
session_destroy();

echo "\n\nAfter session_destroy():\n";
print_r($_SESSION); // Variables still accessible in this script runtime

// Session still exists here
var_dump(session_id());
?>
