<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function about() {
        return view('site.about');
    }

    public function getwebsite() {
        return view('site.getwebsite');
    }

    public function searchDomain(Request $request) {
        $domain = $request->input('domain');
        return redirect('https://kagantsa.co.za/cart.php?a=add&domain=register&query='.$domain);
    }
}
