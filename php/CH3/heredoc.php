<?php
  $author = "Steven Wang";

  echo <<<_END
  <h1>This is an h1.</h1>
  Debugging is twice as hard as writing the code in the first place.
  Therefore, if you write the code as cleverly as possible, you are,
  by definition, not smart enough to debug it.

  - $author.
_END;

  echo "<br>";

  $out = <<<_FEATURES
  Normal people believe that if it ain't broke, don't fix it.
  Engineers believe that if it ain't broke, it doesn't have enough
  features yet.

  - $author.
_FEATURES;
echo $out;
?>