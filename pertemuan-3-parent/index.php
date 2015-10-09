<?php 

require "BadilDateTimer.php";

$date = new BadilDateTimer();
// $date->addDays()
//     ->addHours()
//     ->addMinutes();

echo "current = " . $date->format('d M Y H:i:s');
echo "<br>";
echo "Hours range with 2015-10-13 = " . $date->hourRangeWith('2015-10-13');
echo "<br>";
$otherDate = (new BadilDateTimer())->addDays(2);
echo "Days range with now + 2 days = " . $date->dayRangeWith( $otherDate );
echo "<br>";
echo "hour range with 12 Oct 2015 12:33:35 = " . $date->hourRangeWith( new DateTime('12 Oct 2015 12:33:35') );
