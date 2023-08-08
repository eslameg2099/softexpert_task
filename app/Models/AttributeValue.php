<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'attribute_id',
        'objectentity_id',
        'value',
    ];

    public function objectentity()
    {
        return $this->belongsTo(Objectentity::class,'objectentity_id');
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class,'attribute_id');
    }

}
