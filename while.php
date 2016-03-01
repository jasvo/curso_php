<?php
/* example 1 */

$i = 0;
while ($i <= 10) {
    echo $i;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
    $i = $i+1;
}