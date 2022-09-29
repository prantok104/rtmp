<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //variables declare
    protected $folder = 'backend.dashboard.';


    protected function index(){
        return view("{$this->folder}index");
    }
}
