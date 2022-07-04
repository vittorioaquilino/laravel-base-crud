<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    //
    use SoftDeletes;
    protected $table = 'comics';
    protected $fillable = [
        'title',
        'thumb',
        'series',
        'description',
        'sale_date',
        'type',
        'price'
    ];
}
