<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function showPosts(){
        $posts=[
            ['title' => 'laravel','authar' => 'mohd','date' => '01-01-2022'],
            ['title' => 'javascript','authar' => 'ahmed','date' => '01-04-2022']
            ];
          return view('welcome',['posts' => $posts]);
    }
}
