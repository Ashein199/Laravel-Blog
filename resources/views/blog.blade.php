<x-layout>
    <x-slot name="title">
        <title>{{ $blog->title }}</title>
    </x-slot>
    <h1>{{ $blog->title }} </h1>
    <p> {!! $blog->body !!} </p> {{-- unescape html tag --}}
    <a href="/">go back</a>

</x-layout>
