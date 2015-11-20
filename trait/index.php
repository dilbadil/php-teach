<?php 

require "CanAttack.php";
require "Eagle.php";
require "Snake.php";

$eagle = new Eagle;
echo $eagle->attack();

echo "<br/>";
$snake = new Snake;
echo $snake->attack();
