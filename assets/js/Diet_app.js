// Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function() {

    // Diet charts for different combinations
    const charts = {
        'weight-loss-vegetarian': `
            <h4>Weight Loss – Vegetarian (7-Day Chart)</h4>
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead class="table-success">
                    <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Snack</th><th>Dinner</th></tr>
                </thead>
                <tbody>
                    <tr><td>Monday</td><td>Oats + fruits</td><td>Brown rice + dal + salad</td><td>Green tea + almonds</td><td>Vegetable soup + roti</td></tr>
                    <tr><td>Tuesday</td><td>Poha + buttermilk</td><td>Mixed veg + roti + curd</td><td>Coconut water</td><td>Moong dal + stir-fry veg</td></tr>
                    <tr><td>Wednesday</td><td>Smoothie + nuts</td><td>Khichdi + salad</td><td>Herbal tea</td><td>Lauki curry + roti</td></tr>
                    <tr><td>Thursday</td><td>Upma + boiled egg</td><td>Tofu curry + brown rice</td><td>Fruit bowl</td><td>Veg soup + oats roti</td></tr>
                    <tr><td>Friday</td><td>Sprouts chaat</td><td>Veg pulao + curd</td><td>Black coffee</td><td>Palak paneer + roti</td></tr>
                    <tr><td>Saturday</td><td>Idli + sambhar</td><td>Rajma + quinoa</td><td>Mixed nuts</td><td>Veg curry + roti</td></tr>
                    <tr><td>Sunday</td><td>Besan chilla</td><td>Mixed veg + rice</td><td>Coconut water</td><td>Soup + salad</td></tr>
                </tbody>
            </table>
        `,
        'weight-gain-vegetarian': `
            <h4>Weight Gain – Vegetarian (7-Day Chart)</h4>
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead class="table-success">
                    <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Snack</th><th>Dinner</th></tr>
                </thead>
                <tbody>
                    <tr><td>Monday</td><td>Banana shake + paratha</td><td>Paneer curry + rice</td><td>Dry fruits</td><td>Dal makhani + roti</td></tr>
                    <tr><td>Tuesday</td><td>Oats + nuts + milk</td><td>Stuffed paratha + curd</td><td>Chikki + smoothie</td><td>Chole + rice</td></tr>
                    <tr><td>Wednesday</td><td>Upma + milk</td><td>Vegetable biryani + raita</td><td>Protein bar</td><td>Paneer tikka + roti</td></tr>
                    <tr><td>Thursday</td><td>Chilla + chutney</td><td>Palak paneer + rice</td><td>Banana + peanut butter</td><td>Dal + sabzi + roti</td></tr>
                    <tr><td>Friday</td><td>Poha + almonds</td><td>Vegetable pulao + dal</td><td>Fruit salad</td><td>Rajma + quinoa</td></tr>
                    <tr><td>Saturday</td><td>Idli + ghee</td><td>Mixed veg + curd</td><td>Milk + banana</td><td>Paneer curry + roti</td></tr>
                    <tr><td>Sunday</td><td>Sandwich + fruit juice</td><td>Chole rice</td><td>Nuts + smoothie</td><td>Sabzi + khichdi</td></tr>
                </tbody>
            </table>
        `,
        'weight-loss-non-vegetarian': `
            <h4>Weight Loss – Non-Vegetarian (7-Day Chart)</h4>
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead class="table-success">
                    <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Snack</th><th>Dinner</th></tr>
                </thead>
                <tbody>
                    <tr><td>Monday</td><td>Boiled eggs + toast</td><td>Grilled chicken + salad</td><td>Green tea</td><td>Chicken soup + veg</td></tr>
                    <tr><td>Tuesday</td><td>Omelet + juice</td><td>Egg curry + brown rice</td><td>Fruit bowl</td><td>Baked fish + roti</td></tr>
                    <tr><td>Wednesday</td><td>Chicken sandwich</td><td>Chicken stew + salad</td><td>Boiled egg</td><td>Grilled chicken + sautéed veg</td></tr>
                    <tr><td>Thursday</td><td>Scrambled eggs + fruit</td><td>Chicken salad wrap</td><td>Black coffee</td><td>Fish curry + veg</td></tr>
                    <tr><td>Friday</td><td>Boiled eggs + lemon water</td><td>Grilled prawns + rice</td><td>Protein shake</td><td>Chicken tikka + roti</td></tr>
                    <tr><td>Saturday</td><td>Idli + egg bhurji</td><td>Fish fry + salad</td><td>Tea + crackers</td><td>Chicken soup</td></tr>
                    <tr><td>Sunday</td><td>Stuffed omelet</td><td>Grilled chicken + veg curry</td><td>Green smoothie</td><td>Baked fish + salad</td></tr>
                </tbody>
            </table>
        `,
        'weight-gain-non-vegetarian': `
            <h4>Weight Gain – Non-Vegetarian (7-Day Chart)</h4>
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead class="table-success">
                    <tr><th>Day</th><th>Breakfast</th><th>Lunch</th><th>Snack</th><th>Dinner</th></tr>
                </thead>
                <tbody>
                    <tr><td>Monday</td><td>Boiled eggs + milk</td><td>Chicken curry + rice</td><td>Banana shake</td><td>Grilled fish + roti</td></tr>
                    <tr><td>Tuesday</td><td>Omelet + toast</td><td>Egg curry + brown rice</td><td>Peanut butter sandwich</td><td>Mutton stew + quinoa</td></tr>
                    <tr><td>Wednesday</td><td>Chicken sandwich</td><td>Grilled chicken + curd</td><td>Protein bar</td><td>Fish fry + sabzi</td></tr>
                    <tr><td>Thursday</td><td>Egg bhurji + paratha</td><td>Keema + roti</td><td>Dry fruits + milk</td><td>Baked chicken + soup</td></tr>
                    <tr><td>Friday</td><td>Poha + eggs</td><td>Chicken biryani + raita</td><td>Paneer roll</td><td>Egg bhurji + toast</td></tr>
                    <tr><td>Saturday</td><td>Paratha + eggs</td><td>Prawn curry + rice</td><td>Cheese + crackers</td><td>Chicken soup + rice</td></tr>
                    <tr><td>Sunday</td><td>Stuffed omelet + juice</td><td>Chicken tikka + salad</td><td>Banana + milk</td><td>Fish curry + veg</td></tr>
                </tbody>
            </table>
        `
    };

    // Handle form submit
    document.querySelector('#dietForm').addEventListener('submit', function(e) {
        e.preventDefault(); // prevent page reload
        const goal = document.getElementById("diet-goal").value;
        const food = document.getElementById("pref").value;

        if (!goal || !food) {
            alert("Please select both goal and food preference!");
            return;
        }

        const key = `${goal}-${food}`;
        document.getElementById("chart-output").innerHTML = charts[key] || "<p>No chart available for this combination.</p>";
    });

});
