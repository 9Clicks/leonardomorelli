<?php

namespace App\Http\Controllers;
use DB;
use App\appSettings;
use Illuminate\Http\Request;

class _PrincipalController extends Controller
{
    public function index()
    {
        return view('principal.index');
    }
}
