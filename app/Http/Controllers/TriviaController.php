<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriviaController extends Controller
{

    /**
     * Begin the trivia
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function start()
    {

        return view('question-1');
    }

    /**
     * Manage next questions of the trivia
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function next(Request $request)
    {
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
                return view('finish');
            default:
                abort(404, 'Not Found');
        }
    }
}
