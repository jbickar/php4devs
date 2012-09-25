<?php

function __autoload($classname) {
  $classpath = $classname . '.php';
  include_once($classpath);
}

//create an array to store our Article and SeriesArticle objects
$articles = array();
$title = "Bacon";
$body = "Bacon ipsum dolor sit amet brisket kielbasa boudin tail, pastrami tongue corned beef turkey swine ham sirloin rump. Short ribs meatball tenderloin tongue venison jowl. Venison sirloin capicola beef hamburger. Pork meatloaf chuck, short ribs drumstick frankfurter beef ribs corned beef prosciutto salami leberkas shank cow boudin. Ribeye chuck tail beef jowl frankfurter, shank leberkas boudin tri-tip short loin andouille venison. Rump drumstick tongue, sausage short loin chicken pork belly ground round. Bresaola meatball ham filet mignon leberkas turducken biltong ham hock jerky short loin bacon chicken sirloin.";
$series = 1;
//create a new SeriesArticle object
$articles[] = new SeriesArticle($title, $body, $series);
$title = "Ribeye";
$body = "Ribeye jowl ham rump tri-tip t-bone. Capicola ham hock chicken t-bone drumstick, flank prosciutto salami ribeye tri-tip corned beef hamburger venison. Tail jerky biltong, beef pig meatloaf shank drumstick frankfurter pork chop flank pastrami filet mignon short loin jowl. Venison brisket sausage, turducken filet mignon ham hock flank shoulder short ribs tongue tri-tip.";
$series = 1;
//create a new SeriesArticle object
$articles[] = new SeriesArticle($title, $body, $series);
$title = "Spare ribs";
$body = "Spare ribs turkey corned beef, chicken pork chop sirloin ball tip andouille ham pancetta tongue beef rump. Tail flank sausage, pork spare ribs sirloin turducken tenderloin. Jerky hamburger andouille, bacon biltong swine meatball short ribs ground round spare ribs. Meatball pork loin boudin pork chop frankfurter ground round hamburger turkey prosciutto rump pork belly.";
$series = "A";
//create a new SeriesArticle object
$articles[] = new SeriesArticle($title, $body, $series);
$title = "Chuck";
$body = "Chuck boudin swine, ribeye filet mignon salami venison kielbasa. Flank frankfurter boudin, short ribs pig chuck prosciutto. Chicken shankle prosciutto jowl. Cow short loin frankfurter biltong. Chicken shankle brisket venison. T-bone fatback ham ball tip, filet mignon tenderloin ham hock beef ribs chicken tri-tip chuck. Ball tip turkey tri-tip beef bacon filet mignon frankfurter pork chop hamburger shoulder jerky pork belly drumstick.";
//create a new Article object
$articles[] = new Article($title, $body);

//create an array to hold the return values of the getSeries() method
$series_collection = array();
foreach ($articles as $article) {
  //check if it is of the SeriesArticle class
  if ($article instanceOf SeriesArticle) {
    //use the getSeries() method
    $series_collection[] = $article->getSeries();
  }
}

?>
<html>
<head>
<title>Exercise 3: Extending Classes</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<head>
<body>

<h2>Articles</h2>
<pre>
<?php var_dump($articles); ?>
</pre>

<h2>Series Articles</h2>
<pre>
<?php var_dump($series_collection); ?>
</pre>
?>

</body>
</html>

