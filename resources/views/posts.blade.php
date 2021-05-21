<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @foreach ($posts as $item)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($item->image)
                        <img src="{{ $item->get_image }}" class="container object-cover max-h-96">
                    @elseif($item->iframe)
                    <div class="container">
                        {!! $item->iframe !!}
                    </div>
                    @endif
                    <h5 class="font-semibold text-lg text-gray-800">{{ $item->title }}</h5>
                    <p class="text-gray-700 mt-2">
                        {{ $item->excerpt }} <br>
                        <a href="{{ route('post', $item) }}" class="text-blue-500">Leer más</a>
                    </p>
                    <p class="text-sm">
                        <br>
                        <em>
                            &ndash; {{ $item->user->name }}
                        </em>
                        {{ $item->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>