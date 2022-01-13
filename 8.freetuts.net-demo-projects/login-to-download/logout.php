<?php
require "user.php";
$user->set_not_logged();
header('Location:index.php');
?>