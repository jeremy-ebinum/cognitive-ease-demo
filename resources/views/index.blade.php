@extends('layouts.app')

@section('title', '5 Question Trivia - Intro')

@section('page-class', 'index-page')

@section('header')
    @include('includes.header', ['headerTitle' => 'Intro'])
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-5 mb-4 bg-light rounded-3 shadow">
                    <div class="container-fluid text-center">
                        <h1 class="display-5 fw-bold">Five Question Trivia</h1>

                        <p>You will be posed with a series of questions.</p>

                        <p>For each question, select the option you believe is the correct answer.
                        </p>

                        <a class="btn btn-primary btn-md text-uppercase"
                           href="{{ route('start') }}">
                            Start
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
