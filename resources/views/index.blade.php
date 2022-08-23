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
                <div class="position-relative p-3 p-md-5 mb-4 bg-light rounded-3 shadow">
                    <div class="jumbotron container-fluid text-center">
                        <h1 class="display-6 display-md-5 fw-bold">Five Question Trivia</h1>

                        <p>You will be posed with a series of questions.</p>

                        <p>For each question, please select a choice within the time limit of 30 seconds.</p>

                        <a class="btn btn-primary btn-lg text-uppercase"
                           href="{{ route('start') }}">
                            Start
                        </a>

                        <p class="misdirection-disclaimer text-muted mt-1">
                            By selecting 'Start', you consent to participate in this research.
                        </p>
                    </div>

                    @include('includes.mere-exposure')
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
