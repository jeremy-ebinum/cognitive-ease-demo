<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    /**
     * Show the application index page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $storeName = config('constants.STORE_NAME');
        $storeTime = config('constants.STORE_TIME');

        if (!Cookie::has($storeName)) {
            // Initialize Store
            Cookie::queue($storeName, json_encode(array()), $storeTime);
            return view('index');
        }

        // Return landing page or finish page depending on isFinished prop
        $store = json_decode(Cookie::get($storeName), true);
        $isFinished = isset($store['isFinished']);

        return $isFinished ? view('finish') : view('index');
    }
}
