<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Thanks to moment contributors:
 * https://github.com/moment/moment/commits/b84f097e5566ed370694abdc029223a5af94a290/src/locale/hu.js
 */
$huWeekEndings = ['vasárnap', 'hétfőn', 'kedden', 'szerdán', 'csütörtökön', 'pénteken', 'szombaton'];

return [
    'year' => ':count év',
    'y' => ':count év',
    'month' => ':count hónap',
    'm' => ':count hónap',
    'week' => ':count hét',
    'w' => ':count hét',
    'day' => ':count nap',
    'd' => ':count nap',
    'hour' => ':count óra',
    'h' => ':count óra',
    'minute' => ':count perc',
    'min' => ':count perc',
    'second' => ':count másodperc',
    's' => ':count másodperc',
    'ago' => ':time',
    'from_now' => ':time múlva',
    'after' => ':time később',
    'before' => ':time korábban',
    'year_ago' => ':count éve',
    'month_ago' => ':count hónapja',
    'week_ago' => ':count hete',
    'day_ago' => ':count napja',
    'hour_ago' => ':count órája',
    'minute_ago' => ':count perce',
    'second_ago' => ':count másodperce',
    'year_after' => ':count évvel',
    'month_after' => ':count hónappal',
    'week_after' => ':count héttel',
    'day_after' => ':count nappal',
    'hour_after' => ':count órával',
    'minute_after' => ':count perccel',
    'second_after' => ':count másodperccel',
    'year_before' => ':count évvel',
    'month_before' => ':count hónappal',
    'week_before' => ':count héttel',
    'day_before' => ':count nappal',
    'hour_before' => ':count órával',
    'minute_before' => ':count perccel',
    'second_before' => ':count másodperccel',
    'months' => ['január', 'február', 'március', 'április', 'május', 'június', 'július', 'augusztus', 'szeptember', 'október', 'november', 'december'],
    'months_short' => ['jan.', 'feb.', 'márc.', 'ápr.', 'máj.', 'jún.', 'júl.', 'aug.', 'szept.', 'okt.', 'nov.', 'dec.'],
    'weekdays' => ['vasárnap', 'hétfő', 'kedd', 'szerda', 'csütörtök', 'péntek', 'szombat'],
    'weekdays_short' => ['vas', 'hét', 'kedd', 'sze', 'csüt', 'pén', 'szo'],
    'weekdays_min' => ['v', 'h', 'k', 'sze', 'cs', 'p', 'sz'],
    'ordinal' => ':number.',
    'formats' => [
        'LT' => 'H:mm',
        'LTS' => 'H:mm:ss',
        'L' => 'YYYY.MM.DD.',
        'LL' => 'YYYY. MMMM D.',
        'LLL' => 'YYYY. MMMM D. H:mm',
        'LLLL' => 'YYYY. MMMM D., dddd H:mm',
    ],
    'calendar' => [
        'sameDay' => '[ma] LT[-kor]',
        'nextDay' => '[holnap] LT[-kor]',
        'nextWeek' => function (\Carbon\CarbonInterface $date) use ($huWeekEndings) {
            return '['.$huWeekEndings[$date->dayOfWeek].'] LT[-kor]';
        },
        'lastDay' => '[tegnap] LT[-kor]',
        'lastWeek' => function (\Carbon\CarbonInterface $date) use ($huWeekEndings) {
            return '[múlt '.$huWeekEndings[$date->dayOfWeek].'] LT[-kor]';
        },
        'sameElse' => 'L',
    ],
    'meridiem' => ['DE', 'DU'],
    'first_day_of_week' => 1,
    'day_of_first_week_of_year' => 4,
    'list' => [', ', ' és '],
];
