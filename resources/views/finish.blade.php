@extends('layouts.app')

@section('page-class', 'finish-page')

@section('header')
    @include('includes.header', ['headerTitle' => ''])
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid text-center py-5">
                        <h1 class="display-5 fw-bold">Thank you!</h1>
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
