<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projectes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-300 overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="w-1/8 px-2 py-1">TITULO</th>
                        <th class="w-1/8 px-2 py-1">RESUMEN PROYECTO</th>
                        <th class="w-1/8 px-2 py-1">RESULTADOS</th>
                        <th class="w-1/4 px-2 py-1">ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projectes as $index => $projecte)
                        <td class="w-1/8 px-2 py-1">{{ $projecte->title_projecte }}</td>
                        <td class="w-1/8 px-2 py-1">{{ $projecte->text_projecte }}</td>
                        <td class="w-1/8 px-2 py-1">{{ $projecte->text_resultat }}</td>
                        <td class="w-1/4 px-2 py-1">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <a href="{{ route('projectes.edit', $projecte->id) }}"
                                   class="rounded bg-green-500 text-white font-bold py-2 px-2 mr-4">Editar</a>
                                <form action="{{ route('projectes.destroy', $projecte->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="rounded bg-red-500 text-white font-bold py-2 px-2">
                                        Borrar
                                    </button>
                                </form>
                            </div>
                        </td>
                    @endforeach
                    </tbody>
                </table>

                <div>
                    {!! $projectes->links() !!}
                </div>

            </div>
            <div class="py-8">
                <form action="{{ route('projectes.create') }}" method="GET">
                    <button type="submit"
                            class="bg-cyan-500 px-5 py-3 rounded-lg text-gray-200 font-semibold hover:bg-cyan-700 transition duration-200 ease-in-out mt-4 mb-4">
                        Crear
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
