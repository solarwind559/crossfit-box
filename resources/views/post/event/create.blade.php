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
                        <h1 class="text-xl font-bold pb-3">Create Event</h1>
                        <form action="/schedule" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="title">Title:</label>
                                <input type="text" class="form-input mt-1 block w-full" id="title" value="{{ old('title') }}"
                                    name="title">
                                @error('title')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="imageInput">Image:</label>
                                <input type="file" class="form-input mt-1 block w-full" id="imageInput" value="{{ old('image') }}" name="image">
                                @error('image')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="title">Location:</label>
                                <input type="text" class="form-input mt-1 block w-full" id="location" value="{{ old('location') }}"
                                    name="location">
                                @error('location')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="title">Date:</label>
                                <input type="datetime-local" class="form-input mt-1 block w-full" id="event_date" value="{{ old('event_date') }}"
                                    name="event_date">
                                @error('date')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="imageInput">Post text:</label>
                                <textarea class="tinyMce" name="content">{{ old('content') }}</textarea>
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
