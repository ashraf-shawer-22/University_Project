<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialReport extends Model
{
    use HasFactory;

    protected $primaryKey = 'report_id';

    protected $fillable = ['event_id', 'revenue', 'expenses', 'total_budget', 'report_date'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
