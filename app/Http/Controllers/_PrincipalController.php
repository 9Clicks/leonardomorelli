<?php

namespace App\Http\Controllers;
use DB;
use App\appSettings;
use Illuminate\Http\Request;

class _PrincipalController extends Controller
{
    public function index()
    {

        $settings_app          = DB::table('app_settings')->first();

        return view('principal.index', [
            'settings_app'     => $settings_app
        ]);
    }
}
