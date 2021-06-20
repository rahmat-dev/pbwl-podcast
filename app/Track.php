<?php

namespace App;

class Track extends Connection
{
  public function __construct()
  {
    parent::__construct();
  }

  public function show()
  {
    $sql = "SELECT * FROM tb_track";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();

    $data = [];
    while ($row = $stmt->fetch()) {
      $data[] = $row;
    }

    return $data;
  }
}
