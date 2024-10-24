<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Processo;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $usuarios = User::all();
        $processos = Processo::all();
        return view('dashboard', compact('usuarios', 'processos'));
    }
    public function processos(){
        $usuarios = User::all();
        $processos = Processo::all();
        return view('processos', compact('usuarios', 'processos'));
    }
}
