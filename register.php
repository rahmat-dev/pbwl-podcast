<?php

if (isset($_SESSION['error'])) {
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}

?>

<div>
  <form method="POST" action="auth_process.php">
    <div>
      <label>Nama Lengkap</label>
      <input type="text" name="user_nama_lengkap" required />
    </div>
    <div>
      <label>Username</label>
      <input type="text" name="user_name" required />
    </div>
    <div>
      <label>Password</label>
      <input type="password" name="user_password" required />
    </div>
    <button name="action" value="register">Daftar</button>
  </form>
</div>