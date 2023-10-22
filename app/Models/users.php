<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['Fname' , 'Lname' , 'password' , 'email' , 'phone' , 'payment_status'];

    public function reservations()
    {
        return $this->hasMany(reservation::class);
    }

}
