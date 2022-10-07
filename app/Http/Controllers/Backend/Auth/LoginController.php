<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Variables declare

    protected $folder = 'backend.auth.';
    public function index(){
        return view("{$this->folder}login");
    }

}
