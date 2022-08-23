@extends('layouts.app')

@section('title', '5 Question Trivia - Question 3')

@section('page-class', 'question-3-page')

@section('header')
    @include('includes.header', [
        'headerTitle' => 'Question 3/5',
        'hasTimer' => true,
    ])
@endsection

@include('includes.question', [
    'category' => 'Board Games',
    'questionNum' => 3,
    'questionPrompt' => 'What is the world\'s oldest board game?',
    'choice1' => 'Go',
    'choice2' => 'Chess',
    'choice3' => 'Checkers',
    'choice4' => 'Senet',
    'next' => 4,
])

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
