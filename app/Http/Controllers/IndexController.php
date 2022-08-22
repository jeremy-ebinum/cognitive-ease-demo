<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    private string $storeName;
    private int $storeTime;
    private string $version;

    public function __construct()
    {
        $this->storeName = config('constants.STORE_NAME');
        $this->storeTime = config('constants.STORE_TIME');
        $this->version = config('constants.VERSION');
    }

    /**
     * Show the application index page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notHasStore = !Cookie::has($this->storeName);
        $hasWrongVersion = Cookie::has($this->storeName) &&
            json_decode(Cookie::get($this->storeName), true)['version'] !== $this->version;

        // Initialize Store with unique userId and current application version
        if ($notHasStore || $hasWrongVersion) {
            $payload = array('userId' => Str::uuid()->toString(), 'isFinished' => false, 'version' => $this->version);
            Cookie::queue($this->storeName, json_encode($payload), $this->storeTime);
            return view('index');
        }

        // Return landing page or finish page depending on isFinished prop
        $store = json_decode(Cookie::get($this->storeName), true);
        $isFinished = $store['isFinished'] === true;

        return $isFinished ? view('finish') : view('index');
    }
}
