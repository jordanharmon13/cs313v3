<?php require 'dynamic/header.php'; ?>

<h1 id="main-h1">Assignments</h1>

<div>

  <h2>Week 2 Form Project</h2>
  

  <div>
    <p id="form"></p>
	
  </div>
</div>

<script>
    var form = '';
    form += '<form action="form-results.php" method="post">';
    form += '<label for="name">Name:</label>';
    form += '<input type="text" name="name" id="name"><br>';
    form += '<label for="email">Email:</label>';
    form += '<input type="text" name="email" id="email"><br>';
    form += '<label for="major">Major:</label> <br>';
    form += '<input type="radio" name="major" value="Computer Science"> Computer Science<br>';
    form += '<input type="radio" name="major" value="Web Development and Design"> Web Development and Design<br>';
    form += '<input type="radio" name="major" value="Computer Information Technology"> Computer Information Technology<br>';
    form += '<input type="radio" name="major" value="Computer Engineering"> Computer Engineering<br>';
    form += '<label for="places">Places You have Visited:</label> <br>';
    form += '<input type="checkbox" name="places" value="North America"> North America<br>';
    form += '<input type="checkbox" name="places" value="South America"> South America<br>';
    form += '<input type="checkbox" name="places" value="Europe"> Europe<br>';
    form += '<input type="checkbox" name="places" value="Asia"> Asia<br>';
    form += '<input type="checkbox" name="places" value="Australia"> Australia<br>';
    form += '<input type="checkbox" name="places" value="Africa"> Africa<br>';
    form += '<input type="checkbox" name="places" value="Antartica"> Antartica<br>';
  	form += '<label for="comment">Comments:</label>';
  	form += '<textarea rows="4" cols="50" name="comment" form="usrform" id="comment">';
  	form += 'Enter text here...</textarea><br>';
  	form += '<input type="submit">';
  	form += '</form>';
  	
  	document.getElementById('form').innerHTML = form;
  </script>

<?php require 'dynamic/footer.php'; ?>