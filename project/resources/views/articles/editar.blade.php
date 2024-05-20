<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-300 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('articles.update',$article->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                            <label
                                class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">TITULO:</label>
                            <input name="title" value="{{ $article->title_article }}"
                                   class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent my-2"
                                   type="text" required/>
                        </div>

                        <div class="grid grid-cols-1 mb-8 ">
                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">RESUMEN ARTICULO:</label>
                            <input name="text_article" value="{{ $article->text_article }}"
                                   class="py-4 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                   type="text" required/>
                        </div>
                    <div class='flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5'>
                        <a href="{{ route('articles.index') }}"
                           class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                        <button type="submit"
                                class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


