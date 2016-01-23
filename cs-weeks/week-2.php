<?php require '../dynamic/header.php'; ?>

<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Week 2 Form Project</h2>
  
  <div>
    <ul>
      <li><a href="javascript:teamForm();">Team Assignment</a></li>
      <li><a href="javascript:personalForm();">Personal Assignment</a></li>
    </ul>  
  </div>
  

  <div>
    <p id="form"></p>
  </div>
</div>


<script>
  function teamForm() {
    var form = '';
    form += '<h3>Team Assignment</h3>'
    form += '<form action="week-2-form-results.php" method="post" id="forms">';
    form += '<label for="name">Name:</label>';
    form += '<input type="text" name="name" id="name"><br>';
    form += '<label for="email">Email:</label>';
    form += '<input type="text" name="email" id="email"><br>';
    form += '<label for="major">Major:</label> <br>';
    form += 'Computer Science <input type="radio" name="major" value="Computer Science"><br>';
    form += 'Web Development and Design <input type="radio" name="major" value="Web Development and Design"><br>';
    form += 'Computer Information Technology <input type="radio" name="major" value="Computer Information Technology"><br>';
    form += 'Computer Engineering <input type="radio" name="major" value="Computer Engineering"><br>';
    form += '<label for="places">Places You have Visited:</label> <br>';
    form += 'North America <input type="checkbox" name="places[]" value="North America"><br>';
    form += 'South America <input type="checkbox" name="places[]" value="South America"><br>';
    form += 'Europe <input type="checkbox" name="places[]" value="Europe"><br>';
    form += 'Asia <input type="checkbox" name="places[]" value="Asia"><br>';
    form += 'Australia <input type="checkbox" name="places[]" value="Australia"><br>';
    form += 'Africa <input type="checkbox" name="places[]" value="Africa"><br>';
    form += 'Antartica <input type="checkbox" name="places[]" value="Antartica"><br>';
  	form += '<label for="comment">Comments:</label>';
  	form += '<textarea rows="4" cols="50" name="comments" form="forms" placeholder="Enter comments here.">';
  	form += '</textarea><br>';
  	form += '<input type="submit">';
  	form += '</form>';
  	
  	document.getElementById('form').innerHTML = form;
  	
  }
  
  function personalForm() {
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
  }
  </script>

<?php require '../dynamic/footer.php'; ?>