<x-layout>
    <x-slot name="content">
        @foreach ($blogs as $blog)
            <div class={{ $loop->odd ? 'bg-gray' : '' }}> {{-- special variable-$loop --}}
                <h1><a href="blogs/{{ $blog->slug }}">{{ $blog->title }} </a></h1>
                <div>
                    <p> published at -{{ $blog->date }} </p>
                    <p>
                        {{ $blog->intro }}
                    </p>
                </div>
            </div>
        @endforeach
    </x-slot>
</x-layout>
