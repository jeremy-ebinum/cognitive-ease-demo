<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Models\Trivia;

use Carbon\Carbon;

class TriviaController extends Controller
{

    private string $storeName;
    private int $storeTime;

    public function __construct()
    {
        $this->storeName = config('constants.STORE_NAME');
        $this->storeTime = config('constants.STORE_TIME');
    }

    /**
     * Begin the trivia
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function start()
    {
        if (!Cookie::has($this->storeName)) {
            return redirect('/');
        }

        $store = json_decode(Cookie::get($this->storeName), true);
        $isFinished = $store['isFinished'] === true;

        // startTime for Trivia
        $store['startTime'] = now();
        Cookie::queue($this->storeName, json_encode($store), $this->storeTime);


        return $isFinished ? redirect('/') : view('question-1');
    }

    /**
     * Manage next questions of the trivia
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function next(Request $request)
    {
        if (!Cookie::has($this->storeName)) {
            return redirect('/');
        }

        $store = json_decode(Cookie::get($this->storeName), true);

        $next = $request->input('next');
        $choice = $request->input('choice');


        switch ($next) {
            case 2:
                // Store answer from question-1
                $store['choice1'] = intval($choice);
                Cookie::queue($this->storeName, json_encode($store), $this->storeTime);

                return view('question-2');
            case 3:
                // Store answer from question-2
                $store['choice2'] = intval($choice);
                Cookie::queue($this->storeName, json_encode($store), $this->storeTime);

                return view('question-3');
            case 4:
                // Store answer from question-3
                $store['choice3'] = intval($choice);
                Cookie::queue($this->storeName, json_encode($store), $this->storeTime);

                return view('question-4');
            case 5:
                // Store answer from question-4
                $store['choice4'] = intval($choice);
                Cookie::queue($this->storeName, json_encode($store), $this->storeTime);

                return view('question-5');
            case -1:
                $store['choice5'] = intval($choice); // Store answer from question-5
                $store['isFinished'] =  true; // So user can't redo trivia
                $store['finishTime'] = now(); // endTime for Trivia

                Cookie::queue($this->storeName, json_encode($store), $this->storeTime);

                // Save Trivia if not exists
                $userHasTrivia = Trivia::where('user_id', $store['userId'])->exists();

                if (!$userHasTrivia) {
                    $trivia = new Trivia([
                        'user_id' => $store['userId'],
                        'choice_1' => $store['choice1'],
                        'choice_2' => $store['choice2'],
                        'choice_3' => $store['choice3'],
                        'choice_4' => $store['choice4'],
                        'choice_5' => $store['choice5'],
                        'start_time' => Carbon::parse($store['startTime']),
                        'finish_time' => Carbon::parse($store['finishTime']),
                    ]);

                    $trivia->save();
                }

                return redirect('/');
            default:
                abort(404, 'Not Found');
        }
    }
}
