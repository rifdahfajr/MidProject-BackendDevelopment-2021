<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname', 'username', 'password', 'confirmpassword', 'address', 'phonenumber', 'age', 'birthdate'
    ];
}
