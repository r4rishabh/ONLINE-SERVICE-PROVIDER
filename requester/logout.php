<?php
session_start();
session_destroy();
header("location: /osp/login.php");
?>