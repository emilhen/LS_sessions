<?php

$successMessage = '';
$errorMessage = '';
 
if (isset($_POST['submitS'])) {
	require '../control/signup.php';
}

if (isset($_POST['submitL'])) {
	require '../control/login.php';
}

if (isset($_COOKIE['sessionStatus'])) {
    $successMessage = $_COOKIE['sessionStatus'];
} 

?>