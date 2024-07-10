

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Neuromodulation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Neuromodulation Form</h1>
        <form id="neuromodulationForm" action="form_submit.php" method="POST">
            <div class="card">
                <div class="card-header">Patient Details</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="age" readonly>
                    </div>
                </div>
            </div>
            
            <div class="card mt-3">
                <div class="card-header">Brief Pain Inventory (BPI)</div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="question1">How much relief have pain treatments or medications FROM THIS CLINIC provided?</label>
                        <input type="number" class="form-control" id="question1" name="question1"  placeholder="Please provide a rating between 1 and 100" min="0" max="100" required>
                    </div>
                    <div class="form-group">
                        <label for="question2">Please rate your pain based on the number that best describes your pain at it’s WORST
in the past week.?</label> <div class="invalid-feedback">Please provide a rating between 0 and 10.</div>
                        <input type="number" class="form-control" id="question2" name="question2" placeholder="Please provide a rating between 1 and 10"   min="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question3">Please rate your pain based on the number that best describes your pain at it’s LEAST in
the past week.?</label>
                        <input type="number" class="form-control" id="question3" name="question3" placeholder="Please provide a rating between 1 and 10" min="0" max="10" value= required>
                    </div>
                    <div class="form-group">
                        <label for="question4">Please rate your pain based on the number that best describes your pain on the Average.</label>
                        <input type="number" class="form-control" id="question4" name="question4"  placeholder="Please provide a rating between 1 and 10" min="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question5">Please rate your pain based on the number that best describes your pain that tells
how much pain you have RIGHT NOW.</label>
                        <input type="number" class="form-control" id="question5" name="question5" placeholder="Please provide a rating between 1 and 10" min="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question6">Based on the number that best describes how during the past week pain has
INTERFERED with your: General AcTvity.</label>
                        <input type="number" class="form-control" id="question6" name="question6" placeholder="Please provide a rating between 1 and 10" min="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question7">Based on the number that best describes how during the past week pain has
INTERFERED with your: Mood.</label>
                        <input type="number" class="form-control" id="question7" name="question7" placeholder="Please provide a rating between 1 and 10" min="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question8">Based on the number that best describes how during the past week pain has
INTERFERED with your: Walking ability.</label>
                        <input type="number" class="form-control" id="question8" name="question8" placeholder="Please provide a rating between 1 and 10" min="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question9">Based on the number that best describes how during the past week pain has
INTERFERED with your: Normal work (includes work both outside the home and
housework).</label>
                        <input type="number" class="form-control" id="question9" name="question9"  placeholder="Please provide a rating between 1 and 10" min="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question10">Based on the number that best describes how during the past week pain has
INTERFERED with your: RelaTonships with other people.</label>
                        <input type="number" class="form-control" id="question10" name="question10" placeholder="Please provide a rating between 1 and 10"  in="0" max="10" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="question11">Based on the number that best describes how during the past week pain has
INTERFERED with your: Sleep..</label>
                        <input type="number" class="form-control" id="question11" name="question11" placeholder="Please provide a rating between 1 and 10"  in="0" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="question12">Based on the number that best describes how during the past week pain has
INTERFERED with your: Enjoyment of life..</label>
                        <input type="number" class="form-control" id="question12" name="question12" placeholder="Please provide a rating between 1 and 10"  in="0" max="10" required>
                    </div>

                   
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">Total Score</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="total_score">Total Score</label>
                        <input type="text" class="form-control" id="total_score" name="total_score" readonly>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3" name="btnsubmit">Submit</button>
        </form>
    </div>
    
    <script src="js/form.js"></script>
</body>
</html>
<script type="text/javascript">
    // js/form.js
$(document).ready(function() {
    // Calculate Age
    $('#dob').on('change', function() {
        let dob = new Date($(this).val());
        let age = new Date().getFullYear() - dob.getFullYear();
        $('#age').val(age);
    });

    // Calculate Total Score
    $('#neuromodulationForm input[type="number"]').on('input', function() {
        let totalScore = 0;
        $('#neuromodulationForm input[type="number"]').each(function() {
            if($(this).attr('id') != 'question1') { // Skip question 1
                totalScore += parseInt($(this).val()) || 0;
            }
        });
        $('#total_score').val(totalScore);
    });
});

</script>