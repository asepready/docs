<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengumuman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    @forelse ($announcements as $announcement)
                        <div class="border-b pb-4 last:border-b-0 last:pb-0">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="font-semibold text-gray-900">
                                        {{ $announcement->title }}
                                    </div>
                                    <div class="text-xs text-gray-500">
                                        {{ $announcement->course->title ?? '' }} •
                                        {{ $announcement->author->name ?? '' }} •
                                        {{ $announcement->created_at->format('d M Y H:i') }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-gray-800">
                                {{ $announcement->body }}
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">{{ __('Belum ada pengumuman.') }}</p>
                    @endforelse

                    <div>
                        {{ $announcements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

