<?php
session_start();
require_once __DIR__. "/../libraries/database.php";
require_once __DIR__. "/../libraries/function.php";
$db = new Database;
date_default_timezone_set('Asia/Ho_Chi_Minh');

define("ROOT",$_SERVER['DOCUMENT_ROOT']."càphe/public/uploads");
?>