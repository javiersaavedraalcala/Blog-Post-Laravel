<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($post->image)
                        <img src="{{ $post->get_image }}" class="container object-cover max-h-96">
                    @elseif($post->iframe)
                    <div class="container">
                        {!! $post->iframe !!}
                    </div>
                    @endif
                    <h5 class="font-semibold text-lg text-gray-800">{{ $post->title }}</h5>
                    <p class="text-gray-700 mt-2">
                        {{ $post->body }} <br>
                    </p>
                    <p class="text-gray-700">
                        <br>
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em> 
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>