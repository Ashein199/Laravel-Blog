@extends('layout')

@section('content')
    <h1>{{ $blog->title }} </h1>
    <p> {!! $blog->body !!} </p> {{-- unescape html tag --}}
    <a href="/">go back</a>
@endsection
