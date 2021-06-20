<?php

namespace App;

use PDO;
use PDOException;

class Connection
{
  protected $db;

  public function __construct()
  {
    try {
      $this->db = new PDO('mysql:host=localhost;dbname=pbwl_podcast', 'root', '');
    } catch (PDOException $e) {
      die('Error: ' . $e->getMessage());
    }
  }
}
