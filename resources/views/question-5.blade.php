@extends('layouts.app')

@section('title', '5 Question Trivia - Question 5')

@section('page-class', 'question-5-page')

@section('header')
    @include('includes.header', [
        'headerTitle' => 'Question 5/5',
        'category' => 'History',
        'hasTimer' => true,
    ])
@endsection

@include('includes.question', [
    'questionNum' => 5,
    'questionPrompt' => 'The pantheon in Rome was used to worship what god?',
    'choice1' => 'Athena',
    'choice2' => 'Any god they wanted',
    'choice3' => 'Both Athena and Zeus',
    'choice4' => 'Zeus',
    'next' => -1,
])

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
