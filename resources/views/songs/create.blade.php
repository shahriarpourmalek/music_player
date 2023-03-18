@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-4">
        <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="artist" class="block text-gray-700 font-bold mb-2">Artist:</label>
                <input type="text" name="artist" id="artist" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('artist')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-4">
                <label for="file" class="block text-gray-700 font-bold mb-2">Song File:</label>
                <input type="file" name="file" id="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('file')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Upload Song
                </button>
            </div>
        </form>
    </div>
@endsection
