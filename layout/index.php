<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PBWL Podcast</title>
  <link rel="stylesheet" href="<?= ASSET ?>css/main.css">
</head>

<body>
  <div class="container">
    <nav class="navbar">
      <h1 class="navbar-brand">PBWLCast</h1>
      <div class="navbar-menu">
        <?php if (isset($_SESSION['user_id'])) : ?>
          <a href="dashboard.php" class="menu-item">Dashboard</a>
        <?php else : ?>
          <a href="index.php?page=login" class="menu-item">Login</a>
        <?php endif; ?>
      </div>
    </nav>

    <main>
      <?php
      if (isset($_GET['page'])) {
        include $_GET['page'] . '.php';
      } else {
        include 'home.php';
      }
      ?>
    </main>
  </div>
</body>

</html>