@extends('layouts.app')

@section('title', '5 Question Trivia - Question 2')

@section('page-class', 'question-2-page')

@section('header')
    @include('includes.header', [
        'headerTitle' => 'Question 2/5',
        'hasTimer' => true,
    ])
@endsection

@include('includes.question', [
    'category' => 'Film',
    'questionNum' => 2,
    'questionPrompt' => 'What did Alfred Hitchcock use as blood in the film "Psycho"?',
    'choice1' => 'Chocolate syrup',
    'choice2' => 'Red food coloring',
    'choice3' => 'Ketchup',
    'choice4' => 'Maple syrup',
    'next' => 3,
])

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
