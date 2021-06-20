<?php

namespace App;

class User extends Connection
{
  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    $username = $_POST['user_name'];
    $password = $_POST['user_password'];

    $sql = "SELECT * FROM tb_users WHERE user_name=:user_name";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam('user_name', $username);
    $stmt->execute();

    $row = $stmt->fetch();

    if (!empty($row) && password_verify($password, $row['user_password'])) {
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['user_nama_lengkap'] = $row['user_nama_lengkap'];
      return true;
    } else {
      $_SESSION['error'] = 'Username/password tidak sesuai';
      return false;
    }
  }

  public function register()
  {
    $name = $_POST['user_nama_lengkap'];
    $username = $_POST['user_name'];
    $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM tb_users WHERE user_name=:user_name";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam('user_name', $username);
    $stmt->execute();

    $row = $stmt->fetch();

    if (empty($row)) {
      $sql = "INSERT INTO tb_users (user_nama_lengkap, user_name, user_password) 
			VALUES (:user_nama_lengkap, :user_name, :user_password)";
      $stmt = $this->db->prepare($sql);
      $stmt->bindParam(":user_nama_lengkap", $name);
      $stmt->bindParam(":user_name", $username);
      $stmt->bindParam(":user_password", $password);
      $stmt->execute();
      $_SESSION['success'] = 'Berhasil registrasi';
      return true;
    } else {
      $_SESSION['error'] = 'Username sudah digunakan';
      return false;
    }
  }
}
