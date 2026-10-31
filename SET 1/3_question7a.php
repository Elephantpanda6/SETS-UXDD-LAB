<?php
for ($n = 2; $n <= 50; $n++) {
    for ($i = 2; $n % $i; $i++);
    if ($i == $n) echo "$n , ";
}
?>
