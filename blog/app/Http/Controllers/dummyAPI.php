<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class dummyAPI extends Controller
{
    //
    function getPost(){
        return PostModel::all();
    }
}
