<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>xkcd Password Generator</title>

	<link rel='stylesheet' href='style.css' type='text/css'>

  <?php require 'logic.php'; ?>

</head>

<body>

  <h1>xkcd Password Generator</h1>

  <p>Press "Submit" to randomly generate four common words for your password. These types of passwords are easy for you to remember, but difficult for others to guess.</p>

  <p>You can also choose to add a number or a special symbol. This will make your password even harder to guess!</p>

  <p>

  <form method='POST' action='index.php'>

  <label>Number of words for your password:</label> <input type='number' name="number_of_words" min="1" max="5"> (Maximum: 5)
  <br>
  <br>
  <input type="checkbox" name="add_a_number">Add a number
  <br>
  <br>
  <input type="checkbox" name="add_a_symbol">Add a symbol
  <br>
  <br>
  <input type='submit' value='Submit!'>

</form>

<p>

<?php

/*

$number_of_words = $_POST

if($number_of_words == 5) {
        $num_words = 5;
    }
elseif($number_of_words = 4) {
        $num_words = 4;
    }
elseif($number_of_words = 3) {
        $num_words = 3;
		}
elseif($number_of_words = 2) {
				$num_words = 2;
    }
elseif($number_of_words = 1) {
				$num_words = 1;
}

*/

$num = (int) $_POST["number_of_words"];

$rand_keys = array_rand($allwords, $num);

echo $allwords[$rand_keys[0]] . "\n";
echo $allwords[$rand_keys[1]] . "\n";

?>

</body>
</html>
