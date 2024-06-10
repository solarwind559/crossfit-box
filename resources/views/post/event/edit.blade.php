<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        @if (session('success'))
                            <div class="success-box bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        onclick="this.parentElement.parentElement.remove();">
                                        <title>Close</title>
                                        <path
                                            d="M14.348 14.849a.5.5 0 0 1-.708 0L10 11.207l-3.651 3.642a.5.5 0 0 1-.708-.707l3.651-3.642-3.651-3.642a.5.5 0 0 1 .708-.708l3.651 3.642 3.651-3.642a.5.5 0 0 1 .708.708L10.707 10l3.641 3.651a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                </span>
                            </div>
                        @endif
                        <a href="{{ route('event.show', $event->id) }}"
                            class="bg-blue-custom text-white font-bold py-2 px-4 rounded float-right">View Event</a>
                        <h1 class="text-xl font-bold pb-3">Create Event</h1>
                        <form action="{{ route('post.event.update', $event->id) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            @csrf
                            <div class="mb-4">
                                <label for="title">Title:</label>
                                <input type="text" class="form-input mt-1 block w-full" id="title"
                                    value="{{ $event->title }}" name="title">
                                @error('title')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="imageInput">Image:</label>
                                <input type="file" class="form-input mt-1 block w-full" id="imageInput"
                                    name="image">
                                @error('image')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-4">
                                <label for="title">Location:</label>
                                <input type="text" class="form-input mt-1 block w-full" id="location"
                                    value="{{ $event->location }}" name="location">
                                @error('location')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="title">Date:</label>
                                <input type="datetime-local" class="form-input mt-1 block w-full" id="event_date"
                                    value="{{ old('event_date', $event->date) }}" name="event_date">
                                @error('event_date')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="imageInput">Post text:</label>
                                <textarea class="tinyMce" name="content">{{ $event->content }}</textarea>
                                @error('content')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="bg-blue-custom text-white font-bold py-2 px-4 rounded"
                                onclick="tinyMCE.triggerSave();">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
