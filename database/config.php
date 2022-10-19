<?php
//database configurations
define("DB_HOST","localhost");
define("DB_UNAME","quizapp");
define("DB_PASS","password");
define("DB_DNAME","quizapp");
$conn=mysqli_connect(DB_HOST,DB_UNAME,DB_PASS,DB_DNAME);
// echo "Connected to database";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "failed";
  }
?>
