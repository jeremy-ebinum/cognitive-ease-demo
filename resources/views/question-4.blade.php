@extends('layouts.app')

@section('title', '5 Question Trivia - Question 4')

@section('page-class', 'question-4-page')

@section('header')
    @include('includes.header', ['headerTitle' => 'Question 4/5'])
@endsection

@include('includes.question', [
    'questionNum' => 4,
    'questionPrompt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, exercitationem.',
    'choice1' => 'Choice 1',
    'choice2' => 'Choice 2',
    'choice3' => 'Choice 3',
    'choice4' => 'Choice 4',
    'next' => 5,
])

@section('footer')
    @include('includes.footer', ['enableAbout' => false])
@endsection
