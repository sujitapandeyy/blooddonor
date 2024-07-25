<?php
require ('connection.php');
session_start();
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/72f30a4d56.js" crossorigin="anonymous"></script>
    <link rel="icon" href="favIcon.png" type="image/png">
    <link rel="stylesheet" href="css/header.css?v=1.3">
</head>

<body>
    <?php
    @include 'top.php';
    ?>
    <section id="header">
        <div class="logo-container">
            <a href="home.php"><img src="img/logo1.png" class="logo" height="290px" alt=""> </a>
        </div>
        <div>
            <div>
                <div>
                    <ul id="navbar">
                        <li>
                            <i class="fa-solid fa-home"></i>
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-info-circle"></i>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-tint"></i>
                            <a href="bank.php">Blood Bank</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-list-alt"></i>
                            <a href="list.php">Donor List</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-address-card"></i>
                            <a href="contact.php">Contact Us</a>
                        </li>
                        <?php if (isset($_SESSION['Uloggedin']) && $_SESSION['Uloggedin'] === true) { ?>
                            <li>
                                <i class="fas fa-sign-out-alt"></i>
                                <a href="logout.php">Logout</a>
                            </li>
                            <li>
                                <?php echo htmlspecialchars($_SESSION['useremail']); ?>
                            </li>
                        <?php } else { ?>
                            <li>
                                <i class="fas fa-sign-in-alt"></i>
                                <a href="login.php">Login</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
    </section>
</body>

</html>