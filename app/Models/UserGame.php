<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class UserGame extends Model
{
    use HasFactory;

    protected $table = 'usergame';

    protected $fillable = [
        'username', 
        'name', 
        'phonenumber', 
        'password'
    ];

    // protected function type(): Attribute
    // {
    //     return new Attribute(
    //         get: fn($value)=> ["user","admin"][$value],
    //     );
        
    // }
}
