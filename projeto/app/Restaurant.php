<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Restaurant extends Model
{
	use HasSlug;

	protected $fillable = [
		'name', 'description', 'address', 'slug'
	];

	/**
	 * Get the options for generating the slug.
	 */
	public function getSlugOptions() : SlugOptions
	{
		return SlugOptions::create()
		                  ->generateSlugsFrom('name')
		                  ->saveSlugsTo('slug');
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function menus()
    {
    	return $this->hasMany(Menu::class);
    }

    public function owner()
    {
    	return $this->belongsTo(User::class);
    }

    public function photos()
    {
    	return $this->hasMany(RestaurantPhoto::class);
    }
}

