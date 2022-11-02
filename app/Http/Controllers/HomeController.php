<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $data= DB::table('post')
        ->get();
        return view('tampilan.index',compact(['data']));
    }
     public function show($id)
    {
        $data = Dashboard::find($id);
        return view('tampilan.show',compact(['data']));
    }
}
