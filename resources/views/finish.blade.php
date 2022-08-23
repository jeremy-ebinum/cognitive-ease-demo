@extends('layouts.app')

@section('title', 'Cognitive Ease Demo')

@section('page-class', 'finish-page')

@section('header')
    @include('includes.header', ['headerTitle' => 'Cognitive Ease Demo'])
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-3 p-md-5 mb-4 bg-light rounded-3 shadow-sm">
                    <div class="container-fluid text-center">
                        <h1 class="display-6 display-md-5 fw-bold text-success">Thank you!</h1>
                        <p class="fs-4">Thank you for participating in this research project.</p>
                        <p class="fs-5">To learn about Cognitive Ease, select 'About'.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('includes.footer', ['enableAbout' => true])
@endsection
