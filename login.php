<?php
error_reporting(0);
session_start();
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'bunnies' AND $pass == 'newjeans') {
        session_start();
        $_SESSION['success'] = true;

        header("Location: products.php");
    } else {
        $salah = "<p style='color:red; text-align: center;'>Username and password incorrect!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-4 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #f1f1f1;">
                <div class="featured-image mb-1">
                    <img src="images/login.png" class="img-fluid" style="width: 230px;">
                </div>
                <p class="fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; color: #fcb4c7;">Hello, Bunnies!</p>
                <small class="text-white text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace; background: #fcb4c7;">Get your NewJeans stuffs here</small>
            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-7">
                        <h2 style="text-align: center; font-weight: bolder;">Exclusive Shop for Membership Only!</h2>
                        <p style="text-align: center;">Please login to be able to browse our exclusive products</p>
                        <p style="color:green; text-align: center;">(username: bunnies | pass: newjeans)</p>
                    </div>

                    <?php echo $salah; ?>
                    <form action="" method="post">
                        <div class="input-group mb-2">
                            <input type="text" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary">
                                    <small>Remember Me</small>
                                </label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" name="login" class="btn btn-lg text-white w-100 fs-6" style="background: #fcb4c7;">Login</button>
                        </div>
                        <div class="row">
                            <small class="text-center">Don't have account yet? <a href="#">Register</a></small>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
