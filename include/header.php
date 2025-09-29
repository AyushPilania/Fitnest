
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fitnest - Your Fitness Journey Starts Here</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/Fit-nest/assets/css/style.css">
</head>

<nav class="navbar navbar-expand-lg shadow-lg">
  <div class="container-fluid header">
    <a class="navbar-brand" href="HomePage.php">FITNEST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="HomePage.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="BMI.php">BMI Calculator</a></li>
        <li class="nav-item"><a class="nav-link" href="DietPlanner.php">Diet</a></li>
        <li class="nav-item"><a class="nav-link" href="ExercisePlanner.php">Exercise</a></li>
        <li class="nav-item"><a class="nav-link" href="AboutUs.php">About Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown">
            Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            
            <li><a class="dropdown-item" href="LogOut.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
