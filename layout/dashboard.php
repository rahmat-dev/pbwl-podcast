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
      <h1><a href="index.php" class="text-white">PBWLCast</a></h1>
      <div class="navbar-menu">
        <a href="dashboard.php" class="menu-item">Dashboard</a>
        <a href="dashboard.php?page=artist" class="menu-item">Artis</a>
        <a href="dashboard.php?page=album" class="menu-item">Album</a>
        <a href="dashboard.php?page=track" class="menu-item">Podcast</a>
      </div>
      <div class="navbar-menu">
        <span class="text-white mr-8">Hai, <?= $_SESSION['user_nama_lengkap'] ?></span>
        <a href="logout.php" class="menu-item">Keluar</a>
      </div>
    </nav>

    <main>
      <?php
      if (isset($_GET['page'])) {
        include $_GET['page'] . '.php';
      } else {
      ?>
        <h2>Halaman Dashboard</h2>
      <?php
      }
      ?>
    </main>
  </div>
</body>

</html>