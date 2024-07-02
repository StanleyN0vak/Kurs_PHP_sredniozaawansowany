<?php

final class Time {
    const SECOND = 1;
    const MINUTE = self::SECOND * 60;
    const HOUR = self::MINUTE * 60;
    const DAY = self::HOUR * 24;
    const YEAR = self::DAY * 365;
}

//class Date extends Time {
//    const MONTH = self::DAY * 30;
//}
//
//echo Date::MONTH;
