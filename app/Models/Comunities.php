<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunities extends Model
{
    use HasFactory;

    protected $fillable = [
     'code', 'nome', 'type'
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function ($model) {
            $model->randomCode();
        });
    }
        protected function randomCode(){

        do {
            $code = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        } while (static::where('code', $code)->exists());

        $this->code = $code;
    }

}

