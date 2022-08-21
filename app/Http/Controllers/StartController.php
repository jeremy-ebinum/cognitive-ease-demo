<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{

    /**
     * Manage each step of the survey
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function start()
    {

        return view('step-1');
    }

    /**
     * Manage next steps of the survey
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function next(Request $request)
    {
        $step = $request->input('step');

        switch ($step) {
            case 0:
                return view('finish');
            case 2:
                return view('step-2');
            case 3:
                return view('step-3');
            case 4:
                return view('step-4');
            case 5:
                return view('step-5');
            default:
                abort(404, 'Not Found');
        }
    }
}
