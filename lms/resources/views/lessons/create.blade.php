<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Lesson untuk') }} {{ $module->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('lessons.store', $module) }}" class="space-y-4">
                        @csrf

                        <div>
                            <x-input-label for="title" value="Judul Lesson" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="type" value="Tipe Konten" />
                            <select id="type" name="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="text">Teks</option>
                                <option value="link">Link</option>
                                <option value="video">Video</option>
                                <option value="file">File (butuh pengembangan upload)</option>
                            </select>
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="content" value="Konten (Markdown sederhana)" />
                            <textarea id="content" name="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="6"></textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="external_url" value="URL Eksternal (untuk link/video)" />
                            <x-text-input id="external_url" name="external_url" type="url" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('external_url')" class="mt-2" />
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

