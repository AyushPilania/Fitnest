<?php
include("include/header.php");
?>
<link rel="stylesheet" type="text/css" href="assets/css/bmi.css">

<div class="container-fluid knowledge">
    <div class="row 5">
      <div class="col-md-5 col-sm-12 col-lg-5 col-12 Calculator">
        <div class=" container calculate">
          <h1 class="name">BMI Calculator</h1>

          <p>Height (cm)</p>
          <input type="number" id="height">

          <p>Weight (kg)</p>
          <input type="number" id="weight">

          <button id="btn">Calculate</button>

          <div id="result"></div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-lg-6 col-12 know">
        <div class="chart_img">
          <img src="assets/images/bmi_range.jpg">
        </div>
        <div class="bmi_info">
          <p5>Body Mass Index (BMI) is a simple calculation using a person’s height and weight. It provides a general indication of whether an individual has a healthy body weight. While it doesn't measure body fat directly, it's a useful screening tool.</p5>
        </div>
      </div>
    </div>
  </div>
  <div class="box_1">
  <div class="container-fluid under_weight mb-5">
    <div class="row 6">
      <div class="col-md-3 col-sm-12 col-lg-3 col-12 image">
        <img src="assets/images/under_weight.jpg">
      </div>
      <div class="col-md-8 col-sm-12 col-lg-8 col-12 weight_info">
        <div class="weight_heading">
          <h7>Underweight (BMI less than 18.5) :- </h7>
        </div>
        <div class="weight_writeup">
          <p>Being underweight means your body mass index (BMI) is below the recommended range. This can be a sign that you're not getting enough nutrients or that there may be an underlying health issue.<br/>
            Potential health risks of being underweight include:<br/><br/>
            1.Weakened immune system<br/>
            2.Fatigue or low energy levels<br/>
            3.Nutrient deficiencies<br/>
            4.Bone loss or osteoporosis</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid normal_weight mb-5">
    <div class="row 6">
      <div class="col-md-3 col-sm-12 col-lg-3 col-12 image">
        <img src="assets/images/normal_weight.png">
      </div>
      <div class="col-md-8 col-sm-12 col-lg-8 col-12 weight_info">
        <div class="weight_heading">
          <h7>Normal Weight (BMI 18.5 – 24.9):- </h7>
        </div>
        <div class="weight_writeup">
          <p>A BMI in the normal range suggests that your weight is generally healthy for your height. It’s often associated with a lower risk of weight-related health problems.<br/>
          Benefits of maintaining a normal BMI include:<br/><br/>
          1.Reduced risk of heart disease, diabetes, and high blood pressure<br/>
          2.Better energy levels and physical fitness<br/>
          3.Improved mobility and joint health<br/>
          4.Overall enhanced well-being</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid over_weight mb-5">
    <div class="row 6">
      <div class="col-md-3 col-sm-12 col-lg-3 col-12 image">
        <img src="assets/images/over_weight.png">
      </div>
      <div class="col-md-8 col-sm-12 col-lg-8 col-12 weight_info">
        <div class="weight_heading">
          <h7>Overweight (BMI 25 – 29.9):-</h7>
        </div>
        <div class="weight_writeup">
          <p>Having a BMI in the overweight range means your weight is higher than what's considered healthy for your height. While not always a cause for concern, being overweight can increase the risk of developing certain health conditions over time.<br/>
          Possible health risks include:<br/><br/>
          1.High blood pressure<br/>
          2.Type 2 diabetes<br/>
          3.Joint pain or mobility issues<br/>
          4.Increased risk of heart disease</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid obese_weight mb-5">
    <div class="row 6">
      <div class="col-md-3 col-sm-12 col-lg-3 col-12 image">
        <img src="assets/images/obese_weight.png">
      </div>
      <div class="col-md-8 col-sm-12 col-lg-8 col-12 weight_info">
        <div class="weight_heading">
          <h7>Obese (BMI 30 and above):-</h7>
        </div>
        <div class="weight_writeup">
          <p>Obesity means your BMI is significantly above the healthy range, which can greatly increase the risk of serious health issues.<br/>
          Common health concerns linked to obesity:<br/><br/>
          1.Heart disease and stroke<br/>
          2.Type 2 diabetes<br/>
          3.Sleep apnea and breathing problems<br/>
          4.Certain types of cancer<br/>
          5.Mental health issues like depression or low self-esteem</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("include/footer.php");
?>

<script src="assets/js/bmi_app.js"></script>
</body>
</html>
