<?php

/**
 * Created by PhpStorm.
 * User: Talimere
 * Date: 26/04/17
 * Time: 11.58
 */

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'text',
        'img'
    ];
    public $timestamps = false;
}