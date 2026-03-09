<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $course->title }} ({{ $course->code }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-gray-700">{{ $course->description }}</p>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-800">
                    {{ __('Modules') }}
                </h3>
                <a href="{{ route('modules.create', $course) }}"
                   class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                    {{ __('Tambah Module') }}
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    @forelse ($course->modules as $module)
                        <div class="border-b pb-4 last:border-b-0 last:pb-0">
                            <div class="flex justify-between items-start">
                                <div>
                                    <div class="font-semibold text-gray-900">
                                        {{ $module->title }}
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        {{ $module->description }}
                                    </div>
                                    <div class="mt-1 text-xs text-gray-500">
                                        {{ strtoupper($module->doc_source) }}
                                        @if($module->doc_path)
                                            • {{ $module->doc_path }}
                                        @endif
                                    </div>
                                </div>
                                <a href="{{ route('lessons.create', $module) }}"
                                   class="inline-flex items-center px-3 py-1 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                                    {{ __('Tambah Lesson') }}
                                </a>
                            </div>

                            @if($module->lessons->isNotEmpty())
                                <div class="mt-3 pl-4 border-l space-y-2">
                                    @foreach($module->lessons as $lesson)
                                        <div class="text-sm text-gray-800">
                                            <span class="font-semibold">{{ $lesson->title }}</span>
                                            <span class="text-xs text-gray-500">({{ $lesson->type }})</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @empty
                        <p class="text-gray-500">{{ __('Belum ada module.') }}</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

