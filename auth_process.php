<?php

require_once 'inc/config.php';

$User = new App\User();

if (isset($_POST['action']) && $_POST['action'] === 'login') {
  if ($User->login()) {
    header('Location: ' . URL);
  } else {
    header('Location: ' . URL . 'index.php?page=login');
  }
}

if (isset($_POST['action']) && $_POST['action'] === 'register') {
  if ($User->register()) {
    header('Location: ' . URL . 'index.php?page=login');
  } else {
    header('Location: ' . URL . 'index.php?page=register');
  }
}
