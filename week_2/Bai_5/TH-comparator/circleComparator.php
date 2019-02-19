<?php 
include "circle.php";
include "comparator.php";

class CircleComparator implements Comparable
{
  public function compareTo($circleOne, $circleTwo)
  {
      $radiusOne = $circleOne->getRadius();
      $radiusTwo = $circleTwo->getRadius();

      if ($radiusOne > $radiusTwo) {
          return 1;
      }  else if($radiusOne < $radiusTwo) {
          return -1;
      } else {
          return 0;
      }
  }
} ?>

