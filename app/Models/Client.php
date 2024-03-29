<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'client_name',
        'date_of_birth',
        'address',
        'post_code',
        'email',
        'phone',
        'status',
        'risk_status',
        'service',
        'invoiced',
    ];


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
