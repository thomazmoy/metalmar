<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siteconfig;

class DashboardController extends Controller
{
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
        $this->data['configuracao']   = Siteconfig::all();
        return view('painel.admin.dashboard', $this->data);
    }
}