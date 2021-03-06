<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
	    $messages = [
	    	[
	    		'id' => 1,
	    		'content' => 'Este es mi primer mensaje!',
	    		'image' => 'http://lorempixel.com/600/338?1',
	    	],
	    	[
	    		'id' => 2,
	    		'content' => 'Este es mi segundo mensaje!',
	    		'image' => 'http://lorempixel.com/600/338?2',
	    	],
	    	[
	    		'id' => 3,
	    		'content' => 'Otro mensaje más!',
	    		'image' => 'http://lorempixel.com/600/338?3',
	    	],
	    	[
	    		'id' => 4,
	    		'content' => 'El último mensaje!',
	    		'image' => 'http://lorempixel.com/600/338?4',
	    	],
	    ];

	    $msg = [
	    	'id' => 1,
	    	'contents' => 'Este es mi primer mensaje!',
	    	'image' => 'http://lorempixel.com/600/338?1',
	    ];

	    return view('welcome', [
	    	'messages' => $messages,
	    	'msg' => $msg,
	    ]);
    }

    public function about()
    {
    	return view('about');
    }
}
