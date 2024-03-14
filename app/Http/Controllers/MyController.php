<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function nextPage(Request $request)
{
    $value1 = $request->input('A');
    $value2 = $request->input('B');
    
    // Redirect to the next page with the values
    return redirect()->route('ab.page')->with(['value1' => $value1, 'value2' => $value2]);
}
}
