<?php
session_start();
 include '../db_connection.php';

 if (!isset($_SESSION["name"])) {
  header("Location: ../login-page");
  exit();
}
?>