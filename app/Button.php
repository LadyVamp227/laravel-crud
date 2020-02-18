<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    public $table = "button";
    public $primaryKey = "id";
    public $fillable = [
        'button_id','title', 'link', 'color'
    ];
    public $hidden = 'user_id';
    public $timestamps = false;
}
