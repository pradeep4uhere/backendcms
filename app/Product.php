<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = Config::get('db.prefix') . 'products';

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];
}
