<!DOCTYPE html>
<html>
    <head>
    </head>

    <form action="../php/signupPHP.php" method="post">
        <input type="text" name="username" placeholder="Enter Username" id="username">
        <input type="text" name="email" placeholder="Enter Email" id="email">
        <input type="password" name="password" placeholder="Enter Password" id="password">
        <input type="password" name="passwordverify" placeholder="Re-enter Password" id="passwordverify">
        <input type="text" name="fname" placeholder="First Name" id="fname">
        <input type="text" name="lname" placeholder="Last Name" id="lname">
        <input type="date" id="date" placeholder="Date of Birth" name="date" min="1950-01-01" max="">
        <button type="submit" name="signup_submit">Signup</button>
    </form>
    <!-- Esta parte lo he pensado, si eso no usamos el form, y basicamente cogemos los values en JS con document.getElementById("username").value; -->
    <!-- Asi ponemos por ejemplo onClick en el boton o algo asi, y hacemos el function de post -->
</html>