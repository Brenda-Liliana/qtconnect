<?php

namespace App\Http\Controllers;
use Cornford\Googlmapper\Mapper;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         Mapper::map(53.381128999999990000, -1.470085000000040000);
        return view('home');
    }

}
