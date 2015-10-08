<?php 

$date = new DateTIme();
echo "date methods<pre>" . print_r(get_class_methods($date), 1) . "</pre>";
echo $date->format('d M Y');
echo "p10d<pre>" . print_r(new DateInterval('P10D'), 1) . "</pre>";

