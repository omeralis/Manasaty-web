<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $newsData =  News::all();
        return view('home' , compact('newsData'));
    }

    function emailData()
    {
        $newsData = DB::table('news')->paginate(5);
        return view('home' ,['newsData'=>$newsData]);
    }
}
