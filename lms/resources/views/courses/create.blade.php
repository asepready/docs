<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Course') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('courses.store') }}" class="space-y-4">
                        @csrf

                        <div>
                            <x-input-label for="code" value="Kode Course" />
                            <x-text-input id="code" name="code" type="text" class="mt-1 block w-full" required autofocus />
                            <x-input-error :messages="$errors->get('code')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="title" value="Judul" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" value="Deskripsi" />
                            <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="4"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
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

