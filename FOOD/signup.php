<?php
include("register.php");
session_start();
// echo "Welcome " . $_SESSION['mobile'];
include("connect.php");
error_reporting(0);
$userMobile = $_SESSION['mobile'];
if ($userMobile == true) {

  // header('location:index.php');
  echo '<script>
    window.location.href = " index.php";
    alert("You already login in !!!");
  </script>';
} else {
  // echo '<script>
  //     window.location.href = "login.php";
  //     alert("login failed, Invalid username or passwordL!!!");
  //   </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>New User Registration</title>
  <link rel="stylesheet" href="css/style2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form method="post" action="register.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="First name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input name="mobile" type="tel" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Alternative Number</span>
            <input name="alt_mobile" type="tel" placeholder="Enter an alternative number">
          </div>
          <div class="input-box">
            <span class="details">Current address</span>
            <input name="address" type="text" placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input name="password" id="pswrd_1" type="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <div class="error-text"></div>
            <span class="details">Confirm Password</span>
            <input name="confirm_password" onkeyup="toggleDiv()" id="pswrd_2" type="password" placeholder="Confirm your password" required>
            <!-- <div id="myDiv" style="display:block" class="show"> -->
            <input style="width: 65px;height: 25px;" value="show" type="button" id="myDiv" style="display:block">
            <!-- </div> -->
          </div>
        </div>
        <div class="button">
          <input type="submit" id="submit" name="submit" value="Register">
        </div>
        <div class="login_link">
          Already a member?
          <a href="login.php">Login</a>
        </div>
      </form>

    </div>
  </div>
  <script>
    const pswrd_1 = document.querySelector("#pswrd_1");
    const pswrd_2 = document.querySelector("#pswrd_2");
    const errorText = document.querySelector(".error-text");
    const showBtn = document.querySelector("#myDiv");
    const btn = document.querySelector("#submit");
    btn.onclick = function() {
      if (pswrd_1.value != pswrd_2.value) {
        errorText.style.display = "block";
        errorText.classList.remove("matched");
        errorText.textContent = "Error! Confirm Password Not Match";
        errorText.style.color = "red";
        return false;
      } else {
        errorText.style.display = "block";
        errorText.classList.add("matched");
        errorText.textContent = "Nice! Confirm Password Matched";
        errorText.style.color = "green";
        header("location:login.php");
        return false;
      }
    }

    showBtn.onclick = function() {
      if ((pswrd_1.type == "password") && (pswrd_2.type == "password")) {
        pswrd_1.type = "text";
        pswrd_2.type = "text";
        this.textContent = "Hide";
      } else {
        pswrd_1.type = "password";
        pswrd_2.type = "password";
        this.textContent = "Show";
      }
    }

    function toggleDiv() {
      var input = document.getElementById("pswrd_2");
      var div = document.getElementById("myDiv");

      if (input.value === "") {
        div.disabled = true;
      } else {
        div.disabled = false;
      }
    }
  </script>

</body>

</html>