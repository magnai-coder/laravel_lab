<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class MyControllerAB extends Controller
{
    public function yourNextPage()
    {
        // Retrieve values from session
        $value1 = Session::get('value1');
        $value2 = Session::get('value2');
        
        // Return the view with values
        return view('ab', compact('value1', 'value2'));
    }
}