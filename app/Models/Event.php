<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_name', 'event_date'];

    public function financialReports()
    {
        return $this->hasMany(FinancialReport::class);
    }
}
