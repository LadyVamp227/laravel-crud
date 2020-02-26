<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Button
 * @package App
 */
class Button extends Model
{
    /**
     * @var string
     */
    public $table = "button";
    /**
     * @var string
     */
    public $primaryKey = "id";
    /**
     * @var array
     */
    public $fillable = [
        'button_id','title', 'link', 'color'
    ];
    /**
     * @var string
     */
    public $hidden = 'user_id';
    /**
     * @var bool
     */
    public $timestamps = false;
}
