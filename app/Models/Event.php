<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'event_id';

    protected $fillable = ['event_name', 'event_date', 'event_location'];

    public function financialReport()
    {
        return $this->hasOne(FinancialReport::class, 'event_id');
    }
}

