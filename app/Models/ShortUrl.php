<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class ShortUrl extends Model
{
    use HasFactory;

    protected $keyType = 'uuid';
    public $incrementing = false;

    protected static function boot(){
        
        parent::boot();
        static::creating(function($model){
            $model->{$model->getKeyName()} = (string) Uuid::uuid4();
        });
    }

    protected $fillable = ['original_url', 'short_url', 'id'];
}
