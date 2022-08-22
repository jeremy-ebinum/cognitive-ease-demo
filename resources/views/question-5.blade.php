@extends('layouts.app')

@section('title', '5 Question Trivia - Question 5')

@section('page-class', 'question-5-page')

@section('header')
    @include('includes.header', ['headerTitle' => 'Question 5/5'])
@endsection

@include('includes.question', [
    'questionNum' => 5,
    'questionPrompt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, exercitationem.',
    'choice1' => 'Choice 1',
    'choice2' => 'Choice 2',
    'choice3' => 'Choice 3',
    'choice4' => 'Choice 4',
    'next' => -1,
])

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
