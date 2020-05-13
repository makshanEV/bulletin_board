<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [
    	'title',
    	'slug',
    	'full_text',
    	'price',
    	'phone_number',
    	'category_id',
    	'user_id'
    ];
    public function category()
	{
    	return $this->belongsTo(Category::class);
	}
	public function user()
	{
    	return $this->belongsTo('App\User');
	}
}
