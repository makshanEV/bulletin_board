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
}
