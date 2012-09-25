<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<title>Exercise 2: Creating Classes</title>
<head>
<body>
<h2>Submit an Article</h2>
<form method="post" id="dateform" action="index.php">
  <label for="title">Title</label>
    <input type="text" name="title" />
    <br />
  <label for="body">Body</label>
    <textarea name="body" rows="10" cols="100">
    </textarea>
    <br />
    <input type="submit" value="Submit" />
</form>

<?php

//autoload our classes by looking for ClassName.php in the current directory
function __autoload($classname) {
  $classpath = $classname . '.php';
  //for this example, see Article.php
  include_once($classpath);
}
//do this if the user has posted the form
if(!empty($_POST)) {
  //create a new object of the Article class and pass the title and body fields from the form
  $article = new Article($_POST['title'], $_POST['body']);
  $excerpt = '<h2>Excerpt</h2>';
  //run the getExcerpt() method on our $article object and echo it with some HTML formatting
  $excerpt .= '<p>' . $article->getExcerpt() . ' <strong>&lt;--for the lulz, this is what your article body text looks like when it gets truncated by a lazy developer</strong></p>';
  echo $excerpt;
  $body = '<h2>Body</h2>';
  //run the getBody() method on our $article object and echo it.
  $body .= '<p>' . $article->getBody() . '</p>';
  echo $body;
}
?>
</body>
</html>

