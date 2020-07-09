<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";

    protected $fillable = [
    	 'title',
		 'slug'
	];
	/*protected $guarded = [
		 'id'
	];*/


	public function news()
	{
		return $this->belongsToMany(News::class, 'news_to_categories', 'category_id',
		'news_id', 'id');
	}


}
