<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 04/05/2017
 * Time: 10:43
 */

use Illuminate\Database\Eloquent\Model;

class Lesmer extends Model
{
    protected $table = 'lesmer';
    protected $primaryKey = 'id';
    protected $fillable = [
        'img',
        'title',
        'text'
    ];
    public $timestamps = false;
}