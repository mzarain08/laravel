<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request) {
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'Zeeshan', $minutes));
        return $response;
    }
    public function getCookie(Request $request) {
        $value = $request->cookie('name');
        echo $value;
    }
}

