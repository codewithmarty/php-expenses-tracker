<?php

  session_start();

  $_SESSION['expenses'][] = [
    'date' => $_POST['date'],
    'description' => $_POST['description'],
    'category' => $_POST['category'],
    'amount' => $_POST['amount'],
  ];

// Redirect back to index.php
  header('Location: index.php');

?>
