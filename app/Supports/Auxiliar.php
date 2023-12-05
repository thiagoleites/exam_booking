<?php

use Carbon\Carbon;

function getFormattedDate(string $date): string
{
    $dateObj = Carbon::createFromFormat('Y-m-d', $date);

    if ($dateObj) {
        return $dateObj->format('d/m/Y');
    }

    return $date;
}
