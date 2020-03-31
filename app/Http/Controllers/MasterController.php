<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class MasterController extends Controller
{

    public function index() {
       
        $schools = School::orderBy('created_at', 'desc')->paginate();

        return view('masters.index', compact('schools'));
      
    }
}
