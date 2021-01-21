<?php

namespace App\Models;
use App\Models\Technology;

use Illuminate\Database\Eloquent\Model;

class PortfolioTechnology extends Model
{
	protected $with = ['technology'];
	
    public function technology()
    {
    	return $this->belongsTo(Technology::class);
    }
}
