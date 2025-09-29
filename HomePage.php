<?php
session_start(); // Start session

// If user is not logged in, redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

include("Connect.php");

// Default username
$userName = "Guest";

// Fetch user info
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $stmt = mysqli_prepare($conn, "SELECT fname, lname FROM users WHERE email = ?");
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $userName = htmlspecialchars(trim($row['fname'] . ' ' . $row['lname']));
        }
        mysqli_stmt_close($stmt);
    }
}
?>

<?php include("include/header.php"); ?>

<!-- ================= Hero Section ================= -->
<div class="container-fluid first_page py-5">
  <div class="row align-items-center">
    <div class="col-md-7 first_text">
      <h2 class="user_greeting">Hello <?php echo $userName; ?> :)</h2>
      <h1 class="welcome">WELCOME!</h1>
      <p class="fitness_journey">
        Your <span class="highlight">Fitness</span> Journey <span class="highlight">Starts</span> Here
      </p>
      <p class="intro">
        Personalized Diet Plans, Smart BMI Tracking, Expert Fitness Tips & Wellness Blogs — All in one place.
      </p>
    </div>
    <div class="col-md-5 text-center">
      <img src="assets/images/gym.png" alt="Fitness gym equipment" class="img-fluid">
    </div>
  </div>
</div>

<!-- ================= About Section ================= -->
<div class="container-fluid info py-5">
  <div class="row align-items-center">
    <div class="col-md-7 about text-center text-md-start">
      <h2 class="question ">What is <span>Fitnest</span>?</h2>
      <p>
        Fitnest is your personal healthcare assistant designed to help you live better. 
        Whether you're just starting your fitness journey or fine-tuning your health, 
        Fitnest helps you measure your BMI, receive personalized diet plans, and plan 
        your ideal exercise routine—all tailored to your goals.
      </p>
    </div>
    <div class="col-md-5 text-center">
      <img src="assets/images/heaven.jpg" alt="Healthy lifestyle" class="img-fluid rounded">
    </div>
  </div>
</div>

<!-- ================= Features Section ================= -->
<div class="container-fluid tools py-5">
  <div class="row g-4">
    <!-- BMI Calculator -->
    <div class="col-md-4">
      <div class="box text-center p-3 shadow-sm flex-fill">
        <h3>BMI Calculator</h3>
        <img src="assets/images/bmi.jpg" class="img-fluid mb-2" alt="BMI">
        <p>Quickly assess your body mass index and understand your health status.</p>
      </div>
    </div>
    <!-- Diet Planner -->
    <div class="col-md-4">
      <div class="box text-center p-3 shadow-sm flex-fill">
        <h3>Diet Planner</h3>
        <img src="assets/images/food.webp" class="img-fluid mb-2" alt="Diet">
        <p>Receive a personalized food plan based on your preferences.</p>
      </div>
    </div>
    <!-- Exercise Planner -->
    <div class="col-md-4">
      <div class="box text-center p-3 shadow-sm flex-fill">
        <h3>Exercise Planner</h3>
        <img src="assets/images/exercise.jpg" class="img-fluid mb-2" alt="Exercise">
        <p>Quick and realistic workouts for everyone to thrive.  
        Whether you're a beginner or advanced, Fitnest suggests routines that match your 
        fitness level and goals.</p>
      </div>
    </div>
  </div>
</div>

<?php include("include/footer.php"); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
