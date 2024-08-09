<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'id',
        'category_name'
    ];

    public function News(){
        return $this->hasMany(News::class, 'category_id', 'id');
    }
};
