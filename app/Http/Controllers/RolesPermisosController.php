<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesPermisosController extends Controller
{
    public function show()
    {
        
    }

    public function create()
    {
        return view('roles_permisos.create');
    }
}
