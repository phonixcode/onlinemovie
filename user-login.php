<?php include('./include/header.php'); ?>

<ul class="navbar-nav">
  <li class="nav-item"> <a href="sign-up.php" class="nav-link"> SignUp</a> </li>
</ul>
</nav>

<div class="container">
  <div class="jumbotron">
    <h1>Login to your account</h1> <br>
    <form class="" action="Plogin.php" method="POST"> <br><br>
      <input type="email" class="form-control" placeholder="Usename/ Email Address" name="mail" value="">
      <br>
      <input type="password" class="form-control" placeholder="Password" name="pass" value="">
      <br><br>

      <div class="loginbutton">
        <button type="submit" class="btn btn-success btn-lg" name="login">Login</button>
      </div>
    </form>
  </div>
</div>
</div>
</header>

<?php include('./include/footer.php'); ?>

</body>

</html>