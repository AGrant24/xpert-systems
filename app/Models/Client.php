<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'client_name',
        'date_of_birth',
        'address',
        'post_code',
        'email',
        'contact_number',
        'status',
        'risk_status',
        'service',
        'invoiced',
    ];


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}