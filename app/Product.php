<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'category_id',
        'project_id',
        'description'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
