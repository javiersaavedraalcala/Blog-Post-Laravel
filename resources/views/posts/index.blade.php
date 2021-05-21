<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artículos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4 text-center" :status="session('status')" />

                    <a href="{{ route('post.create') }}" class="px-4 py-2 bg-blue-500 text-white text-semibold rounded-sm">Crear</a>

                    <table class="text-left w-full border-collapse mt-7">
                        <thead>
                            <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Título</th>
                                <th colspan="2" class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr class="hover:bg-gray-100">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $item->id }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $item->title }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        <div class="flex justify-around">
                                            <a href="{{ route('post.edit', $item) }}" class="px-4 py-2 bg-yellow-300 text-white text-demibold rounded-sm">Editar</a>
                                            
                                            <form action="{{ route('post.destroy', $item) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onClick="return confirm('¿Deseas eliminar?')" class="px-4 py-2 bg-red-700 text-white text-demibold rounded-sm">Eliminar</button>
                                            </form>
                                        </div>
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
</x-app-layout>
