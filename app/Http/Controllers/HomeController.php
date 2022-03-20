<?php

namespace App\Http\Controllers;
use App\User;
use DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $busqueda=auth()->user()->id; //usuario autenticado
        $data = User::select('*')
            ->join('role_user', 'role_user.user_id', '=', 'users.id')
            ->join('roles', 'roles.id','=','role_user.role_id')
            ->where('users.id', "=", $busqueda)
            ->get();
        
            $rolasigando = Null;
            foreach($data as $dato) 
            {
              $rolasigando = $dato->name;
            }

        if($rolasigando == 'Administrador')
        {
            return view('inicio.index');
        }

        
    }
}
