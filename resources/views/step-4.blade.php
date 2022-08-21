@extends('layouts.app')

@section('page-class', 'index-page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid text-center py-5">
                        <h1 class="display-5 fw-bold">Step 4</h1>
                        <p class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, exercitationem.
                        </p>

                        {{-- START BUTTON --}}
                        {!! Form::open(['url' => '/start']) !!}
                        {!! Form::hidden('step', '5') !!}
                        {!! Form::submit('Next', ['class' => 'btn btn-primary btn-lg text-uppercase']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
