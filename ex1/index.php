<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<title>Exercise 1: Using Existing Classes</title>
<head>
<body>
<h2>Format a Date</h2>
<form method="post" id="dateform" action="index.php">
  <label for="date">Date</label>
    <input type="text" name="date" />
    <br />
    <input type="submit" value="Format"/>
</form>

<?php

// if the form has been posted
if(!empty($_POST)){
  //filter the user input
  $date_input = filter_input(INPUT_POST, "date", FILTER_SANITIZE_STRING);
  //create a new object of the class DateTime out of the filtered user input
  $date = new DateTime($date_input);
  //use the format method of the DateTime class to change the display
  $format = $date->format('jS F, Y');
  //echo our formatted date object
  echo "The date you entered is " . $format . ".";
  //use the modify method of the DateTime class to push the user input forward 3 weeks
  $date = $date->modify("+ 3 weeks");
  //use the format method of the DateTime class to change the display
  $format = $date->format('jS F, Y');
  //echo our formatted date object
  echo "<br />The date 3 weeks later will be " . $format . ".";
}
?>
</body>
</html>

