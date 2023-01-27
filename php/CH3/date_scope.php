<?php
  function longdate($timestamp)
  {
    return date("l F jS Y", $timestamp);
  }

  echo longdate(time());
  echo "<br>";
  // use the variable $temp in their scope
  $temp = "The date is ";
  echo $temp . longdate(time());

  // static variable
  function test()
  {
    static $count = 1;
    echo "<br>";
    echo "This is the $count time test function run.";
    $count++;
  }
  test();
  test();
  test();
?>