<?php

namespace App\Models;

use App\Http\Requests;
use \App\Models\BaseModel;

class Post extends BaseModel
{
   public static $rules = [
        'title' => 'required|max:200',
        'content' => 'required',
        'url'   => 'url'
    ];

	public function user()
	{
		return $this->belongsTo('App\User', 'created_by');
	}
	
	public static function search($q) 
	{
		$posts =  Post::where('title', 'like', '%' . $q . '%')->get();
		return $posts;
	}

}
