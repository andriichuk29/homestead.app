{{--@extends('layouts.base')--}}
@section('head')
    @parent
    <link rel="stylesheet" href="/css/another.css">
@endsection
@section('body')
    <h1>Welcome layout</h1>
    @include('forms.login')
    <h2>Upload a book</h2>
    @include('forms.upload')
@stop