<?php include('./include/header.php'); ?>

<ul class="navbar-nav">

  <li class="nav-item"> <a href="homepage.php" class="nav-link">Home</a> </li>

  <li class="nav-item"> <a href="logout.php" class="nav-link">Logout</a> </li>
</ul>


</nav>

</header>

<div class="container">
  <?php
  include './include/dbh.php';
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM users WHERE id = $id ";
  $newrecords = mysqli_query($conn, $sql);
  $result = mysqli_fetch_assoc($newrecords);

  echo "  <form  action='update.php' method='POST'>

          <br><br><input type='text' class='form-control' placeholder='Enter full name' name='fname' value='" . ucwords($result['name']) . "'>
          <br>
          <input type='text' class='form-control' placeholder='Enter mobile number' name='phn' value='" . $result['phone'] . "'>
          <br>
          <label><b>Date of Birth : </b></label>
          <input type='text' class='from-control' placeholder='Enter Date of Birth' name='dob' value='" . $result['DOB'] . "'><br>

              <div class='signupbutton'>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Update Details</button>

              </div>
              </form>


              <br><br>
              <label><b>Email Id : </b>" . $result['email'] . "</label>
              <br><br>
              <h1>Change Password</h1>
              <br><br>
              <form class='' action='updatep.php' method='post'>
                <input type='password' class='form-control' placeholder='Enter old password' name='oldp'><br>
                <input type='password' class='form-control' placeholder='Enter new password' name='newp'><br>
                <button type='submit' class='btn btn-success ' name='subpass' value='submit'>Update Password</button><br>
              </form>

              ";
  ?>

</div>

</body>

</html>