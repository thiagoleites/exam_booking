<?php

declare(strict_types=1);

namespace App\Supports;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    public static function getFormattedDate(string $date): string
    {
        $dateObj = Carbon::createFromFormat('Y-m-d', $date);

        if ($dateObj) {
            return $dateObj->format('d/m/Y');
        }

        return $date;
    }
}
