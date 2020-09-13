<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['path'];

    public function user(){
        return $this->hasOne(User::class);
    }
}
