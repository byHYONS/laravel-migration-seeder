<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $data = 'sono un dato passato alla pagina';

        return view('index', compact('data'));

    }
}
