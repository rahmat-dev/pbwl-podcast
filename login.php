<?php

if (isset($_SESSION['error'])) {
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
  echo $_SESSION['success'];
  unset($_SESSION['success']);
}

?>

<div>
  <form method="POST" action="auth_process.php">
    <div>
      <label>Username</label>
      <input type="text" name="user_name" />
    </div>
    <div>
      <label>Password</label>
      <input type="password" name="user_password" />
    </div>
    <button name="action" value="login">Masuk</button>
  </form>
</div>