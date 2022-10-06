<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function service(){
        $contents = ['Mindfulness meditation','Spiritual meditation','Focused meditation','Movement meditation','Progressive relaxation','Loving-kindness meditation','Visualization meditation'];
        $contentName = 'Meditation Services';
        return view('service', compact('contents', 'contentName'));
    }
    public function teams(){
        return view('Our teams');
    }
    public function about(){
        return view('about us');
    }
    public function contact(){
        return view('contact us');
    }
    public function home(){
        return view('home');
    }
}
