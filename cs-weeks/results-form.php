<?php
require '../dynamic/header.php';


$answer = $_POST['question1'] . "\n" . $_POST['question2'] . "\n" . $_POST['question3'] . "\n" . $_POST['question4'];

 $file = '../cs-weeks/mydata.txt';
 
 //open existing file 
 $current = file_get_contents($file);
 // The new data to add to the file
 $current .= $answer;
 // Write the contents to the file, 
 file_put_contents($file, $current);

$results = file_get_contents('../cs-weeks/mydata.txt');

// color results

$colorRed = substr_count($results, "Red");
$colorBlue = substr_count($results, "Blue");
$colorYellow = substr_count($results, "Yellow");
$colorGreen = substr_count($results, "Green");

// total color votes
$totalColorVotes = $colorRed + $colorBlue + $colorYellow + $colorGreen;

// averages for each color
$redAvg = round($colorRed / $totalColorVotes * 100, 2);
$blueAvg = round($colorBlue / $totalColorVotes * 100, 2);
$yellowAvg = round($colorYellow / $totalColorVotes * 100, 2);
$greenAvg = round($colorGreen / $totalColorVotes * 100, 2);

// animal results
$animalBird = substr_count($results, "Bird");
$animalDog = substr_count($results, "Dog");
$animalCat = substr_count($results, "Cat");
$animalHorse = substr_count($results, "Horse");

// total animal votes
$totalAnimalVotes = $animalBird + $animalDog + $animalCat + $animalHorse;

// averages for each animal
$birdAvg = round($animalBird / $totalAnimalVotes * 100, 2);
$dogAvg = round($animalDog / $totalAnimalVotes * 100, 2);
$catAvg = round($animalCat / $totalAnimalVotes * 100, 2);
$horseAvg = round($animalHorse / $totalAnimalVotes * 100, 2);

// country results
$countryUS = substr_count($results, "US");
$countryCanada = substr_count($results, "Canada");
$countryMexico = substr_count($results, "Mexico");
$countryEurope = substr_count($results, "Europe");

// total country votes
$totalCountryVotes = $countryUS + $countryCanada + $countryMexico + $countryEurope;

// averages for each country
$usAvg = round($countryUS / $totalCountryVotes * 100, 2);
$canadaAvg = round($countryCanada / $totalCountryVotes * 100, 2);
$mexicoAvg = round($countryMexico / $totalCountryVotes * 100, 2);
$europeAvg = round($countryEurope / $totalCountryVotes * 100, 2);

// marital results
$maritalYes = substr_count($results, "Yes");
$maritalNo = substr_count($results, "No");

// total marital votes
$totalMaritalVotes = $maritalYes + $maritalNo;

// average for martial votes
$yesAvg = round($maritalYes / $totalMaritalVotes * 100, 2);
$noAvg = round($maritalNo / $totalMaritalVotes * 100, 2);

?>
<h1>Results</h1>

<p><a href="week-2.php">Return to Assignments Page</a></p>
<div class="all-results">
  <h2>Favorite Color</h2>
  <h4>Red Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"" . $redAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $redAvg . "%\">" . $redAvg . "%</div>"; ?>
    </div>
  <h4>Blue Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"" . $blueAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $blueAvg . "%\">" . $blueAvg . "%</div>"; ?>
    </div>
  <h4>Yellow Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"" . $yellowAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $yellowAvg . "%\">" . $yellowAvg . "%</div>"; ?>
    </div>
  <h4>Green Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"" . $greenAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $greenAvg . "%\">" . $greenAvg . "</div>"; ?>
  </div>
  
  <h2>Favorite Animal</h2>
  <h4>Bird Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"" . $birdAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $birdAvg . "%\">" . $birdAvg . "%</div>"; ?>
    </div>
  <h4>Dog Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"" . $dogAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $dogAvg . "%\">" . $dogAvg . "%</div>"; ?>
    </div>
  <h4>Cat Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"" . $catAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $catAvg . "%\">" . $catAvg . "%</div>"; ?>
    </div>
  <h4>Horse Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"" . $horseAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $horseAvg . "%\">" . $horseAvg . "</div>"; ?>
  </div>
  
  <h2>Birth Place</h2>
  <h4>US Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"" . $usAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $usAvg . "%\">" . $usAvg . "%</div>"; ?>
    </div>
  <h4>Canada Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"" . $canadaAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $canadaAvg . "%\">" . $canadaAvg . "%</div>"; ?>
    </div>
  <h4>Mexico Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"" . $mexicoAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $mexicoAvg . "%\">" . $mexicoAvg . "%</div>"; ?>
    </div>
  <h4>Europe Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"" . $EuropeAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $EuropeAvg . "%\">" . $EuropeAvg . "</div>"; ?>
  </div>
  
  <h2>Married Votes</h2>
  <h4>Yes Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"" . $yesAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $yesAvg . "%\">" . $yesAvg . "%</div>"; ?>
    </div>
  <h4>No Votes</h4>
    <div class="progress">
      <?php echo "<div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"" . $noAvg . "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " . $noAvg . "%\">" . $noAvg . "%</div>"; ?>
    </div>
  </div>

</div>
<?php


require '../dynamic/footer.php'; 

?>