	<?php require 'dynamic/header.php'; ?>
	
	<h1>Week 2 Form Results</h1>
	
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?><br>
    The major you selected is: <?php echo $_POST["major"]; ?><br>
    You have visited the following places: <?php foreach($_POST['places'] as $selected) {
      echo $selected ?> <br> <?php; 
    }?>
    
  <?php require 'dynamic/footer.php'; ?>