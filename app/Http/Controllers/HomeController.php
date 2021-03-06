<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        return view('home');
    }
}
