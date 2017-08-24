<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

	public function uppercase($str) {
		$data['uppercase'] = strtoupper($str);
		return view('uppercase', $data);
	}

	public function lowercase($str) {
		$data['lowercase'] = strtolower($str);
		return view('lowercase', $data);
	}

	public function increment($num) {
		$data['num'] = ++$num;
		return view('increment', $data);
	}

}
