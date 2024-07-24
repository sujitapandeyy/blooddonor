<?php
// require('connection.php');
// session_start();
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
                <!-- <img src="img/registerlogin.png" alt="register image">
                <img src="img/registerlogin.png" alt="register image"> -->
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
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { ?>
                <li>
                    <i class="fas fa-sign-out-alt"></i>
                    <a href="logout.php">Logout</a>
                </li>
                <li>
                    <?php echo htmlspecialchars($_SESSION['fullname']); ?>
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
         <?php
                if(isset($_SESSION['loggedin']) ==true)    
                {?>
         <div class="name_logo">
             <p id="name_log">
             <?php
                 $email = $_SESSION['useremail'];
                 $trimmedemail = trim($email); // Trim any whitespace from the beginning and end of the user's full name
                 $firstLetter = substr($trimmedemail, 0, 1); // Retrieve the first character of the trimmed user's full name
                 $firstLetterCap = ucfirst($firstLetter);
                 echo $firstLetterCap;
             ?>
            </p>
        </div>
               <?php }?>
    </section>
</body>
</html>

                <!-- // if(isset($_SESSION['loggedin']) ==true)    
                // {
                        // echo"<li><a id='user_btn' class='fas fa-user'>Logout</a></li>";
                // }
                // else{
                    // echo"<li><a id='lr_btn' class='fas fa-user'></a></li>";
                    //  } -->
                <!-- ?>
               <li> <a href="#MainCart"> <i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>
    <div class="loginregister-box">
        <a href="login.php" class="delete-btn">Login</a>
        <a href="register.php" class="delete-btn">Register</a>
    </div> -->

    <!-- also user logout popup box manage  -->
    <!-- <script src="user.js"></script>
    <script src="js/admin.js"></script> --> 
