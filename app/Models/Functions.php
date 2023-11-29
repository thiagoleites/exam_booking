<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Functions extends Model
{
    public static function formatarData($data): string
    {
        $dataObj = Carbon::createFromFormat('Y-m-d', $data);

        if ($dataObj) {
            return $dataObj->format('d/m/Y');
        }

        return $data;
    }
}
