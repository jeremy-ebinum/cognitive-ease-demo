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
                <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
                    <div class="container-fluid text-center">
                        <h1 class="display-5 fw-bold text-success">Thank you!</h1>
                        <p class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam velit in maxime eaque
                            voluptatem ullam, blanditiis vel, facilis obcaecati optio nisi molestias dicta, vero asperiores
                            quo necessitatibus sed perferendis ex?.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('includes.footer', ['enableAbout' => true])
@endsection
