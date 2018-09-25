<?php

namespace App\Http\Controllers;
use DB;
use App\appSettings;
use App\appNav;
use Illuminate\Http\Request;

class _PrincipalController extends Controller
{
    public function index()
    {

        $settings_app          = DB::table('app_settings')->first();
        $menu_app              = DB::table('app_navs')->first();

        return view('principal.index', [
            'settings_app'     => $settings_app,
            'menu_app'         => $menu_app
        ]);
    }
}
