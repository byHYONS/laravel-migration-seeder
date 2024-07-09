<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //? visualizzo la pagina home con metodo index:
    public function index() {

        $data = 'sono un dato passato alla pagina';

        return view('index', $data)->name('home');

    }

}
