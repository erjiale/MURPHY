<!DOCTYPE html>
<html>

<head>
  <title>MURPHY</title>
  <link rel="stylesheet" href="../css/main.css" type="text/css" />
  <link rel="stylesheet" href="../css/fontawesome/css/all.css" />
  <link rel="stylesheet" href="../css/authentication.css" type="text/css" />
  <link rel="stylesheet" href="../css/products.css" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
  <script src="../js/products.js"></script>
</head>
<header>
  <!--Header-->
  <div class="headerContainer">
    <!--Logo Section-->
    <div id="logoSection">
      <h1><a href="../" class="headerText default-header-color">MURPHY</a></h1>
    </div>
    <!-- Toggle Menu on Smaller Screens -->
    <input type="checkbox" id="check" />
    <label for="check" id="checkBtn" class="headerText default-header-color" onclick="onToggleMenu()">
      <!-- <i class="fas fa-bars"></i> -->
      <div id="menu-btn__burger"></div>
    </label>
    <!--Navigation Section-->
    <div id="navigationContainer">
      <nav>
        <ul class="blackBg">
          <div id="searchButton" onclick="showSearch()">
            <input type="text" autofocus id="searchInputField" class="defaultSearch" onfocusout="removeSearchInput()" />
            <i class="headerText default-header-color fas fa-search"></i>
          </div>
          <li><a href="" class="headerText default-header-color">Cart</a></li>
          <?php
          if (isset($_SESSION['userId']) || isset($_SESSION['adminId'])) {
            if (isset($_SESSION['userId'])) $userId = $_SESSION['userId'];
            else $userId = $_SESSION['adminId'];
            $sql = "SELECT * FROM users WHERE user_id='$userId'";
            $stmt = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($stmt);
            $fname = $row['user_fname'];
            $lname = $row['user_lname'];
          ?>
            <li><a href="" class="headerText default-header-color"><?php echo $fname ?> <?php echo $lname ?></a></li>
            <li><a href="../php/logout.php" class="logout-color">Logout</a></li>
          <?php
          } else {
          ?>
            <li class="dropdown">
              <a class="headerText default-header-color">My Account </a>
              <div class="dropdown-content">
                <a href="login.php" class="headerText default-header-color">Login</a>
                <a href="signup.php" class="headerText default-header-color">Signup</a>
              </div>
            </li>
          <?php
          }
          ?>
        </ul>
      </nav>
    </div>
  </div>
</header>