<!-- p.88 4-35 -->
<?php
$fp = fopen("text.txt", 'wb');

for ($j = 0 ; $j < 100 ; ++ $j)
{
    $written = fwrite($fp, "123");

    if ($written == FALSE) break;
}

fclose($fp);
?>