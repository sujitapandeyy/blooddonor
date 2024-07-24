<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login And Registration</title>
    <link rel="stylesheet" href="css/register.css?v=1.5">
    <style>
        .formerror {
            color: red;
            text-align: center;
            margin-bottom: -20px;
            margin-top: 5px;
        }
    </style>
    <script>
        function showUserRegistration() {
            document.getElementById('userRegistrationForm').style.display = 'block';
            document.getElementById('donorRegistrationForm').style.display = 'none';
        }

        function showDonorRegistration() {
            document.getElementById('donorRegistrationForm').style.display = 'block';
            document.getElementById('userRegistrationForm').style.display = 'none';
        }

        function setDefaultForm() {
            document.getElementById('userRegistrationForm').style.display = 'block';
            document.getElementById('donorRegistrationForm').style.display = 'none';
        }

        window.onload = setDefaultForm;
    </script>
</head>

<body>
    <?php @include 'header.php'; ?>

    <section id="popup">
        <div class="container">
            <div class="register_form">
                <div class="image-container">
                    <img src="img/register.png" alt="register image">
                    <img src="img/registerlogin.png" alt="register image">
                </div>
                <div class="mainform">
                    <div class="mainbtn">
                        <button class="userbtn" onclick="showUserRegistration()">User</button>
                        <button class="donorbtn" onclick="showDonorRegistration()">Donor</button>
                    </div>
                    <div class="container" id="userRegistrationForm">
                        <form action="login_register.php" name="userRegistrationForm" onsubmit="return validateForm()" method="post">
                            <h2>User Register</h2>
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="formerror">*<?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="input_boxR" id="fullname">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Enter Full Name" name="fullname" id="userFullname">
                            </div>
                            <div class="input_boxR" id="email">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" placeholder="Enter Email" name="email" id="userEmail">
                            </div>
                            <div class="input_boxR" id="password">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" placeholder="Enter Password" name="password" id="userPassword">
                            </div>
                            <div class="input_boxR" id="phone">
                                <i class="fa-solid fa-phone"></i>
                                <input type="text" placeholder="Enter Phone Number" name="phone" id="userPhone">
                            </div>
                            <div class="input_boxR" id="address">
                                <i class="fa-solid fa-home"></i>
                                <input type="text" placeholder="Enter Address" name="address" id="userAddress">
                            </div>
                            <input type="hidden" name="user_type" value="User">
                            <button type="submit" id="RegButton" name="user_register">Register Now</button>
                            <div id="Register_signup">Already have an account? <a href="login.php">Login now</a></div>
                        </form>
                    </div>

                    <div class="container" id="donorRegistrationForm" style="display: none;">
                        <form action="login_register.php" name="donorRegistrationForm" onsubmit="return validateForm()" method="post">
                            <h2>Donor Register</h2>
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="formerror">*<?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="input_boxR" id="fullname">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Enter Full Name" name="fullname" id="donorFullname">
                            </div>
                            <div class="input_boxR" id="email">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" placeholder="Enter Email" name="email" id="donorEmail">
                            </div>
                            <div class="input_boxR" id="password">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" placeholder="Enter Password" name="password" id="donorPassword">
                            </div>
                            <div class="input_boxR" id="phone">
                                <i class="fa-solid fa-phone"></i>
                                <input type="text" placeholder="Enter Phone Number" name="phone" id="donorPhone">
                            </div>
                            <div class="input_boxR" id="address">
                                <i class="fa-solid fa-home"></i>
                                <input type="text" placeholder="Enter Address" name="address" id="donorAddress">
                            </div>
                            <div class="input_boxR" id="donorBloodType">
                                <i class="fa-solid fa-tint"></i>
                                <select name="donor_blood_type" id="donorBloodType">
                                    <option value="" disabled selected>Select Blood Type</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>

                            <div class="input_boxR" id="donorLastDonationDate">
                                <i class="fa-solid fa-calendar"></i>
                                <input type="date" name="donor_last_donation_date" id="donorLastDonationDate">
                            </div>
                            <input type="hidden" name="user_type" value="Donor">
                            <button type="submit" id="RegButton" name="donor_register">Register Now</button>
                            <div id="Register_signup">Already registered? <a href="login.php">Login now</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function validateForm() {
            const userForm = document.forms["userRegistrationForm"];
            const donorForm = document.forms["donorRegistrationForm"];
            let isValid = true;

            if (userForm.style.display === 'block') {
                isValid = validateUserForm();
            } else if (donorForm.style.display === 'block') {
                isValid = validateDonorForm();
            }

            return isValid;
        }

        function validateUserForm() {
            const fields = ["userFullname", "userEmail", "userPassword", "userPhone", "userAddress"];
            for (let i = 0; i < fields.length; i++) {
                const field = document.getElementById(fields[i]);
                if (field.value.trim() === "") {
                    alert("Please fill all fields");
                    return false;
                }
            }
            return true;
        }

        function validateDonorForm() {
            const fields = ["donorFullname", "donorEmail", "donorPassword", "donorPhone", "donorAddress", "donorBloodType", "donorLastDonationDate"];
            for (let i = 0; i < fields.length; i++) {
                const field = document.getElementById(fields[i]);
                if (field.value.trim() === "" || field.value === null) {
                    alert("Please fill all fields");
                    return false;
                }
            }
            return true;
        }
    </script>

</body>

</html>
