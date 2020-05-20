<?php

namespace App\Http\Controllers\Estudiante;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/estudiante/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('estudiante.auth:estudiante');
    }

    /**
     * Show the Estudiante dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('estudiante.home');
    }

}