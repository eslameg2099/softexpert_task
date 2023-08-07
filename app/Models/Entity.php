<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function attributess()
    {
        return $this->hasMany(Attribute::class,'entity_id');
    }

    
}
