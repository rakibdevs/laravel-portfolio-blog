<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $with = ['category','image','technology'];
	 
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function image()
    {
    	return $this->hasMany(PortfolioImage::class);
    }

    public function technology()
    {
    	return $this->hasMany(PortfolioTechnology::class);
    }

  
    public function next(){
        // get next portfolio
        return Portfolio::where('id', '>', $this->id)->orderBy('id','asc')->first();

    }
    public  function previous(){
        // get previous  portfolio
        return Portfolio::where('id', '<', $this->id)->orderBy('id','desc')->first();

    }
}
