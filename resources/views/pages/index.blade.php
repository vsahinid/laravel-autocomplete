@extends('layouts.app')

@section('content')
    {{-- @include('pages.home.new_jumbotron') --}}
@section('title', 'Home')
@section('description', 'Home page for Autocomplete App')

    @include('pages.home.jumbotron')

@endsection
