<?php
require_once __DIR__ . "/autoload/autoload.php";
unset($_SESSION['cart']);
header("location:index.php");

?>