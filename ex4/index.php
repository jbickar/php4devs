<?php

function __autoload($classname) {
  $classpath = $classname . '.php';
  include_once($classpath);
}

if(!empty($_POST['series'])){
  $article = new SeriesArticle($_POST['title'], $_POST['body'], $_POST['series']);
  $title = $article->title;
  $excerpt = '<h2>Excerpt</h2>';
  $excerpt .= '<p>' . $article->getExcerpt() . '</p><p>(<strong>For the lulz, this is what your article body text looks like when it gets truncated by a lazy developer</strong>)</p>';
  echo $excerpt;
  $body = '<h2>Body</h2>';
  $body .= '<p>' . $article->getBody() . '</p>';
  echo $body;
  $series = '<h2>Series</h2>';
  $series .= '<p>' . $article->getSeries() . '</p>';
  echo $series;
  $created = '<h2>Date Created</h2>';
  $created .= '<p>' . $article->getCreated() . '</p>';
  echo $created;
}
elseif(!empty($_POST)){
  $article = new SeriesArticle($_POST['title'], $_POST['body'], $_POST['series']);
  $excerpt = '<h2>Excerpt</h2>';
  $excerpt .= '<p>' . $article->getExcerpt() . ' <strong>&lt;--for the lulz, this is what your article body text looks like when it gets truncated by a lazy developer</strong></p>';
  echo $excerpt;
  $body = '<h2>Body</h2>';
  $body .= '<p>' . $article->getBody() . '</p>';
  echo $body;
}
?>
<html>
<head>
<title>Exercise 4: Exceptions</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<head>
<body>


<form method="post" id="dateform" action="index.php">
  <label for="title">Title</label>
    <input type="text" name="title" size="75" />
    <br />
  <label for="body">Body</label>
    <textarea name="body" rows="10" cols="75">
    </textarea>
    <br />
  <label for="series">Series</label>
    <input type="text" name="series" size="2" />
    <p>Enter the series number. <strong>Only numeric values are allowed.</strong></p>
    <input type="submit" value="Submit" />
</form>

</body>
</html>

