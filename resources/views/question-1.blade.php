@extends('layouts.app')

@section('title', '5 Question Trivia - Question 1')

@section('page-class', 'question-1-page')

@section('header')
    @include('includes.header', [
        'headerTitle' => 'Question 1/5',
        'hasTimer' => true,
    ])
@endsection

@include('includes.question', [
    'category' => 'Geography',
    'questionNum' => 1,
    'questionPrompt' => 'Which of these countries is NOT a part of the Asian continent?',
    'choice1' => 'Russia',
    'choice2' => 'Singapore',
    'choice3' => 'Suriname',
    'choice4' => 'Georgia',
    'next' => 2,
])

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
