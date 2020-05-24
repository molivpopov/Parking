<?php

namespace App\Calculations;


trait Bill
{
    // $period must be sorted by from
    // $startTime, $endTime - UNIX TIME is sec
    protected function makeBill(
        $startTime,
        $endTime,
        $periods,
        $sum = null)
    {

        $endPeriod = 0;
        $startDay = strtotime(date('Y-m-d', $startTime));

        foreach ($periods as $period) {

            $from = strtotime($period->from) - strtotime('TODAY');

            if (
                $startTime >= $startDay + $from &&
                $startTime < ($endPeriod = $startDay + $from + $period->duration)
            ) {
                $endPeriod = $endPeriod > $endTime ? $endTime : $endPeriod;

                if (isset($sum[$period->name])) {
                    $sum[$period->name]['quantity'] += ($endPeriod - $startTime)/3600;
                } else {
                    $sum[$period->name]['quantity'] = ($endPeriod - $startTime)/3600;
                    $sum[$period->name]['rate'] = $period->tax;
                }

            }

            $startTime = $endPeriod < $startTime ? $startTime : $endPeriod;

        }

        if ($startTime < $endTime) {
            return $this->makeBill($startTime, $endTime, $periods, $sum);
        }

        return $sum;

    }

}
