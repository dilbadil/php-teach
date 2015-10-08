<?php 

require "Bird.php";
require "Eagle.php";

$date = new DateTime();
echo "format <pre>" . print_r($date->format('d M Y H:i'), 1) . "</pre>";

class BadilDateTime extends DateTime 
{
    public function addDays($days);
    public function addHours($hours);
    public function addMinutes($minutes);

    /**
     * @return int
     */
    public function hourRangeWith($otherDate);

    /**
     * @return int
     */
    public function dayRangeWith($otherDate);
}

$date = new BadilDateTime('2012-3-3');
$date->addHours(10);

$date2 = new BadilDateTime();

$date2->hourRangeWith($date); // 10
$date2->hourRangeWith($date); // 10

//
// echo $date->format('d M Y');
