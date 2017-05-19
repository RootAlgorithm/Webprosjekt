<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/05/2017
 * Time: 20:51
 */

use Illuminate\Database\Eloquent\Model;

class artikler extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'artikkel_head',
        'artikkel_bilde',
        'artikkel_tekst',
        'artikkel_dato',
        'artikkel_sted'
    ];
    public $timestamps = false;
}