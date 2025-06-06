<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    
    public function titles () {
        return view ('titles');
    }

}
