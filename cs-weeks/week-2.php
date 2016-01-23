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
    form += '<input type="radio" name="major" value="Computer Science"> Computer Science<br>';
    form += '<input type="radio" name="major" value="Web Development and Design"> Web Development and Design<br>';
    form += '<input type="radio" name="major" value="Computer Information Technology"> Computer Information Technology<br>';
    form += '<input type="radio" name="major" value="Computer Engineering"> Computer Engineering<br>';
    form += '<label for="places">Places You have Visited:</label> <br>';
    form += '<input type="checkbox" name="places[]" value="North America"> North America<br>';
    form += '<input type="checkbox" name="places[]" value="South America"> South America<br>';
    form += '<input type="checkbox" name="places[]" value="Europe"> Europe<br>';
    form += '<input type="checkbox" name="places[]" value="Asia"> Asia<br>';
    form += '<input type="checkbox" name="places[]" value="Australia"> Australia<br>';
    form += '<input type="checkbox" name="places[]" value="Africa"> Africa<br>';
    form += '<input type="checkbox" name="places[]" value="Antartica"> Antartica<br>';
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
    form += '<input type="radio" name="question1" value="Red"> Red<br>';
    form += '<input type="radio" name="question1" value="Blue"> Blue<br>';
    form += '<input type="radio" name="question1" value="Yellow"> Yellow<br>';
    form += '<input type="radio" name="question1" value="Green"> Green<br>';
    form += '<label for="question2">What is your favorite animal?</label><br>';
    form += '<input type="radio" name="question2" value="Bird"> Bird<br>';
    form += '<input type="radio" name="question2" value="Dog"> Dog<br>';
    form += '<input type="radio" name="question2" value="Cat"> Cat<br>';
    form += '<input type="radio" name="question2" value="Horse"> Horse<br>';
    form += '<label for="question3">Where were you born?</label><br>';
    form += '<input type="radio" name="question3" value="US"> US<br>';
    form += '<input type="radio" name="question3" value="Canada"> Canada<br>';
    form += '<input type="radio" name="question3" value="Mexico"> Mexico<br>';
    form += '<input type="radio" name="question3" value="Europe"> Europe<br>';
    form += '<label for="question4">Are you married?</label><br>';
    form += '<input type="radio" name="question4" value="Yes"> Yes<br>';
    form += '<input type="radio" name="question4" value="No"> No<br>';
    form += '<input type="submit">';
    form += '</form><br>';
    
    form += '<p><a href="results-form.php">See Results</a></p>';
    document.getElementById('form').innerHTML = form;
  }
  </script>

<?php require '../dynamic/footer.php'; ?>