<?php
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
  
  <div>
    <p id="form"></p>
  </div>
</div>




<script>
    var form = '';
    form += '<h3>Team Assignment</h3>';
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
  	
  </script>

<?php require '../dynamic/footer.php'; ?>