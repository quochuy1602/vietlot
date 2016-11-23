<?php
/**
 * Created by PhpStorm.
 * User: chuong
 * Date: 11/22/2016
 * Time: 9:39 PM
 */

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Item extends Model{
  use Sluggable;
    public $fillable = ['title'];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
} 