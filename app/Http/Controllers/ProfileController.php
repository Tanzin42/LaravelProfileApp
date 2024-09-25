<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = "75";

        // Prepare the data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Create the cookie
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Return the response with status code 200 and cookie
        return response()->json($data, 200)
                         ->cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
