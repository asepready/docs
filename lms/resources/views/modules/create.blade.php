<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Module untuk') }} {{ $course->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('modules.store', $course) }}" class="space-y-4">
                        @csrf

                        <div>
                            <x-input-label for="title" value="Judul Module" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" value="Deskripsi" />
                            <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="4"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="doc_source" value="Sumber Dokumentasi" />
                            <select id="doc_source" name="doc_source" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="custom">Custom</option>
                                <option value="linux">Linux</option>
                                <option value="bsd">BSD</option>
                            </select>
                            <x-input-error :messages="$errors->get('doc_source')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="doc_path" value="Path Modul Dokumentasi (opsional)" />
                            <x-text-input id="doc_path" name="doc_path" type="text" class="mt-1 block w-full"
                                placeholder="contoh: Linux/modules/module-01-introduction/README.md" />
                            <x-input-error :messages="$errors->get('doc_path')" class="mt-2" />
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

