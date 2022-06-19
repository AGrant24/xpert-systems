<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'client_id',
        'status',
        'date',
        'time',
        'duration',
        'invoiced',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
