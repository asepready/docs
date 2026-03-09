<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <div class="flex justify-end">
                <a href="{{ route('courses.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                    {{ __('Buat Course') }}
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    @forelse ($courses as $course)
                        <div class="border-b pb-4 last:border-b-0 last:pb-0">
                            <a href="{{ route('courses.show', $course) }}" class="font-semibold text-lg text-blue-700">
                                {{ $course->title }} ({{ $course->code }})
                            </a>
                            <div class="text-sm text-gray-600">
                                {{ $course->description }}
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">{{ __('Belum ada course.') }}</p>
                    @endforelse

                    <div>
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

