<?php
include("include/header.php");
?>
<link rel="stylesheet" type="text/css" href="assets/css/Diet_planner_style.css">

<div class="container">
    <div class="row one">
      <div class="col-md-6 mt-5"  >
        <div class=" card card-body" style="height: 392px; border:none; box-shadow: none;">
          <h1>Get your <span class="planner">Diet Planner </span> </h1><br><br>
           <p9><h2>In just one click, unlock a customized healthy meal guide to match your fitness goals.</h2></p9>
    </div>
    </div>
    <div class="col-md-6 mt-5 ">
       <div class=" card card-body">
         <div class="box ">
          <h2>Enter Your Preference Below:-</h2>
          <form id="dietForm">
            <div class="mb-3 mt-5">
              <label for="diet-goal" ><h4>Diet Goal:</h4></label>
              <select id="diet-goal" >
                <option disabled selected value="">Choose your goal</option>
                <option value="weight-loss">Weight Loss</option>
                <option value="weight-gain">Weight Gain</option>
              </select>
            </div>

            <div class="mb-3 mt-5">
              <label for="pref" ><h4>Food Preference:</h4></label>
              <select id="pref" >
                <option disabled selected value="">Choose food type</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="non-vegetarian">Non-Vegetarian</option>
              </select>
            </div >
             <div class="get">
            <button type="submit" class="btn w-100">Generate Diet Chart</button>
          </div>
          </form> 
         </div>
       </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-4 mt-3 mb-4 w-100">
       <div class=" card card-body">
         <div class="chart">
          <h4>Your Weekly Diet Chart</h4>
          <div id="chart-output"></div>
        </div>
       </div>
    </div>
    </div>
  </div>
    <script src="assets/js/Diet_planner_app.js"></script>


<?php
include("include/footer.php");
?>
<script src="assets/js/Diet_app.js"></script>

</body>
</html>