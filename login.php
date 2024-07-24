<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login And Registration</title>
    <link rel="stylesheet" href="css/login.css?v=1.3"/>
   
</head>
<body>

<?php
    @include 'header.php';
?>
<section id="login-cont">
    <div class="container">
        <div class="form_container">
            <div class="login_form">
                <div class="image-container">
                    <img src="img/registerlogin.png" alt="Your Image Description">
                </div>
                <form action="login_register.php" method="post">
                    <h2>Login</h2>
                    <?php if (isset($_GET['error'])): ?>
                        <?php
                        $errorMessage = $_GET['error'];
                        $errorClass = ($errorMessage === 'Registration successful! you can now login!!') ? 'success' : 'failed';
                        ?>
                        <div class="error-container <?php echo $errorClass; ?>">
                            <p class="formerror"><?php echo $errorMessage; ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="input_box">
                        <i class="fa-solid fa-user"></i>&nbsp;&nbsp;
                        <input type="text" placeholder="Enter E-mail" name="email" required/>
                    </div>
                    <div class="input_box">
                        <i class="fa-solid fa-lock"></i>&nbsp;&nbsp;
                        <input type="password" placeholder="Enter Password" name="password" required/>
                        <!-- <i class="fa-solid fa-eye-slash"></i> -->
                    </div>
                    <button type="Submit" class="button" name="login">Login Now</button>
                    <div class="login_signup">Don't have an account? <a href="register.php" id="signup">Signup</a></div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>
