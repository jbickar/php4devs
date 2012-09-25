<?php
class SeriesException extends Exception {

}

function onlyNumeric($series) {
  if (!is_numeric($series)) {
    throw new SeriesException ("Series must be a number.");
  }
}    

try {
  onlyNumeric(1);
  onlyNumeric("A");
} catch (SeriesException $e) {
  echo $e->getMessage();
  die;
} catch (Exception $e) {
  echo $e->getMessage();
  die;
}