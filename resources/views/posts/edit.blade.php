<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar artículo
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4 text-center" :status="session('status')" />

                    <form action="{{ route('post.update', $post) }}" class="w-1/2 mx-auto" method="POST" enctype="multipart/form-data">
                        <div>
                            <label for="title">Titulo *</label>
                            <input
                                id="title"
                                type="text"
                                name="title" 
                                required
                                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                                value="{{ old('title', $post->title) }}"
                            />
                        </div>
                        <div class="mt-2">
                            <label for="content">Contenido *</label>
                            <input
                                id="content"
                                type="text"
                                name="body" 
                                required
                                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                                value="{{ old('body', $post->body) }}"
                            />
                        </div>
                        <div class="mt-2">
                            <label for="iframe">Contenido embebido</label>
                            <input
                                id="iframe"
                                type="text"
                                name="iframe" 
                                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                                value="{{ old('iframe', $post->iframe) }}"
                            />
                        </div>
                        <div class="mt-2">
                            <label for="image">Imagen</label>
                            <input
                                id="image"
                                type="file"
                                name="file" 
                                class="pt-3 pb-2 block w-full px-0 mt-0 "
                            />
                        </div>
                        <div class="mt-7 w-1/2 mx-auto">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="px-4 py-2 w-full bg-blue-500 text-white text-semibold rounded-sm">Actualizar</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>
