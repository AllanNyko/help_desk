<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">
    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Help Desk
  </a>


  <?php if (isset($_SESSION['auth'])) { ?>
  <ul class="nav-list d-flex">
    <li class="nav-item mx-3">
      <a href="home.php" class="na-link text-light">Home</a>
    </li>

    <li class="nav-item mx-3">
      <a href="logout.php" class="na-link text-light">sair</a>
    </li>
  </ul>
  <?php }  ?>

</nav>