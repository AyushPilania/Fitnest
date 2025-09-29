<?php
session_start();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="assets/css/Log_In_style.css">

<div class="auth-container">
    <!-- Left Side: Catchy Line -->
    <div class="catchy-side">
        <h1>“Transform Your Body, Transform Your Life!”</h1>
        <p>Sign up or log in to get your workouts plans, plan your meals, and reach your fitness goals faster than ever!</p>
    </div>

    <!-- Right Side: Forms -->
    <div class="form-side">
        <!-- Sign Up Form -->
        <div class="form-container" id="signup">
            <h1 class="form-title">Register</h1>
            <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <label for="fName">First Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                    <label for="lName">Last Name</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            
            <p class="switch-text">Already have an account? <button type="button" id="signInButton">Sign In</button></p>
        </div>

        <!-- Sign In Form -->
        <div class="form-container" id="signIn" style="display:none;">
            <h1 class="form-title">Sign In</h1>
            <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="signin-email" placeholder="Email" required>
                    <label for="signin-email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="signin-password" placeholder="Password" required>
                    <label for="signin-password">Password</label>
                </div>
                <p class="recover"><a href="#">Recover Password</a></p>
                <input type="submit" class="btn" value="Sign In" name="signIn">
            </form>
            <p class="or">----------or----------</p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <p class="switch-text">Don't have an account yet? <button type="button" id="signUpButton">Sign Up</button></p>
        </div>
    </div>
</div>

<script src="assets/js/script.js"></script>
