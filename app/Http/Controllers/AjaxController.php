<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index(){
        $msg = "This is ajax simple message.".rand(10,999);
        return response()->json(array('msg' => $msg),200);
    }
}
