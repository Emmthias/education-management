<?php
global $conn;
//database configurations
const DB_HOST = "db";
const DB_UNAME = "jp";
const DB_PASS = "test";
const DB_DNAME = "quizller";
$conn=mysqli_connect(DB_HOST,DB_UNAME,DB_PASS,DB_DNAME);

?>
