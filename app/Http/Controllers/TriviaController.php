<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class TriviaController extends Controller
{
    /**
     * Begin the trivia
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function start()
    {
        $storeName = config('constants.STORE_NAME');


        if (!Cookie::has($storeName)) {
            return redirect('/');
        }

        // $uuid = Str::uuid()->toString();
        // $startTime = now();

        $store = json_decode(Cookie::get($storeName), true);
        $isFinished = isset($store['isFinished']);

        return $isFinished ? redirect('/') : view('question-1');
    }

    /**
     * Manage next questions of the trivia
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function next(Request $request)
    {
        $storeName = config('constants.STORE_NAME');
        $storeTime = config('constants.STORE_TIME');

        if (!Cookie::has($storeName)) {
            return redirect('/');
        }

        $store = json_decode(Cookie::get($storeName), true);

        $next = $request->input('next');
        $choice = $request->input('choice');


        switch ($next) {
            case 2:
                return view('question-2');
            case 3:
                return view('question-3');
            case 4:
                return view('question-4');
            case 5:
                return view('question-5');
            case -1:
                // Set the isFinished flag to true so user can't redo trivia
                $store['isFinished'] =  true;
                Cookie::queue($storeName, json_encode($store), $storeTime);

                return view('finish');
            default:
                abort(404, 'Not Found');
        }
    }
}
