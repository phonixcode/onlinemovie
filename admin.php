<?php include('./include/header.php'); ?>

<ul class="navbar-nav">
  <li class="nav-item"> <a href="homepage.php" class="nav-link"> Home </a> </li>
  <li class="nav-item"> <a href="logout.php" class="nav-link"> Logout</a> </li>

</ul>

</nav>

<div class="container">

  <div class="jumbotron">
    <h1> Enter the Movie details</h1>
    <p> <b></b> </p> <br>

    <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

      <input type="text" class="form-control" placeholder="Movie Name" name="mname" value=""><br>
      <input type="text" class="form-control" placeholder="Year of Release" name="release" value="">
      <br>
      <input type="text" class="form-control" placeholder="Genre" name="genre" value="">
      <br>
      <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
      <br>
      <input type="text" class="form-control" placeholder="Description..." name="desc" value="">
      <br>
      <div class="row">
        <div class="col">
          <table>
            <tr>
              <td> <label for=""><b>Upload Image : </b></label> </td>
              <td>
                <div class="">
                  <input type="hidden" name="size" value="100000">

                  <input type="file" name="image" value="">
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col">
          <table>
            <tr>
              <td> <label for=""><b>Upload Video : </b></label> </td>
              <td>
                <div class="">
                  <input type="hidden" name="size" value="30000000">

                  <input type="file" name="video" value="">
                </div>
              </td>
            </tr>
          </table>

        </div>
      </div> <br><br>
      <div class="signupbutton">
        <input type="submit" class="btn btn-success btn-lg" name="upload" value="Submit">
      </div>


    </form>

  </div>


</div>

</div>


</div>

</header>
<?php include('./include/footer.php'); ?>
</body>

</html>