<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function getwebsite() {
        
    }

    public function searchDomain(Request $request) {
        $domain = $request->input('domain');
        return redirect('https://kagantsa.co.za/cart.php?a=add&domain=register&query='.$domain);
    }
}
