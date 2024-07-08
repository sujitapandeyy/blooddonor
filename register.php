<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login And Registration</title>
    <link rel="stylesheet" href="css/register.css?v=10">
    <style>
        .formerror {
            color: red;
            text-align: center;
            margin-bottom: -20px;
            margin-top: 5px;
        }
    </style>
    <script>
        // Function to show User Registration form and hide Donor Registration form
        function showUserRegistration() {
            document.getElementById('userRegistrationForm').style.display = 'block';
            document.getElementById('donorRegistrationForm').style.display = 'none';
        }

        // Function to show Donor Registration form and hide User Registration form
        function showDonorRegistration() {
            document.getElementById('donorRegistrationForm').style.display = 'block';
            document.getElementById('userRegistrationForm').style.display = 'none';
        }

        // Function to set User Registration form as default on page load
        function setDefaultForm() {
            document.getElementById('userRegistrationForm').style.display = 'block';
            document.getElementById('donorRegistrationForm').style.display = 'none';
        }

        // Call setDefaultForm function when the page loads
        window.onload = setDefaultForm;
    </script>
</head>

<body>
    <?php
    // Include your header.php file here
    @include 'header.php';
    ?>

    <div>
        <button onclick="showUserRegistration()">User Registration</button>
        <button onclick="showDonorRegistration()">Donor Registration</button>
    </div>

    <!-- User Registration Form (displayed by default) -->
    <div class="popup-container" id="userRegistrationForm">
        <div class="popup">
            <form action="login_register.php" name="userRegistrationForm" onsubmit="return validateUserForm()" method="post">
                <h2>User Register jdfjshdfhjsdfh</h2>
                <?php
                if (isset($_GET['user_error'])) { ?>
                    <p class="formerror">*<?php echo $_GET['user_error']; ?></p>
                <?php } ?>
                <div class="input_boxR" id="userFullname">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Enter Full Name" name="user_fullname" id="userFullname">
                </div>
                <!-- Add other user registration fields as needed -->
                <button type="Submit" id="userRegButton" name="user_register">Register Now</button>
                <div id="User_Register_signup">Already have an account? <a href="login.php">Login now</a></div>
            </form>
        </div>
    </div>

    <!-- Donor Registration Form (initially hidden) -->
    <div class="popup-container" id="donorRegistrationForm" style="display: none;">
        <div class="popup">
            <form action="login_register.php" name="donorRegistrationForm" onsubmit="return validateDonorForm()" method="post">
                <h2>Donor Register</h2>
                <?php
                if (isset($_GET['donor_error'])) { ?>
                    <p class="formerror">*<?php echo $_GET['donor_error']; ?></p>
                <?php } ?>
                <div class="input_boxR" id="donorFullname">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Enter Full Name" name="donor_fullname" id="donorFullname">
                </div>
                <!-- Add other donor registration fields as needed -->
                <button type="Submit" id="donorRegButton" name="donor_register">Register Now</button>
                <div id="Donor_Register_signup">Already registered? <a href="donor_login.php">Login now</a></div>
            </form>
        </div>
    </div>

    <script>
        // Example validation functions, replace with your actual validation logic
        function validateUserForm() {
            // Add your validation logic for user registration form
            return true; // Return true if form is valid, false otherwise
        }

        function validateDonorForm() {
            // Add your validation logic for donor registration form
            return true; // Return true if form is valid, false otherwise
        }
    </script>

</body>

</html>
