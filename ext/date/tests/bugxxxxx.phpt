--TEST--
Bug #XXXXX (DateTime::diff() wrong number of months and days when not inverted order, dates are even number of months apart and start day is a greater absolute number than the end day)
--FILE--
<?php
   date_default_timezone_set('UTC');
   $d1 = new DateTime('2010-01-31 00:00:00');
   $d2 = new DateTime('2010-03-01 00:00:00');
   $d  = $d1->diff($d2);
   print_r($d);
?>
--EXPECT--
DateInterval Object
(
    [y] => 0
    [m] => 1
    [d] => 1
    [h] => 0
    [i] => 0
    [s] => 0
    [weekday] => 0
    [weekday_behavior] => 0
    [first_last_day_of] => 0
    [invert] => 0
    [days] => 29
    [special_type] => 0
    [special_amount] => 0
    [have_weekday_relative] => 0
    [have_special_relative] => 0
)
