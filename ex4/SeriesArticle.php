<?php

class SeriesArticle extends Article {
  public function __construct($title, $body, $series) {
    parent::__construct($title, $body, $series);
    if (!is_numeric($series)) {
      throw new SeriesException();
    }
    $this->series = $series;
    $this->created = new DateTime();
  }
  public function getSeries() {
    $series = $this->series;
    return $series;
  }
  public function getCreated() {
    $created = $this->created;
    $created = $created->format('jS F, Y');
    return $created;
  }
}