@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-3 p-md-5 mb-4 bg-light rounded-3 shadow-sm">
                    <div class="jumbotron container">
                        <p class="fs-5">{{ $questionPrompt }}</p>

                        <form action="{{ route('start') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- To navigate between questions --}}
                            <input type="hidden" name="next" value="{{ $next }}">

                            {{-- Choice 1 --}}
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="choice"
                                       id="choice1"
                                       value="1"
                                       required>
                                <label class="form-check-label choice1-label" for="choice1">
                                    {{ $choice1 }}
                                </label>
                            </div>

                            {{-- Choice 2 --}}
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="choice"
                                       id="choice2"
                                       value="2">

                                <label class="form-check-label choice2-label" for="choice2">
                                    {{ $choice2 }}
                                </label>
                            </div>

                            {{-- Choice 3 --}}
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="choice"
                                       id="choice3"
                                       value="3">
                                <label class="form-check-label choice3-label" for="choice3">
                                    {{ $choice3 }}
                                </label>
                            </div>

                            {{-- Choice 4 --}}
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="choice"
                                       id="choice4"
                                       value="4">
                                <label class="form-check-label choice4-label" for="choice4">
                                    {{ $choice4 }}
                                </label>
                            </div>

                            {{-- Next Button --}}
                            @if ($questionNum === 5)
                                <button class="btn btn-success text-uppercase mt-4" type="submit">Finish</button>
                            @else
                                <button class="btn btn-primary text-uppercase mt-4" type="submit">Next</button>
                            @endif

                        </form>

                        {{-- Show Primed Choice For Questions 1 - 4 --}}
                        @if (in_array($questionNum, range(1, 4)))
                            @include('includes.primed')
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
