<?php
class Article {
  public function __construct ($title, $body) {
    $this->title = $title;
    $this->body = $body;
  }
//  public $title;
//  public $body;

  public function getBody() {
    $body = $this->body;
    return $body;
  }
  public function getExcerpt() {
    $excerpt = $this->body;
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 100);
    return $excerpt;
  }
}

?>
