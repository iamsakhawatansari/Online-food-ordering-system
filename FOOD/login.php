<?php
include("connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="login">
        <div class="navbar">
            <div>
                <img src="img/logo.png" alt="" srcset="">
            </div>
            <a href="index.php">Home</a>
            <!-- <a href="#news">News</a> -->
            <!-- <a href="#contact">Contact</a> -->
        </div>
        <div class="container">
            <h1>Login</h1>
            <form action="#" method="post">
                <div class="txt_field">
                    <input name="mobile" type="tel" required>
                    <label for="phone">Phone No.</label>
                </div>
                <div class="txt_field">
                    <input name="password" type="password" required>
                    <label for="passwrd">Password</label>
                </div>
                <div class="pass">
                    <a href="forgotpassword.php">
                        Forgot password?
                    </a>
                </div>
                <input name="submit" type="submit" value="Login">
                <div class="signup_link">
                    Not a memeber yet?
                    <a href="signup.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "select * from register where mobile = '$mobile' and password = '$password'";
    // $name = "select name from register where mobile ='$mobile'";
    $result = mysqli_query($con, $sql);
    // echo $result;
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['data']=$row;
        $_SESSION['mobile'] = $mobile;
        header("location: categories.php");
    } else {
        echo '<script>
                window.location.href = " login.php";
                alert("login failed, Invalid username or passwordL!!!");
                </script>';
    }
}
?>