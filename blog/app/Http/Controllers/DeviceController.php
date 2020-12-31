<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    //
    function list($id=null){
        return $id ? Device::find($id) : Device::all();
    }

    function add(Request $req){
        $device= new Device();
        $device->name=$req->name;
        $device->description=$req->description;
        $result=$device->save();
        if($result){
            return ["result"=>"Data has been saved successfully"];
        }
        else{
            return ["result"=>"Operation Failed"];
        }
        
    }
}
