<?php

$string = 'KittyLover12'; 
$new_string = preg_replace("/[^0-9]/",'*',$string);
echo $new_string;
?>