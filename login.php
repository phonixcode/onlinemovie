<?php include('./include/header.php'); ?>

<ul class="navbar-nav">
  <li class="nav-item">
    <?php
    if (!isset($_SESSION['id'])) {
      echo '<a href="user-login.php" class="nav-link">SignIn</a>';
    } else {
      echo '<a href="homepage.php" class="nav-link">Home</a>';
    }
    ?>
  </li>
  <li class="nav-item"> <a href="#Service" class="nav-link"> Services</a> </li>
</ul>

</nav>

<div class="container">
  <div class="jumbotron">
    <?php
    if (!isset($_SESSION['id'])) {
      echo '
      <h1>Watch Anywhere...</h1> <br>
      <a href="sign-up.php" type="button" class="btn btn-danger btn-block">Get Started</a>
      ';
    } else {
      echo '
      <h1>Continue Watching</h1> <br>
      <a href="homepage.php" type="button" class="btn btn-danger btn-block">Continue</a>
      ';
    }
    ?>
  </div>
</div>
</div>

</header>



<section class="features">
  <a href="#" name="Service"></a>
  <h2>Our Services</h2>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <p class="arrange"><img src="images/mess.png" alt=""> <br>
          No subscriptions.
          No contract.
        </p>
      </div>
      <div class="col-md-4">

        <p class="arrange">
          <img src="images/desktop.jpg"> <br>
          Enjoy up to 4K
          UHD at home.
        </p>
      </div>
      <div class="col-md-4">
        <p class="arrange"><img src="images/mob.png" alt=""> <br>
          Watch on your
          favorite device.
        </p>
      </div>
    </div>
  </div>

</section>

<?php include('./include/footer.php'); ?>

</body>

</html>