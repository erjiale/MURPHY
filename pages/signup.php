<!DOCTYPE html>
<html>

<head>
    <title>MURPHY</title>
    <link rel="stylesheet" href="../css/fontawesome/css/all.css" />
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../css/authentication.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</head>
<header>
    <!--Header-->
    <div class="headerContainer">
        <!--Logo Section-->
        <div id="logoSection">
            <h1 class="headerText default-header-color"><a href="../" class="logo">MURPHY</a></h1>
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
                    <li class="dropdown">
                        <a class="headerText default-header-color">My Account </a>
                        <div class="dropdown-content">
                            <a href="../pages/login.php" class="headerText default-header-color">Login</a>
                            <a href="" class="headerText default-header-color">Signup</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<body id="headerSlideShow">
    <div class="row-container">
        <!-- SIGNUP Form -->
        <form class="registerContainer" action="../php/signupPHP.php" method="post">
            <h1>signup</h1>
            <input type="text" name="fname" placeholder="First Name" id="fname">
            <input type="text" name="lname" placeholder="Last Name" id="lname">
            <input type="date" id="date" placeholder="Date of Birth" name="date" min="1950-01-01" max="">
            <input type="text" name="username" placeholder="Enter Username" id="username">
            <input type="text" name="email" placeholder="Enter Email" id="email">
            <input type="password" name="password" placeholder="Enter Password" id="password">
            <input type="password" name="passwordverify" placeholder="Re-enter Password" id="passwordverify">
            <button type="submit" name="signup_submit">Signup</button>
            <h5>Already have an account? <br /><a href="login.php">Login here</a></h5>
        </form>
    </div>

</body>

<!-- Esta parte lo he pensado, si eso no usamos el form, y basicamente cogemos los values en JS con document.getElementById("username").value; -->
<!-- Asi ponemos por ejemplo onClick en el boton o algo asi, y hacemos el function de post -->

</html>