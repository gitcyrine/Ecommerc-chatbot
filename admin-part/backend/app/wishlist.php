<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }
    protected $casts = [
        'items' => 'array',
    ];
    protected $fillable = [
        'items','id_user'
    ];
}
