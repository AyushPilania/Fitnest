<?php
include("include/header.php");
?>

<link rel="stylesheet" type="text/css" href="assets/css/Exercise_planner_style.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">


<div class="container">
    <div class="row align-items-center my-5">
        <!-- Left: Write-up -->
        <div class="col-md-6">
            <div class="card card-body" style="border:none; box-shadow: sm;">
                <h1>Get your <span class="planner">Workout Planner</span></h1>
                <p class="lead mt-4">
                    Ready to take control of your fitness goals? Our Exercise Planner is designed to help you burn fat, build muscle, and improve endurance with structured weekly routines.
                </p>
            </div>
        </div>

        <!-- Right: Form -->
        <div class="col-md-6">
            <div class="card card-body p-4 shadow-sm">
                <h3>  Enter Your Preference Below:</h3>
                <form id="exerciseForm" class="mt-4">
                    <div class="mb-3">
                        <label for="exercise-goal" class="form-label"><h5>Exercise Goal:</h5></label>
                        <select id="exercise-goal" class="form-select">
                            <option disabled selected value="">Choose your goal</option>
                            <option value="muscle_gain">Muscle Gain / Bodybuilding</option>
                            <option value="weight_loss">Weight Loss / Fat Burn</option>
                            <option value="general_fitness">General Fitness / Wellness</option>
                            <option value="endurance">Endurance / Stamina Building</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3" style="border:2px solid #4CAF50; background-color:#32CD32;">
                        Generate Exercise Chart
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Chart Output -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card card-body shadow-sm">
                <h4>Your Weekly Exercise Chart:- </h4>
                <div id="chart-output"></div>
            </div>
        </div>
    </div>
</div>

<?php
include("include/footer.php");
?>
<script src="assets/js/Exercise_app.js"></script>
