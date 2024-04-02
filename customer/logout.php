<?php

  // Inialize session
  session_start();

// Delete certain session
  unset($_SESSION['customer_uid']);
  unset($_SESSION['customer_name']);
  unset($_SESSION['customer_email']);
  // Delete all session variables
  
  session_destroy();

 // Jump to login page
 header('Location: login.php');

  ?>