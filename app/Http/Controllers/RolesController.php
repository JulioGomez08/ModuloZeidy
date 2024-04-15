<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    //
    public static function verificRole()
    {
        return Auth::user()->role;
        
        switch ($role) {
            case '0':
                return redirect()->route('reportes.index');
                break;

            case '1':
                return redirect()->route('graficas.index');
                break;
            default:
                return redirect()->route('google.com');
                break;
        }
    }
}
