<?php
session_start();
require '../dynamic/header.php';

?>
<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Week 2 Form Project</h2>
  
  <div>
    <ul>
      <li><a href="week-2-team.php">Team Assignment</a></li>
      <li><a href="week-2-personal.php">Personal Assignment</a></li>
    </ul>  
  </div>
  
<?php if (!$_SESSION['voted'] == 'voted') {  ?>
  <div>
    <p id="form"></p>
  </div>
</div>

<?php } else { 
   header("Location: results-form.php");
/* Make sure that code below does not get executed when we redirect. */
  exit;

} ?>


<script>
    var form = '';
    form += '<h3>Personal Assignment</h3>';
    
    form += '<form action="results-form.php" method="post" id="forms-2">';
    form += '<label for="question1">What is your favorite color?</label><br>';
    form += 'Red <input type="radio" name="question1" value="Red"><br>';
    form += 'Blue <input type="radio" name="question1" value="Blue"><br>';
    form += 'Yellow <input type="radio" name="question1" value="Yellow"><br>';
    form += 'Green <input type="radio" name="question1" value="Green"><br>';
    form += '<label for="question2">What is your favorite animal?</label><br>';
    form += 'Bird <input type="radio" name="question2" value="Bird"><br>';
    form += 'Dog <input type="radio" name="question2" value="Dog"><br>';
    form += 'Cat <input type="radio" name="question2" value="Cat"><br>';
    form += 'Horse <input type="radio" name="question2" value="Horse"><br>';
    form += '<label for="question3">Where were you born?</label><br>';
    form += 'US <input type="radio" name="question3" value="US"><br>';
    form += 'Canada <input type="radio" name="question3" value="Canada"><br>';
    form += 'Mexico <input type="radio" name="question3" value="Mexico"><br>';
    form += 'Europe <input type="radio" name="question3" value="Europe"><br>';
    form += '<label for="question4">Are you married?</label><br>';
    form += 'Yes <input type="radio" name="question4" value="Yes"><br>';
    form += 'No <input type="radio" name="question4" value="No"><br>';
    form += '<input type="submit">';
    form += '</form><br>';
    
    form += '<p><a href="results-form.php">See Results</a></p>';
    document.getElementById('form').innerHTML = form;
  </script>

<?php require '../dynamic/footer.php'; ?>