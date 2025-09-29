document.addEventListener('DOMContentLoaded', function() {
    const charts = {
        'muscle_gain': `
        <h4>Muscle Gain / Bodybuilding (7-Day Chart)</h4>
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead class="table-success">
                <tr><th>Day</th><th>Muscle Group Focus</th><th>Exercise 1</th><th>Exercise 2</th><th>Exercise 3</th><th>Exercise 4</th></tr>
            </thead>
            <tbody>
                <tr><td>Monday</td><td>Chest</td><td>Barbell Bench Press (4×8–12)</td><td>Incline Dumbbell Press (4×8–12)</td><td>Chest Dips (3×10–12)</td><td>Cable Flyes (3×12–15)</td></tr>
                <tr><td>Tuesday</td><td>Back</td><td>Deadlifts (4×6–10)</td><td>Bent Over Rows (4×8–12)</td><td>Lat Pulldown / Pull-ups (4×8–12)</td><td>Seated Cable Row (3×10–12)</td></tr>
                <tr><td>Wednesday</td><td>Legs</td><td>Back Squats (4×8–12)</td><td>Romanian Deadlifts (4×10–12)</td><td>Leg Press (4×12–15)</td><td>Seated Calf Raises (4×15–20)</td></tr>
                <tr><td>Thursday</td><td>Shoulders</td><td>Overhead Barbell Press (4×8–12)</td><td>Lateral Raises (4×12–15)</td><td>Rear Delt Flyes (4×12–15)</td><td>Dumbbell Shrugs (3×12–15)</td></tr>
                <tr><td>Friday</td><td>Arms (Biceps & Triceps)</td><td>Barbell Curls (4×8–12)</td><td>Triceps Pushdown (4×10–12)</td><td>Hammer Curls (3×10–12)</td><td>Overhead DB Extension (3×10–12)</td></tr>
                <tr><td>Saturday</td><td>Upper Chest & Core</td><td>Incline Barbell Press (4×8–12)</td><td>Low Cable Flyes (3×12–15)</td><td>Hanging Leg Raises (4×15–20)</td><td>Weighted Plank (3×30–60s)</td></tr>
                <tr><td>Sunday</td><td>Rest / Recovery</td><td colspan="4" class="text-center">Active Recovery / Light Cardio / Mobility Work</td></tr>
            </tbody>
        </table>
        `,
        'weight_loss': `
        <h4>Weight Loss / Fat Burn (7-Day Chart)</h4>
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead class="table-success">
                <tr><th>Day</th><th>Muscle Group Focus</th><th>Exercise 1</th><th>Exercise 2</th><th>Exercise 3</th><th>Exercise 4</th></tr>
            </thead>
            <tbody>
                <tr><td>Monday</td><td>Full Body (HIIT)</td><td>Jump Squats (3×20s)</td><td>Burpees (3×15)</td><td>Mountain Climbers (3×30s)</td><td>Jumping Lunges (3×12/leg)</td></tr>
                <tr><td>Tuesday</td><td>Upper Body Burn</td><td>Push-ups (3×15)</td><td>Dumbbell Rows (3×12)</td><td>Plank Shoulder Taps (3×30s)</td><td>Jumping Jacks (3×50)</td></tr>
                <tr><td>Wednesday</td><td>Core Focus</td><td>Bicycle Crunches (3×30s)</td><td>Russian Twists (3×20)</td><td>Leg Raises (3×15)</td><td>Plank (3×45s)</td></tr>
                <tr><td>Thursday</td><td>Lower Body Burn</td><td>Bodyweight Squats (3×20)</td><td>Step-ups (3×15/leg)</td><td>Glute Bridges (3×20)</td><td>Wall Sit (3×45s)</td></tr>
                <tr><td>Friday</td><td>Cardio Circuit</td><td>High Knees (3×30s)</td><td>Skaters (3×20)</td><td>Jump Rope (3×1 min)</td><td>Burpees (3×15)</td></tr>
                <tr><td>Saturday</td><td>Active Recovery</td><td>Brisk Walk (30 min)</td><td>Stretching (15 min)</td><td>Yoga Flow (20 min)</td><td>Foam Rolling (optional)</td></tr>
                <tr><td>Sunday</td><td>Rest</td><td colspan="4" class="text-center">Full rest or light stretching</td></tr>
            </tbody>
        </table>
        `,
        'general_fitness': `
        <h4>General Fitness / Wellness (7-Day Chart)</h4>
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead class="table-success">
                <tr><th>Day</th><th>Muscle Group Focus</th><th>Exercise 1</th><th>Exercise 2</th><th>Exercise 3</th><th>Exercise 4</th></tr>
            </thead>
            <tbody>
                <tr><td>Monday</td><td>Full Body</td><td>Bodyweight Squats (3×15)</td><td>Push-ups (3×10)</td><td>Plank (3×30s)</td><td>Walking (20 min)</td></tr>
                <tr><td>Tuesday</td><td>Upper Body</td><td>Dumbbell Shoulder Press (3×12)</td><td>Bent Over Rows (3×12)</td><td>Wall Push-ups (3×15)</td><td>Light Stretching (10 min)</td></tr>
                <tr><td>Wednesday</td><td>Mobility & Core</td><td>Yoga Cat-Cow (3×10)</td><td>Bird-Dog (3×12)</td><td>Seated Twist (2×30s)</td><td>Dead Bug (3×12)</td></tr>
                <tr><td>Thursday</td><td>Lower Body</td><td>Lunges (3×10/leg)</td><td>Glute Bridges (3×15)</td><td>Calf Raises (3×20)</td><td>Leg Swings (2×15)</td></tr>
                <tr><td>Friday</td><td>Light Cardio</td><td>Fast Walk (20 min)</td><td>Stair Climb (10 min)</td><td>Stationary Bike (15 min)</td><td>Cool Down Walk (10 min)</td></tr>
                <tr><td>Saturday</td><td>Stretch & Breathe</td><td>Neck Rolls (2×30s)</td><td>Forward Fold (2×30s)</td><td>Child's Pose (2×1 min)</td><td>Deep Breathing (5 min)</td></tr>
                <tr><td>Sunday</td><td>Rest</td><td colspan="4" class="text-center">Optional walking / mindfulness practice</td></tr>
            </tbody>
        </table>
        `,
        'endurance': `
        <h4>Endurance / Stamina Building (7-Day Chart)</h4>
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead class="table-success">
                <tr><th>Day</th><th>Muscle Group Focus</th><th>Exercise 1</th><th>Exercise 2</th><th>Exercise 3</th><th>Exercise 4</th></tr>
            </thead>
            <tbody>
                <tr><td>Monday</td><td>Cardio Base</td><td>Jogging (20 min)</td><td>Jump Rope (4×1 min)</td><td>Mountain Climbers (3×30s)</td><td>Stretch (10 min)</td></tr>
                <tr><td>Tuesday</td><td>Upper Body Endurance</td><td>Push-ups (4×15)</td><td>Dumbbell Rows (4×12)</td><td>Jumping Jacks (4×50)</td><td>Arm Circles (3×30s)</td></tr>
                <tr><td>Wednesday</td><td>Core + Agility</td><td>Plank (3×60s)</td><td>Russian Twists (4×20)</td><td>Lateral Hops (3×30s)</td><td>Leg Raises (3×15)</td></tr>
                <tr><td>Thursday</td><td>Tempo Cardio</td><td>Run (25 min steady pace)</td><td>Burpees (3×15)</td><td>High Knees (3×30s)</td><td>Stretching (10 min)</td></tr>
                <tr><td>Friday</td><td>Lower Body</td><td>Bodyweight Squats (4×20)</td><td>Lunges (3×15/leg)</td><td>Wall Sit (3×45s)</td><td>Step-ups (3×15/leg)</td></tr>
                <tr><td>Saturday</td><td>Interval Training</td><td>Sprint Intervals (5×30s)</td><td>Jog Recovery (5×1 min)</td><td>Jump Rope (3×1 min)</td><td>Cool Down Walk (10 min)</td></tr>
                <tr><td>Sunday</td><td>Rest / Light Activity</td><td colspan="4" class="text-center">Light walking, yoga, or rest</td></tr>
            </tbody>
        </table>
        `
    };

    const form = document.getElementById('exerciseForm');
    const chartOutput = document.getElementById('chart-output');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const goal = document.getElementById("exercise-goal").value;
        chartOutput.innerHTML = charts[goal] || "<p>No chart available for this combination.</p>";
    });
});
