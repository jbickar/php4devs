<?php
class SeriesException extends Exception {

}

function onlyNumeric($series) {
  if (!is_numeric($series)) {
    throw new SeriesException ("Your mother was a hamster, and your father smelt of elderberries.");
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