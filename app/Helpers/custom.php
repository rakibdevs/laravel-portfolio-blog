<?php
namespace App\Helpers;


class Custom
{
	public static function social($title,$url,$type="Horizontal"){
		return view('helpers.social-share', compact('title','url','type'))->render();
	}
}