<?php

namespace App\Models;

use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public $timestamps = false;

   public static $rules = [
        'title' => 'required|max:200',
		'abstract' => 'required',
        'content' => 'required',
        'url'   => 'url'
    ];

	public function user()
	{
		return $this->belongsTo('App\User', 'created_by');
	}
	
	public static function search($q) 
	{
		$posts =  Post::where('title', 'like', "%$q%")
					->orWhere('content', 'like', "%$q%")
					->orWhere('abstract', 'like', "%$q%")
					->orWhereHas('user', function($query) use ($q) {
						$query->where('name', 'like', "%$q%");
					})
					->orderBy('id', 'desc')
					->paginate(5);
		$posts->appends(['q' => $q]);
		return $posts;
	}

	public static function trends() 
	{
		$trends = Post::select('content', 'abstract', 'title')
					->get();

		$str = "";

		foreach($trends as $trend) {
			$str .= preg_replace('/([.,?!])/', '', $trend['content']);
			$str .= " ";
			$str .= preg_replace('/([.,?!])/', '', $trend['abstract']);
			$str .= " ";
			$str .= preg_replace('/([.,?!])/', '', $trend['title']);
			$str .= " ";
		}

		$arr = explode(" ", $str);
		$trendsArr = [];
		$count = array_count_values($arr);
		asort($count);
		$reverse = array_reverse($count);

		foreach($reverse as $key => $value) {
			if (!in_array($key, $trendsArr) && strlen($key) > 3) {
				$trendsArr[] = $key;
			}
			if (count($trendsArr) >= 5) {
				break;
			}
		}

		return $trendsArr;
	}
}
