@extends('layouts.app')

@section('title', '5 Question Trivia - Question 4')

@section('page-class', 'question-4-page')

@section('header')
    @include('includes.header', [
        'headerTitle' => 'Question 4/5',
        'hasTimer' => true,
    ])
@endsection

@include('includes.question', [
    'category' => 'Animals',
    'questionNum' => 4,
    'questionPrompt' => 'Which of the following is another name for the Peacock Tarantula?',
    'choice1' => 'Poecilotheria hanumavilasumica',
    'choice2' => 'Poecilotheria tigrinawesseli',
    'choice3' => 'Poecilotheria fasciata',
    'choice4' => 'Gooty',
    'next' => 5,
])

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
