<?php

/**
 * Created by PhpStorm.
 * User: Talimere
 * Date: 01/05/17
 * Time: 18.34
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $fillable = [
        'username',
        'password',
        'first-name',
        'last-name',
        'admin'
    ];
    public $timestamps = false;
}