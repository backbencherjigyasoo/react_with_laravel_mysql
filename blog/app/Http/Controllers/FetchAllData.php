<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class FetchAllData extends Controller
{
    //
    function getAllData(){
        return Post::all();
    }
}
