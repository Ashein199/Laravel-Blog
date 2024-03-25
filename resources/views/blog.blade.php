<x-layout>
    <x-slot name="content">
        <h1>{{ $blog->title }} </h1>
        <p> {!! $blog->body !!} </p> {{-- unescape html tag --}}
        <a href="/">go back</a>
    </x-slot>
</x-layout>
