<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $data = DB::table('product')->get();
        return view ('user.index', ['data'=>$data]);
    }
}
